<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Creative - Contact Us</title>

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
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>


    <!-- search-popup -->
    <?php include 'common/search.php'?>
    <!-- search-popup end -->

    <!-- main header -->
    <header class="main-header style-one style-six">
        <?php include 'common/header.php'?>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <?php include 'common/mobile-menu.php'?>
    <!-- End Mobile Menu -->

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/background/contact_us.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Contact us</a></li>
                    <li>Get In Touch</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-information -->
    <section class="contact-information centred">
        <div class="auto-container">
            <div class="sec-title right">
                <h5>focused with work</h5>
                <h2>We’re Global Management Consulting Firm <br />To Help With Financial Business</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-map"></i></div>
                            <h3>Office Location</h3>
                            <p>Bay Square, Business Bay<br />Dubai, UAE</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fas fa-phone"></i></div>
                            <h3>Calling Support</h3>
                            <p><a href="tel:+971529767727">+971 52 976 7727</a></p>
                              </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                            <h3>Email Information</h3>
                            <p><a href="mailto:info@creativelink.ae">info@creativelink.ae</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-information end -->

    <!-- contact-style-two -->
    <section class="contact-style-two" style="background-image: url(assets/images/background/contact-3.jpg);">
        <div class="auto-container">
            <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
                <div class="sec-title left light">
                    <h5>try our service</h5>
                    <h2>Drop Us a Line</h2>
                    <p>Ad mini veniam quis nostrud ipsum exercitas tion ullamco <br />ipsum laboris sed ut perspiciatis unde.</p>
                </div>
                 <?php if(isset($_SESSION["status"]) && $_SESSION["status"]=='success' ){ ?>
                            <div class="alert alert-success" role="alert">
                              <?php echo $_SESSION["message"]; ?>
                            </div>
                        <?php } if(isset($_SESSION["status"]) && $_SESSION["status"]=='error' ){ ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo $_SESSION["message"]; ?>
                            </div>
                        <?php } unset($_SESSION["status"]); unset($_SESSION["message"]); ?>
                        <div style="display: none" class="alert alert-success contact-success" role="alert">
                            </div>
                            <div style="display: none" class="alert alert-danger contact-error" role="alert"></div>
                <form method="post"   class="default-form" id="contactform"> 
                    <input type="hidden" name="post_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Your Name *"  validate="Enter name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address *"  validate="Enter mail" class="validEmail" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone *"  validate="Enter phone ">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject *"  validate="Enter subject ">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" id="contact_submit" type="button" >send request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map-column">
            <div class="google-map-area">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/shape/map-marker.png"]
                    }'>

                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><img src="assets/images/clients/clients-1.png" alt=""></figure>
                <figure class="client-logo"><img src="assets/images/clients/clients-2.png" alt=""></figure>
                <figure class="client-logo"><img src="assets/images/clients/clients-3.png" alt=""></figure>
                <figure class="client-logo"><img src="assets/images/clients/clients-4.png" alt=""></figure>
                <figure class="client-logo"><img src="assets/images/clients/clients-5.png" alt=""></figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->

    <!-- main-footer -->
    <?php include 'common/footer.php'?>
    <!-- main-footer end -->


    <!--Scroll to top-->
    <?php include 'common/scroll-to-top.php'?>


    <!-- sidebar cart item -->
    <?php include 'common/side-bar-cart.php'?>
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


<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script>
<script src="assets/js/form-validate.js"></script>
<!-- main-js -->
<script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
