<?php
namespace app\controller;

use app\model\Article as ArticleModel;
use think\Request;

class Article
{
    // 显示文章列表
    public function index()
    {
        $articles = ArticleModel::all();
        return view('article/index', ['articles' => $articles]);
    }

    // 显示创建文章的表单
    public function create()
    {
        return view('article/create');
    }

    // 处理创建文章的请求
    public function store(Request $request)
    {
        $data = $request->post();
        $article = new ArticleModel();
        $article->save($data);
        return redirect('article/index');
    }

    // 显示编辑文章的表单
    public function edit($id)
    {
        $article = ArticleModel::find($id);
        return view('article/edit', ['article' => $article]);
    }

    // 处理编辑文章的请求
    public function update(Request $request, $id)
    {
        $data = $request->post();
        $article = ArticleModel::find($id);
        $article->save($data);
        return redirect('article/index');
    }

    // 删除文章
    public function delete($id)
    {
        $article = ArticleModel::find($id);
        $article->delete();
        return redirect('article/index');
    }
}