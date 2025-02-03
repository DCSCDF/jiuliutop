<?php

namespace app\controller;

// 引入必要的类
use think\Controller;
use app\model\User;
use app\model\Article;

class Admin extends Controller
{
    // 后台首页
    public function index()
    {
        // 渲染后台管理首页视图
        return $this->fetch('admin/index');
    }

    // 用户管理
    public function userManagement()
    {
        // 获取所有用户信息
        $users = User::all();
        // 渲染用户管理视图
        return $this->fetch('admin/user_management', ['users' => $users]);
    }

    // 文章管理
    public function articleManagement()
    {
        // 获取所有文章信息
        $articles = Article::all();
        // 渲染文章管理视图
        return $this->fetch('admin/article_management', ['articles' => $articles]);
    }

    // 登录功能
    public function login()
    {
        if ($this->request->isPost()) {
            // 获取登录信息
            $data = $this->request->post();
            // 验证用户登录
            $user = User::where('username', $data['username'])->where('password', md5($data['password']))->find();
            if ($user) {
                // 登录成功，跳转到后台首页
                return redirect('admin/index');
            } else {
                // 登录失败，返回错误信息
                return $this->error('用户名或密码错误');
            }
        }
        // 渲染登录视图
        return $this->fetch('admin/login');
    }

    // 退出登录
    public function logout()
    {
        // 清除用户会话
        session(null);
        // 跳转到登录页面
        return redirect('admin/login');
    }
}
