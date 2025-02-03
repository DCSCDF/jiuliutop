<?php
// filepath: /d:/phpstudy_pro/WWW/jiuliutop/app/controller/Index.php


namespace app\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        // 获取文章列表
        $articles =  Db::table('articles')->select();

        // 渲染首页视图并传递文章列表
        return View::fetch('index/index', ['articles' => $articles]);
    }
}
