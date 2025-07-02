<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />
  <!-- Theme tittle -->
  <title>TPE - Home</title>
  <!-- Theme style CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Header -->
  <?php include 'includes/header.php'; ?>
  <!-- End Header -->

  <!-- Breaking News Area -->
  <div class="container">
    <div class="braking_news row">
      <h4 class="braking_heding col-1">News</h4>
      <div id="newsIndicators" class="carousel slide col-11" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#">There are many variations of passages of Lorem Ipsum available text of the printing and typesetting industry</a>
          </div>
          <div class="carousel-item">
            <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#newsIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#newsIndicators" data-slide-to="1"></li>
          <li data-target="#newsIndicators" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Breaking News Area -->

  <!-- Home Banner Area -->
  <section class="home_banner_area">
    <div class="container">
      <div class="row home_banner_inner">

        <!-- Slicer col -->
        <div class="carousel slide banner_slider col-12" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/banner-slider.jpg" alt="First slide" />
              <ul class="special_share">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <div class="slider_caption">
                <h6 class="wow fadeInUp animated">February 21, 2018 , Updated 3 hours ago</h6>
                <a href="news-details.php" class="wow fadeInUp animated heding" data-wow-delay="0.2s">Lorem Ipsum is simply dummy text of the printing.</a>
                <p class="wow fadeInUp animated" data-wow-delay="0.4s">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of
                  type and scrambled it to make a type specimen book.
                </p>
                <a href="#" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Investing</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/banner-slider-2.jpg" alt="Second slide" />
              <ul class="special_share">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <div class="slider_caption">
                <h6 class="wow fadeInUp animated">February 21, 2018 , Updated 3 hours ago</h6>
                <a href="news-details.php" class="wow fadeInUp animated heding" data-wow-delay="0.2s">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                <p class="wow fadeInUp animated" data-wow-delay="0.4s">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of
                  type and scrambled it to make a type specimen book.
                </p>
                <a href="#" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Investing</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href=".banner_slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
          <a class="carousel-control-next" href=".banner_slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

        <!-- belarus_items -->
        <div class="col-md-6">
          <div class="belarus_items">
            <img src="images/banner-item-1.jpg" alt="" />
            <div class="belarus_content">
              <h6 class="wow fadeInUp">March 15, 2018</h6>
              <a href="news-details.php" class="heding wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              <a href="#" class="wow fadeInUp tag_btn" data-wow-delay="0.4s">Finance</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="belarus_items">
            <img src="images/banner-item-2.jpg" alt="" />
            <div class="belarus_content">
              <h6 class="wow fadeInUp">March 15, 2018</h6>
              <a href="news-details.php" class="heding wow fadeInUp" data-wow-delay="0.2s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</a>
              <a href="#" class="wow fadeInUp tag_btn" data-wow-delay="0.4s">Business</a>
            </div>
          </div>
        </div>
        <!-- End belarus_items -->

      </div>
    </div>
  </section>
  <!-- End Home Banner Area -->

  <!-- Post section -->
  <section class="post_section">
    <div class="container">
      <div class="row post_section_inner">

        <!-- Left_sidebar -->
        <div class="col-lg-8 left_sidebar">

          <!-- Tranding Area Post -->
          <div class="row tranding_post_area">
            <div class="col-12 tranding_tittle">
              <h2>BUSINESS Post</h2>
              <a href="news.php">View More <i class="fa fa-arrow-right"></i></a>
            </div>

            <!-- Tranding_post -->
            <div class="col-md-6">
              <div class="tranding_post">
                <a href="news-details.php" class="post_img">
                  <img src="images/post/business-post-1.jpg" alt="" />
                  <span class="tag_btn">Finance</span>
                </a>
                <div class="post_content">
                  <a href="news-details.php" class="t_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                  <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="#">Mahfuz Riad</a></h6>
                </div>
              </div>
            </div>

            <!-- Tranding_post -->
            <div class="col-md-6">
              <div class="tranding_post">
                <a href="news-details.php" class="post_img">
                  <img src="images/post/business-post-2.jpg" alt="" />
                  <span class="tag_btn">Trading</span>
                </a>
                <div class="post_content">
                  <a href="news-details.php" class="t_heding">Lorem ipsum dolor sit amet, consectetur adipiscing
                    <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                </div>
              </div>
            </div>

            <!-- Tranding_post no img -->
            <div class="col-md-6">
              <div class="tranding_post post_bg">
                <a href="news-details.php" class="t_heding">A Love Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                <span class="tag_btn">Travel</span>
              </div>
            </div>

            <!-- Tranding_post no img -->
            <div class="col-md-6">
              <div class="tranding_post post_bg">
                <a href="news-details.php" class="t_heding">Inside Sports Building a Magazine for the Digital Eye Strain</a>
                <h6>Dec 22, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                <span class="tag_btn">Tech</span>
              </div>
            </div>
          </div>

          <!-- Feature Post Area-->
          <div class="row feature_post_area">
            <div class="col-12">
              <div class="feature_tittle">
                <h2>Travel Post</h2>
                <a href="news.php">View More <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-12">
              <div class="media feature_post">
                <div class="feture_img">
                  <a href="news-details.php"><img src="images/post/travel-post-1.jpg" alt="" /></a>
                  <ul class="special_share">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="media-body feture_content">
                  <a href="news-details.php" class="f_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                  <h6>Dec 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="media feature_post">
                <div class="feture_img">
                  <a href="news-details.php"><img src="images/post/travel-post-2.jpg" alt="" /></a>
                  <ul class="special_share">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="media-body feture_content">
                  <a href="news-details.php" class="f_heding">Bitcoin ETFs seek approval of skeptical regulator</a>
                  <h6>Dec 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                    corrupti
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="media feature_post border-0">
                <div class="feture_img">
                  <a href="news-details.php"><img src="images/post/travel-post-3.jpg" alt="" /></a>
                  <ul class="special_share">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="media-body feture_content">
                  <a href="news-details.php" class="f_heding">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                  <h6>Dec 10, 2018 at 19:35 <span>|</span><a href="http://emran-khan.com">Emran Khan</a></h6>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                    corrupti
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Watch It Area-->
          <div class="row watch_it_area">

            <!-- font_load_post -->
            <div class="col-12">
              <div class="font_load_post">
                <img src="images/post/font-load-1.jpg" alt="" />
                <div class="post_caption">
                  <a href="#" class="wow fadeInUp tag_btn">Travel</a>
                  <a href="news-details.php" class="wow fadeInUp heding" data-wow-delay="0.2s">Why It Pays to Front-Load Your 529 Plan</a>
                </div>
              </div>
            </div>

            <!--ethereum_price_posts -->
            <div class="col-12">
              <div class="ethereum_price_posts">
                <a href="#" class="tag_btn">Travel</a>
                <a href="news-details.php" class="ep_heding">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled</a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Praesent placerat turpis nec lectus congue, sed varius
                  ligula iaculis. Orci varius natoque penatibus.
                  Praesent placerat turpis nec lectus congue, sed varius
                  ligula iaculis. Orci varius natoque penatibus.
                </p>
                <img src="images/post/font-load-2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>

        <!-- End left_sidebar -->
        <div class="col-lg-4 right_sidebar">

          <!-- Text widget -->
          <div class="text_widget_area">
            <div class="text_widget">
              <a href="news-details.php">Nam ornare ultricies dui in finibus. Vivamus in neque vel ipsum accumsan pharetra.</a>
              <h6>10:29, Press Releases</h6>
            </div>
            <div class="text_widget">
              <a href="news-details.php">Phasellus mauris tellus, suscipit ac lectus vitae, faucibus vehicula diam.</a>
              <h6>12:59, Press Releases</h6>
            </div>
            <div class="text_widget">
              <a href="news-details.php">Buffett Warns Investors That Safe-Looking Bonds Can Be Risky</a>
              <h6>2:37, Press Releases</h6>
            </div>
            <div class="text_widget m-0">
              <a href="news-details.php">Nam ornare ultricies dui in finibus. Vivamus in neque vel ipsum accumsan pharetra.</a>
              <h6 class="padding-bottom-0">11:38, Press Releases</h6>
            </div>
          </div>

          <!-- Advertisement -->
          <div class="advertisement">
            <a href="#"><img src="images/advertisement-1.jpg" alt="" /></a>
          </div>

          <!-- Advertisement -->
          <div class="advertisement_2">
            <a href="#">
              <img src="images/advertisement-2.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Post section -->

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
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap v4.1.0 -->
  <script src="js/bootstrap.min.js"></script>
  </button>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap v4.1.0 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Extra Plugin -->
  <script src="vendors/animate-css/wow.min.js"></script>
  <!-- Theme js / Custom js -->
  <script src="js/theme.js"></script>
</body>

</html>