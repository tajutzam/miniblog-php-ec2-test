<?php
require 'db.php';
$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
if (!$post) {
    die("Berita tidak ditemukan.");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p class="text-muted"><?= $post['created_at'] ?></p>
        <hr>
        <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
        <br>
        <a href="index.php" class="btn btn-outline-secondary">← Kembali</a>
    </div>
</body>

</html>