<?php
// 路由定义文件，负责定义应用的路由规则

use think\facade\Route;

// 定义首页路由
Route::get('/', 'index/index');

// 文章相关路由
Route::group('article', function () {
    Route::get('/', 'Article@index'); // 文章列表
    Route::get('create', 'Article@create'); // 创建文章
    Route::post('store', 'Article@store'); // 存储文章
    Route::get('edit/:id', 'Article@edit'); // 编辑文章
    Route::post('update/:id', 'Article@update'); // 更新文章
    Route::post('delete/:id', 'Article@delete'); // 删除文章
});

// 后台管理相关路由
Route::group('admin', function () {
    Route::get('/', 'Admin@index'); // 后台首页
    Route::get('login', 'Admin@login'); // 登录页面
    Route::post('doLogin', 'Admin@doLogin'); // 处理登录
    Route::get('logout', 'Admin@logout'); // 退出登录
});
