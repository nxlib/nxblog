<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2016/11/7
 * Time: 9:56
 */

namespace Controller;


use NxLib\Core\Controller;
use NxLib\Core\View;

class Base extends Controller
{
    //put your code here
    protected $view;

    public function __construct()
    {
        $this->view = View::init();
    }
}