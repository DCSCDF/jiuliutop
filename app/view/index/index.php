<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>博客首页</title>
    <link rel="stylesheet" href="/path/to/your/styles.css"> <!-- 引入样式文件 -->
</head>

<body>
    <header>
        <h1>欢迎来到我的博客</h1>
        <nav>
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="/article/index">文章列表</a></li>
                <li><a href="/admin/login">后台管理</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>最新文章</h2>
            <ul>
                <!-- 这里将动态加载最新文章 -->
                <?php foreach ($articles as $article): ?>
                    <li>
                        <h3><a href="/article/view?id=<?= $article['id'] ?>">
                                <?= htmlspecialchars($article['title']) ?>
                            </a></h3>
                        <p>
                            <?= htmlspecialchars($article['summary']) ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 jiuliu. 保留所有权利.</p>
    </footer>
</body>

</html>