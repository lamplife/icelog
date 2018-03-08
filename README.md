# icelog
公共日志服务 for laravel

安装

	composer require firstphp/icelog:"1.0"


数据迁移

    拷贝迁移文件到指定目录: cp -R vendor/firstphp/icelog/src/Migrations/* database/migrations/

    执行数据迁移命令: php artisan migrate
    可能会报错，报错解决方法(详见文章 http://www.firstphp.com/archives/192.html)：
    /project/app/Providers/AppServiceProvider.php 中boot()方法添加：Schema::defaultStringLength(191);

    因为laravel自身的Schema无法构造联合表,故而在生成表后,需手动执行一下该SQL:
    ALTER TABLE `user_log` ENGINE=MRG_MyISAM UNION=(user_log_201801,user_log_201802,user_log_201803,user_log_201804,user_log_201805,user_log_201806,user_log_201807,user_log_201808,user_log_201809,user_log_201810,user_log_201811,user_log_201812);


注册服务
    编辑 config/app.php 文件, 在 providers 数组中添加: Firstphp\Wechat\Providers\WechatServiceProvider::class,


示例代码：

	use Firstphp\Icelog\Facades\IcelogFactory;

    ......

    添加日志:
        $data = [
            'user_id' => 1,
            'type' => 1,
            'source_id' => 1,
            'remark' => '描述内容201801',
            'original' => '原始内容11',
            'record' => '操作内容111',
        ];
        IcelogFactory::addlogs($data)

    日志列表(支持分页):
        $offset = isset($this->params['offset']) && $this->params['offset'] ? $this->params['offset'] : 0;
        $limit = isset($this->params['limit']) && $this->params['limit'] ? $this->params['limit'] : 10;
        return IcelogFactory::getlogs($offset, $limit);
