<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;

class DateTest extends BaseController
{
    public function index()
    {
        $all = Db::table('articles')->select();
        return json($all);
    }
}
