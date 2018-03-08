<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $logTabName = "user_log";
        Schema::create($logTabName."_201801", function (Blueprint $table) {
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

        Schema::create($logTabName."_201802", function (Blueprint $table) {
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

        Schema::create($logTabName."_201803", function (Blueprint $table) {
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

        Schema::create($logTabName."_201804", function (Blueprint $table) {
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

        Schema::create($logTabName."_201805", function (Blueprint $table) {
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

        Schema::create($logTabName."_201806", function (Blueprint $table) {
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

        Schema::create($logTabName."_201807", function (Blueprint $table) {
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

        Schema::create($logTabName."_201808", function (Blueprint $table) {
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

        Schema::create($logTabName."_201809", function (Blueprint $table) {
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

        Schema::create($logTabName."_201810", function (Blueprint $table) {
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

        Schema::create($logTabName."_201811", function (Blueprint $table) {
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

        Schema::create($logTabName."_201812", function (Blueprint $table) {
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

        Schema::create($logTabName, function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $logTabName = "user_log";
        Schema::dropIfExists($logTabName.'_201801');
        Schema::dropIfExists($logTabName.'_201802');
        Schema::dropIfExists($logTabName.'_201803');
        Schema::dropIfExists($logTabName.'_201804');
        Schema::dropIfExists($logTabName.'_201805');
        Schema::dropIfExists($logTabName.'_201806');
        Schema::dropIfExists($logTabName.'_201807');
        Schema::dropIfExists($logTabName.'_201808');
        Schema::dropIfExists($logTabName.'_201809');
        Schema::dropIfExists($logTabName.'_201810');
        Schema::dropIfExists($logTabName.'_201811');
        Schema::dropIfExists($logTabName.'_201812');
        Schema::dropIfExists($logTabName);
    }
}
