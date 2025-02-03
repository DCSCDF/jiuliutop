<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>创建文章</title>
    <link rel="stylesheet" href="/path/to/your/css/style.css"> <!-- 引入样式文件 -->
</head>
<body>
    <h1>创建新文章</h1>
    <form action="/article/store" method="post"> <!-- 提交表单到文章存储接口 -->
        <div>
            <label for="title">标题：</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">内容：</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        <div>
            <button type="submit">提交</button>
        </div>
    </form>
    <a href="/article/index">返回文章列表</a> <!-- 返回文章列表的链接 -->
</body>
</html>