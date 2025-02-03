<?php

namespace app\model;

use think\Model;

// 文章模型类，负责与数据库中的文章表进行交互
class Article extends Model
{
    // 定义表名
    protected $table = 'articles';

    // 定义主键
    protected $pk = 'id';

    // 允许批量赋值的字段
    protected $fillable = ['title', 'content', 'id', 'created_at', 'updated_at'];

    // 获取所有文章
    public function getAllArticles()
    {
        return $this->select();
    }

    // 根据ID获取文章
    public function getArticleById($id)
    {
        return $this->find($id);
    }

    // 创建新文章
    public function createArticle($data)
    {
        return $this->create($data);
    }

    // 更新文章
    public function updateArticle($id, $data)
    {
        return $this->where('id', $id)->update($data);
    }

    // 删除文章
    public function deleteArticle($id)
    {
        return $this->destroy($id);
    }
}
