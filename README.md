# [JiuLiuTOP项目说明](https://www.jiuliu.top/)

## 项目简介
jiuliutop 是一个基于 ThinkPHP 框架开发的博客网站，旨在提供一个简单易用的博客平台，用户可以在此平台上发布、编辑和管理文章，同时提供后台管理功能。

## 功能特性
- **文章管理**：用户可以创建、编辑和删除文章。
- **用户管理**：后台管理员可以管理用户信息。
- **文章列表**：展示所有发布的文章，用户可以查看文章的标题和摘要。
- **后台管理**：提供一个管理界面，方便管理员进行管理操作。
- **用户登录**：提供用户登录功能，确保后台管理的安全性。

## 项目结构
```
jiuliutop
├── app
│   ├── controller          		# 控制器目录
│   │   ├── Article.php     		# 文章控制器
│   │   ├── Admin.php       		# 后台管理控制器
│   │   └── Index.php       		# 首页控制器
│   ├── model               		# 模型目录
│   │   ├── Article.php     		# 文章模型
│   │   └── User.php        		# 用户模型
│   ├── view                		# 视图目录
│   │   ├── article         		# 文章相关视图
│   │   │   ├── index.php   		# 文章列表视图
│   │   │   ├── create.php  		# 创建文章视图
│   │   │   └── edit.php    		# 编辑文章视图
│   │   ├── admin           		# 后台管理视图
│   │   │   ├── index.php   		# 后台管理首页视图
│   │   │   └── login.php   		# 后台登录视图
│   │   └── index           		# 首页视图
│   │       └── index.php   		# 网站首页视图
├── config                  		# 配置目录
│   ├── app.php             		# 应用配置文件
│   ├── database.php        		# 数据库配置文件
│   └── route.php           		# 路由配置文件
├── public                  		# 公共目录
│   ├── index.php           		# 应用入口文件
│   └── .htaccess           		# Apache配置文件
├── route                   		# 路由定义目录
│   └── route.php           		# 路由定义文件
├── vendor                  		# 第三方库目录
├── composer.json           		# Composer配置文件
└── README.md               		# 项目说明文件
```

## 安装与使用
1. 克隆项目到本地：
   ```
   git clone <项目地址>
   ```
2. 进入项目目录：
   ```
   cd jiuliutop
   ```
3. 安装依赖：
   ```
   composer install
   ```
4. 配置数据库连接信息，修改 `config/database.php` 文件。
5. 启动服务器，访问 `http://你的域名/public/index.php`。

## 贡献
欢迎任何形式的贡献，您可以通过提交问题或拉取请求来参与项目的改进。

## 许可证
本项目采用 MIT 许可证，详细信息请查看 LICENSE 文件。