<?php

namespace app\controller;

// 引入必要的类
use app\model\Article;
use app\BaseController;
use app\model\User;
use think\facade\Session;

class Admin extends BaseController
{
    // 显示登录页面
    public function index()
    {
        return view('admin/login');
    }

    // 登录功能
    public function denglu()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $username = $data['username'];
            $password = md5($data['password']);

            $user = User::where('username', $username)->where('password', $password)->find();
            if ($user) {
                // 登录成功，保存用户信息到 session
                Session::set('username', $username);
                Session::set('user_id', $user->id);
                return redirect('admin/index');
            } else {
                // 登录失败，返回错误信息
                Session::flash('error', '用户名或密码错误');
                /* 原地跳转 */
                /* return redirect('admin/denglu'); */
                echo "<script>alert('用户名或密码错误');window.location.href='denglu'</script>";
            }
        }
        return view('admin/login');
    }

    // 退出登录
    public function logout()
    {
        Session::clear();
        return redirect('admin/denglu');
    }

    // 用户管理
    public function userManagement()
    {
        $users = User::all();
        return view('admin/user_management', ['users' => $users]);
    }

    // 文章管理
    public function articleManagement()
    {
        $articles = Article::all();
        return view('admin/article_management', ['articles' => $articles]);
    }

    // 用户信息展示
    public function show()
    {
        $username = Session::get('username');
        $user = User::where('username', $username)->find();
        return view('admin/index', ['user' => $user]);
    }

    // 注册页面
    public function zhuce()
    {
        return view('admin/register');
    }

    // 注册功能
    public function doZhuce()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $username = $data['username'];
            $password = md5($data['password']);
            $email = $data['email'];

            // 检查用户是否已经存在
            $existingUser = User::where('username', $username)->find();
            if ($existingUser) {
                return redirect('admin/register')->with('error', '该用户已经注册，请直接登录');
            }

            // 创建新用户
            $user = new User();
            $user->username = $username;
            $user->password = $password;
            $user->email = $email;
            $user->save();

            // 注册成功，保存用户信息到 session
            Session::set('username', $username);
            Session::set('user_id', $user->id);
            return redirect('admin/index')->with('success', '注册成功！前往用户中心');
        }
        return view('admin/register');
    }
}
