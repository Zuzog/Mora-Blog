<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};

// Préparation de la requête de base pour l'article
$req = "UPDATE ARTICLE SET ";
$params = [];

// Ajout du titre si défini
if (isset($_POST['title']) && !empty($_POST['title'])) {
    $req .= "title = :title, ";
    $params['title'] = $_POST['title'];
}

// Ajout du contenu si défini
if (isset($_POST['content']) && !empty($_POST['content'])) {
    $req .= "content = :content, ";
    $params['content'] = $_POST['content'];
}

// Suppression de la dernière virgule et ajout de la condition WHERE
$req = rtrim($req, ", ") . " WHERE article_id = :id";
$params['id'] = $_POST['id'];

// Préparation et exécution de la requête
$req = $db->prepare($req);
$data = $req->execute($params);

// Gestion des catégories
if (isset($_POST['category'])) {
    // Récupérer les catégories actuelles de l'article
    $getCurrentCategories = $db->prepare("SELECT category_id FROM ARTICLE_CATEGORY WHERE article_id = :id");
    $getCurrentCategories->execute(['id' => $_POST['id']]);
    $currentCategories = $getCurrentCategories->fetchAll(PDO::FETCH_COLUMN);

    // Comparer les catégories actuelles avec les nouvelles
    $newCategories = $_POST['category'];

    // Catégories à ajouter (présentes dans new mais pas dans current)
    $categoriesToAdd = array_diff($newCategories, $currentCategories);

    // Catégories à supprimer (présentes dans current mais pas dans new)
    $categoriesToRemove = array_diff($currentCategories, $newCategories);

    // Ajouter les nouvelles catégories
    if (!empty($categoriesToAdd)) {
        $addCategory = $db->prepare("INSERT INTO ARTICLE_CATEGORY (article_id, category_id) VALUES (:article_id, :category_id)");
        foreach ($categoriesToAdd as $categoryId) {
            $addCategory->execute([
                'article_id' => $_POST['id'],
                'category_id' => $categoryId
            ]);
        }
    }

    // Supprimer les catégories non sélectionnées
    if (!empty($categoriesToRemove)) {
        $removeCategory = $db->prepare("DELETE FROM ARTICLE_CATEGORY WHERE article_id = :article_id AND category_id = :category_id");
        foreach ($categoriesToRemove as $categoryId) {
            $removeCategory->execute([
                'article_id' => $_POST['id'],
                'category_id' => $categoryId
            ]);
        }
    }
}

header("Location: ../article-list.php?id=" . $_POST['id']);
exit();
