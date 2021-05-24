<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Creative - Search Result</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/rtl.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">

        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>


    <!-- search-popup -->
    <?php include 'common/search.php' ?>
    <!-- search-popup end -->


    <!-- main header -->
    <header class="main-header style-one style-six">
        <?php include 'common/header.php' ?>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <?php include 'common/mobile-menu.php' ?>
    <!-- End Mobile Menu -->


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title-3.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Search Result</h1>
                <!-- <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Services</li>
                </ul> -->
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div style="display: flex; justify-content: center; padding: 50px 0;">
        <h2><?php
            $services = array("financial consulting", "tax management", "economic planning");
            $searchString = strtolower($_POST["search-input"]);

            $m_array = preg_grep('/^' . $searchString . '\s.*/', $services);

            // function array_search_partial($arr, $keyword)
            // {
            //     foreach ($arr as $index => $string) {
            //         if (strpos($string, $keyword) !== FALSE) {
            //             return $index;
            //         } else {
            //             return FALSE;
            //         }
            //     }
            // }

            if (count($m_array) > 0) {
                echo 'We found Services matching your search';
            } else {
                echo "No Services Found matching your search: $searchString";
            }
            ?></h2>
    </div>

    <!-- service-style-three -->
    <section class="service-style-three service-page-2">
        <?php if (count($m_array) > 0) : ?>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-5.jpg" alt="">
                                    <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="financial-analysis.html">Finance Consulting</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-6.jpg" alt="">
                                    <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="taxation-planning.html">Tax Management</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-7.jpg" alt="">
                                    <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="investment-trading.html">Economic Planning</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-8.jpg" alt="">
                                    <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="financial-analysis.html">Strategy Thinking</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-9.jpg" alt="">
                                    <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="taxation-planning.html">Market Analysis</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <div class="overlay-box-1"></div>
                                    <div class="overlay-box-2"></div>
                                    <img src="assets/images/service/service-10.jpg" alt="">
                                    <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="investment-trading.html">Content Optimize</a></h3>
                                    <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                    <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div></div>
        <?php endif; ?>
    </section>
    <!-- service-style-three end -->


    <!-- main-footer -->
    <?php include 'common/footer.php' ?>
    <!-- main-footer end -->


    <!--Scroll to top-->
    <?php include 'common/scroll-to-top.php' ?>


    <!-- sidebar cart item -->
    <?php include 'common/side-bar-cart.php' ?>
    <!-- END sidebar widget item -->



    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>