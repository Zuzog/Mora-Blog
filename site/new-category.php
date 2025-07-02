<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>TPE - Create a Category</title>
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

    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Create a Category</h2>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Contact Us Area -->
    <section class="contact_area2">
        <div class="container">
            <form class="row from_main" action="php/create_category.php" method="post" id="newcategoryform" novalidate="novalidate">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                </div>
                <div class="form-group col-12">
                    <button class="submit_btn btn" id="js-contact-btn" type="submit">Create Category<i class="fa fa-arrow-right"></i></button>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                </div>
            </form>
        </div>
        <a href="administration.php">Back to the administration panel</a>
    </section>
    <!-- End Contact Us Area -->

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