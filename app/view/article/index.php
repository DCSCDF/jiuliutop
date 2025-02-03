<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章列表</title>
    <link rel="stylesheet" href="/path/to/your/styles.css"> <!-- 引入样式文件 -->
</head>
<body>
    <header>
        <h1>博客文章列表</h1>
        <a href="/article/create">创建新文章</a> <!-- 创建新文章的链接 -->
    </header>
    <main>
        <ul>
            <!-- 假设有一个变量$articles包含所有文章 -->
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <li>
                        <h2><a href="/article/view?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['title']) ?></a></h2> <!-- 文章标题 -->
                        <p><?= htmlspecialchars($article['summary']) ?></p> <!-- 文章摘要 -->
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>暂无文章</li> <!-- 当没有文章时的提示 -->
            <?php endif; ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2023 博客网站</p>
    </footer>
</body>
</html>