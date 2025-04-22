<?php
require 'db.php';
$posts = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini News Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">📰 Mini News Blog</h1>
        <a href="add.php" class="btn btn-primary mb-4">+ Tambah Berita</a>

        <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                    <p class="card-text"><?= substr(strip_tags($post['content']), 0, 100) ?>...</p>
                    <a href="detail.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>