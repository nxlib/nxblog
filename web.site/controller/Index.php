<?php
namespace Controller;

use Common\Model\Demo;
use \NxLib\Core\Dispatch;

/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2016/11/3
 * Time: 17:33
 */
class Index extends Base
{
    public function index()
    {
        $this->view->set("data",Demo::demo());
        $this->view->set("title",'Demo-Page');
        $this->view->set("current_controller",Dispatch::getController());
        $this->view->display("index/index");
    }
}