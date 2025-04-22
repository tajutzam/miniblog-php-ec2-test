<?php
$pdo = new PDO("mysql:host=localhost;dbname=news_db", "root", "root");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
