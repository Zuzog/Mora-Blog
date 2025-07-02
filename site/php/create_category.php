<?php

$newCategory = $_POST['name'];

try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

$req = $db->prepare("INSERT INTO CATEGORY (name) VALUES (:name)");

$data = $req->execute([
    'name' => $newCategory,
]);

header("Location: ../category-list.php");
exit();
