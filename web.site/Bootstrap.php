<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 06/11/2016
 * Time: 23:01
 */
define("APP_PATH",dirname(__FILE__));

define("NX_ROOT",dirname(APP_PATH));

define("DS",DIRECTORY_SEPARATOR);

define("PAGE_404",'/');

define("RESTFUL",false);

$composer_autoload_file = NX_ROOT.DS.'composer'.DS.'vendor'.DS.'autoload.php';
if(!file_exists($composer_autoload_file)){
    die("please enter the `composer` path and run `composer install` first");
}
include $composer_autoload_file;

\NxLib\Core\MVC::init(APP_PATH);

\NxLib\Core\Dispatch::run();