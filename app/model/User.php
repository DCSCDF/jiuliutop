<?php
// 用户模型，负责与数据库中的用户表进行交互

namespace app\model;

use think\Model;

class User extends Model
{
    // 定义用户表名
    protected $table = 'users';

    // 定义可批量赋值的字段
    protected $fillable = ['username', 'password', 'email'];

    // 创建用户
    public function createUser($data)
    {
        return $this->create($data);
    }

    // 获取用户列表
    public function getUsers()
    {
        return $this->all();
    }

    // 根据ID获取用户
    public function getUserById($id)
    {
        return $this->find($id);
    }

    // 更新用户信息
    public function updateUser($id, $data)
    {
        $user = $this->find($id);
        return $user->save($data);
    }

    // 删除用户
    public function deleteUser($id)
    {
        return $this->destroy($id);
    }
}