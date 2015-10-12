<?php
namespace Home\Controller;

use Think\PhpUnit;

class IndexControllerTest extends PhpUnit
{

    static public function setupBeforeClass()
    {
        // 下面四行代码模拟出一个应用实例, 每一行都很关键, 需正确设置参数
        parent::$app = new \Think\PhpunitHelper();
        parent::$app->setMVC('domain.com','Home','Index');
        parent::$app->setTestConfig(['DB_NAME'=>'test', 'DB_HOST'=>'127.0.0.1',]); // 一定要设置一个测试用的数据库,避免测试过程破坏生产数据
        parent::$app->start();
    }

    /**
     * 控制器action输出测试示例
     */
    public function testIndex()
    {
        $output = $this->execAction('index');
        $this->assertEquals('hello world',$output);
    }
}