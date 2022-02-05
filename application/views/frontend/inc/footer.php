<div class="container-fluid pt-2" style="background: #ffb600;">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-7 px-3" style="text-align:center;padding-bottom:15px;">
            <a href="<?= base_url('pricing') ?>">Our Pricing</a> |
            <a href="<?= base_url('refund-policy') ?>">Cancellation/Refund Policy</a> |
            <a href="<?= base_url('privacy') ?>">Privacy Policy</a> |
            <a href="<?= base_url('terms') ?>">Terms & Conditions</a> |
            <a href="<?= base_url('cookie-policy') ?>">Cookies Policy</a>
        </div>
    </div>
</div>
<footer id="footer mt-0" class="footer bg-overlay">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <h3 class="widget-title">Contact Us</h3>
                    <img loading="lazy" width="50px" class="footer-logo" src="<?= base_url('assets/frontend/images/logo.png') ?>" alt="Code now logo">
                    <p>
                        <strong>Email :</strong> contact@digitalnowonline.com <br>
                        <strong>Website:</strong> digitalnowonline.com
                    </p>
                    <div class="footer-social">
                        <ul>
                            <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div><!-- Footer social end -->
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Working Hours</h3>
                    <div class="working-hours">
                        We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                        Hotline and Contact form.
                        <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                        <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                        <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Services</h3>
                    <ul class="list-arrow">
                        <li><a href="<?= base_url('software-programming') ?>">Software Programming</a></li>
                        <li><a href="<?= base_url('designing') ?>">Designing</a></li>
                        <li><a href="<?= base_url('web-development') ?>">Web Development</a></li>
                        <li><a href="<?= base_url('digital-marketing') ?>">Digital Marketing</a></li>
                    </ul>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info text-center text-md-left">
                        <span>Copyright &copy; <script>
                                document.write(new Date().getFullYear())
                            </script> Digital Now Online All Rights Reserved</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url('about') ?>">About</a></li>
                            <li><a href="<?= base_url('products') ?>">Products</a></li>
                            <li><a href="<?= base_url('question') ?>">Q & A</a></li>
                            <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                            <li><a href="<?= base_url('pricing') ?>">Pricing</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer><!-- Footer end -->


<!-- Javascript Files
  ================================================== -->

<!-- initialize jQuery Library -->
<script src="<?= base_url('assets/frontend/plugins/jQuery/jquery.min.js') ?>"></script>
<!-- Bootstrap jQuery -->
<script src="<?= base_url('assets/frontend/plugins/bootstrap/bootstrap.min.js') ?>" defer></script>
<!-- Slick Carousel -->
<script src="<?= base_url('assets/frontend/plugins/slick/slick.min.js') ?>"></script>
<script src="<?= base_url('assets/frontend/plugins/slick/slick-animation.min.js') ?>"></script>
<!-- Color box -->
<script src="<?= base_url('assets/frontend/plugins/colorbox/jquery.colorbox.js') ?>"></script>
<!-- shuffle -->
<script src="<?= base_url('assets/frontend/plugins/shuffle/shuffle.min.js') ?>" defer></script>


<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="<?= base_url('assets/frontend/plugins/google-map/map.js') ?>" defer></script>

<!-- Template custom -->
<script src="<?= base_url('assets/frontend/js/script.js') ?>"></script>

</div><!-- Body inner end -->
</body>

</html>