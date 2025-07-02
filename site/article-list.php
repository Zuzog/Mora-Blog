<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8mb4", "exercice", "password123");
} catch (PDOException $e) {
    var_dump($e);
};
$getArticles = $db->prepare("SELECT * FROM ARTICLE");
$getSingleArticle = $db->prepare("SELECT * FROM ARTICLE WHERE article_id = :id");
$getCategories = $db->prepare("SELECT * FROM CATEGORY");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>TPE - Article List</title>
    <!-- Theme style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="background-transparent">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!-- End Header -->

    <?php
    isset($_GET['id']) ? $id = $_GET['id'] : $id = null;

    if ($id == null) {
        echo '
        <div class="container">
            <div class="pages_heder">
                <h2>List of Articles</h2>
            </div>
        </div>

        <section class="contact_area2">
            <div class="container">';

        $articles = $getArticles->execute();
        while ($article = $getArticles->fetch(PDO::FETCH_ASSOC)) {
            echo '
                <a href="article-list.php?id=' . $article['article_id'] . '">' . $article['title'] . '</a><br>';
        };
        echo '
            </div>
        </section>
        <a href="administration.php">Back to the administration panel</a>';
    } elseif ($id != null) {
        echo '
        <div class="container">
            <div class="pages_heder">
                <h2>Article Management</h2>
            </div>
        </div>

        <section class="contact_area2">
            <div class="container">';

        $article = $getSingleArticle->execute([
            'id' => $id
        ]);

        while ($article = $getSingleArticle->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <h2> Editing : ' . $article['title'] . '</h2>
            <form class="row from_main" action="php/update_article.php" method="post" id="newcategoryform" novalidate="novalidate">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="name" name="name" value="' . $article['title'] . '" placeholder="New Article Title">
                </div>
                <div class="form-group col-md-6">
                    <select multiple class="post_select2" name="category[]">';

            // Récupérer les catégories de l'article
            $getArticleCategories = $db->prepare("SELECT category_id FROM ARTICLE_CATEGORY WHERE article_id = :id");
            $getArticleCategories->execute(['id' => $id]);
            $articleCategories = $getArticleCategories->fetchAll(PDO::FETCH_COLUMN);

            // Afficher toutes les catégories
            $categories = $getCategories->execute();

            while ($category = $getCategories->fetch(PDO::FETCH_ASSOC)) {
                if (in_array($category['category_id'], $articleCategories)) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }
                echo '<option value="' . $category['category_id'] . '" ' . $selected . '> ' . $category['name'] . '</option>';
            };
            echo ' 
                    </select>
                </div>
                <div class="form-group col-12">
                    <textarea class="form-control" id="content" name="content" placeholder="Content">' . $article['content'] . '</textarea>
                </div>
                <div class="form-group col-12">
                    <input type="hidden" name="id" value="' . $article['article_id'] . '">
                    <button class="submit_btn btn" id="js-contact-btn" type="submit"> Update Article <i class="fa fa-arrow-right"></i></button>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                </div>
            </form>
            <form class="row from_main" action="php/remove_article.php" method="post" id="newcategoryform" novalidate="novalidate">
                <div class="form-group col-12">
                    <input type="hidden" name="id" value="' . $article['article_id'] . '">
                    <button class="submit_btn btn" id="js-contact-btn" type="submit"> Delete Article <i class="fa fa-arrow-right"></i></button>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                </div>
            </form>
            <a href="article-list.php">Back to the list of articles</a>
    </section>';
        }
    }
    ?>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- jQuery v3.2.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap v4.1.0 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Extra Plugin -->
    <script src="vendors/animate-css/wow.min.js"></script>
    <script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>
    <!-- Contact From js -->
    <script src="js/contact.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script>
</body>

</html>