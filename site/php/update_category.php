<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

$req = $db->prepare("UPDATE CATEGORY set name = :name WHERE category_id=:id");

$data = $req->execute([
    'name' => $_POST['name'],
    'id' => $_POST['id'],
]);

header("Location: ../category-list.php?id=" . $_POST['id']);
exit();
