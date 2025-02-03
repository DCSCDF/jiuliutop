<?php
// Index控制器，负责处理网站首页的请求

namespace app\controller;

use app\model\Article;

class Index
{
    // 显示首页
    public function index()
    {
        // 获取所有文章
        $articleModel = new Article();
        $articles = $articleModel->getAllArticles();

        // 渲染首页视图并传递文章数据
        return view('index/index', ['articles' => $articles]);
    }
}
