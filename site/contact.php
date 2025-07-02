<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>TPE - Contact Us</title>
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
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Contact Us Area -->
    <section class="contact_area">
        <div class="container">
            <form class="row from_main" action="php/contact.php" method="post" id="phpcontactform" novalidate="novalidate">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company">
                </div>
                <div class="form-group col-md-6">
                    <select class="post_select">
                        <option>Select request</option>
                        <option>Travel Post</option>
                        <option>Finance Post</option>
                        <option>Trading Post</option>
                        <option>Tech Post</option>
                        <option>Vodeo Post</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group col-12">
                    <button class="submit_btn btn" id="js-contact-btn" type="submit">SEND Request <i class="fa fa-arrow-right"></i></button>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Us Area -->

    <!-- Connect with us -->
    <section class="connect_with_us">
        <div class="container">
            <h2>Connect with us</h2>
            <ul class="contact_with_socail">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Connect with us -->

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