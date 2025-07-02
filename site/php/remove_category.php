<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

$req = $db->prepare("DELETE FROM CATEGORY WHERE category_id=:id");

$data = $req->execute([
    'id' => $_POST['id'],
]);

header("Location: ../category-list.php");
exit();
