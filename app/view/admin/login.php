<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <link rel="stylesheet" href="/path/to/your/css/style.css"> <!-- 引入样式文件 -->
</head>
<body>
    <div class="login-container">
        <h2>管理员登录</h2>
        <form action="/admin/login" method="post"> <!-- 登录表单 -->
            <div class="form-group">
                <label for="username">用户名</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">登录</button>
        </form>
        <div class="footer">
            <p>© 2023 jiuliutop 博客网站</p>
        </div>
    </div>
</body>
</html>