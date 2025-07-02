<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

$req = $db->prepare("DELETE FROM ARTICLE WHERE article_id=:id");
$req2 = $db->prepare("DELETE FROM ARTICLE_CATEGORY WHERE article_id=:id");

$data = $req->execute([
    'id' => $_POST['id'],
]);
$data2 = $req2->execute([
    'id' => $_POST['id'],
]);
header("Location: ../article-list.php");
exit();
