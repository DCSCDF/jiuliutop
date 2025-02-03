<?php

use think\facade\Route;

// 定义首页路由
Route::get('/', 'app\controller\Index@index');

// 文章相关路由
Route::group('article', function () {
    Route::get('/', 'app\controller\Article@index'); // 文章列表
    Route::get('create', 'app\controller\Article@create'); // 创建文章
    Route::post('store', 'app\controller\Article@store'); // 存储文章
    Route::get('edit/:id', 'app\controller\Article@edit'); // 编辑文章
    Route::post('update/:id', 'app\controller\Article@update'); // 更新文章
    Route::post('delete/:id', 'app\controller\Article@delete'); // 删除文章
});

// 定义后台管理相关路由
Route::group('admin', function () {
    Route::get('/', 'app\controller\Admin@index'); // 登录页面
    Route::post('denglu', 'app\controller\Admin@denglu'); // 登录功能
    Route::get('logout', 'app\controller\Admin@logout'); // 退出登录
    Route::get('userManagement', 'app\controller\Admin@userManagement'); // 用户管理
    Route::get('articleManagement', 'app\controller\Admin@articleManagement'); // 文章管理
    Route::get('register', 'app\controller\Admin@zhuce'); // 注册页面
    Route::post('doZhuce', 'app\controller\Admin@doZhuce'); // 注册功能
    Route::get('show', 'app\controller\Admin@show'); // 用户信息展示
});

// 定义日期测试路由
Route::get('dateTest', 'app\controller\DateTest@index');

// 定义用户相关路由
// Route::group('user', function () {
//     Route::get('/', 'app\controller\User@index'); // 用户列表
//     Route::get('create', 'app\controller\User@create'); // 创建用户
//     Route::post('store', 'app\controller\User@store'); // 存储用户
//     Route::get('edit/:id', 'app\controller\User@edit'); // 编辑用户
//     Route::post('update/:id', 'app\controller\User@update'); // 更新用户
//     Route::post('delete/:id', 'app\controller\User@delete'); // 删除用户
// });
