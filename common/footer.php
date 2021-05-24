<footer class="main-footer">
    <div class="footer-top">
        <div class="auto-container">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="index.php"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                            <div class="text">
                                <p>Tempor incididunt ut labore eut dolore veniam quis nostrud exercitation ullamc consequat. Duis aute irure.</p>
                            </div>
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Bay Square, Business Bay Dubai, UAE</li>
                                <li><i class="fab fa-whatsapp"></i><a href="tel:+9715297677279">+971 52 976 7727</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:info@creativelink.com">info@creativelink.com</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a rel="noopener noreferrer" href="https://www.facebook.com/creativelinkservices/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a rel="noopener noreferrer" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a rel="noopener noreferrer" href="https://www.linkedin.com/company/creativelinkservices" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a rel="noopener noreferrer" href="https://instagram.com/creativelinkservices?igshid=1r9fyf2f5fjba" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h4>Useful Links</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="careers.php">Careers</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                    <li><a href="faq.php">FAQ’s</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="download-center.php">Download Center</a></li>
                                    <li><a href="terms-of-use.php">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>Our Services</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="bank-assistance.php">Company Setup</a></li>
                                    <li><a href="bank-assistance.php">Bank Assistance</a></li>
                                    <li><a href="company-branding.php">Company Branding</a></li>
                                    <li><a href="pro-services.php">PRO Services</a></li>
                                    <li><a href="approvals.php">Approvals</a></li>
                                    <li><a href="others.php">Others</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column" style="margin-bottom: -40px;">
                        <div class="footer-widget newsletter-widget">
                            <div class="widget-title">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="widget-content">
                                <div class="text">
                                    <p>Join our newsletter to receive latest updates about market trends.</p>
                                </div>

                                <div class="alert alert-success newsletter-success" style="display: none" role="alert">
                                </div>
                                <div style="display: none" class="alert alert-danger newsletter-error" role="alert"></div>
                                <form method="post" class="newsletter-form " id="newsletter">
                                    <input type="hidden" name="post_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="name" placeholder="Your Name *" id="name" validate="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" id="email" placeholder="Email address *" class="validEmail" validate="Enter email">
                                    </div>
                                    <div class="form-group message-btn">

                                        <button type="button" id="newsletter_submit" class="theme-btn style-one">subscribe</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <p style="font-size: 15px;">&copy; 2021 Creative Link - All rights reserved.</p>
            </div>
            <div class="powered">
                <a style="font-size: 15px;" href="https://infoquestit.com">Powered by Infoquest</a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    var site_url = '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/creative/'; ?>';
</script>