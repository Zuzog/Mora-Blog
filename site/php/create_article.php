<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

$req = $db->prepare("INSERT INTO ARTICLE (title, content) VALUES (:title, :content)");
$req2 = $db->prepare("INSERT INTO ARTICLE_CATEGORY (article_id, category_id) VALUES (:article_id, :category_id)");

$data = $req->execute([
    'title' => $_POST['title'],
    'content' => $_POST['content'],
]);
$lastId = $db->lastInsertId();
foreach ($_POST['category'] as $category) {
    $data = $req2->execute([
        'article_id' => $lastId,
        'category_id' => $category,
    ]);
}

header("Location: ../index.php");
exit();
