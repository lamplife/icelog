<?php
/**
 * Created by PhpStorm.
 * User: 狂奔的螞蟻 <www.firstphp.com>
 * Date: 2017/7/5
 * Time: 下午8:32
 */

namespace Firstphp\Icelog\Services;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IcelogService {


    public function __construct() {
        //
    }



    /**
     * 添加日志
     *
     * @params *data json数据
     * @author 狂奔的螞蟻 <www.firstphp.com>
     */
    public function addlogs($data = '') {
        if (empty($data)) {
            return ['status' => false, 'msg' => '参数错误'];
        }

        $logTabName = "user_log_".date("Ym", time());
        if (!Schema::hasTable($logTabName)) {
            Schema::create($logTabName, function($table) {
                $table->unsignedInteger('id');
                $table->unsignedInteger('user_id')->default(0);
                $table->unsignedTinyInteger('type')->default(0);
                $table->unsignedInteger('source_id')->default(0);
                $table->string('remark', 500)->default('')->comment('描述');
                $table->text('original')->comment('原始数据');
                $table->text('record')->comment('操作内容');
                $table->timestamps();
                $table->index(['user_id', 'type', 'source_id'], 'getRecord');
                $table->engine = 'MyISAM';
            });
        }

        $userId = isset($data['user_id']) && $data['user_id'] ? $data['user_id'] : 0;
        DB::beginTransaction();

        try {
            $lastId = DB::table("user_log_id")->insertGetId(['user_id' => $userId, 'ip' => Request::getClientIp(), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
            $data['id'] = $lastId;
            $data['created_at'] = Carbon::now();
            $data['updated_at'] = Carbon::now();
            DB::table($logTabName)->insert([$data]);
            DB::commit();
        } catch (\Exception $e){
            DB::rollback();
            if (isset($lastId)) {
                DB::table("user_log_id")->where('id', $lastId)->delete();
            }
            return ['status' => false, 'msg' => "日志录入SQL错误"];
        }

        return ['status' => true, 'msg' => '添加成功'];

    }



    /**
     * 日志列表
     *
     * @author 狂奔的螞蟻 <www.firstphp.com>
     */
    public function getlogs($offset = 0, $limit = 1) {
        $total = DB::table("user_log")->count();
        $res = DB::table("user_log")
            ->take($limit)
            ->skip($offset)
            ->orderBy('id', 'DESC')
            ->get();
        $res = $res ? $res->toArray() : '';
        $result = [];
        if ($res) {
            foreach ($res as $key => $val) {
                $result[$key]['id'] = $val->id;
                $result[$key]['user_id'] = $val->user_id;
                $result[$key]['source_id'] = $val->source_id;
                $result[$key]['remark'] = $val->remark;
                $result[$key]['original'] = $val->original;
                $result[$key]['record'] = $val->record;
                $result[$key]['created_at'] = $val->created_at;
                $result[$key]['updated_at'] = $val->updated_at;
            }
        }
        $data = [
            'total' => $total,
            'data' => $result
        ];

        return $data;

    }



}