<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background:url(assets/frontend/images/banner/banner6.jpg) rgba(20, 20, 20, 0.5);">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Contact</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item p-2"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item p-2"><a href="#">company</a></li>
                                <li class="breadcrumb-item p-2 active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Reaching our Office</h2>
                <h3 class="section-sub-title">Find Our Location</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row contact-container">
            <div class="col-md-4 offset-2">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fas fa-map-marker-alt mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Visit Our Office</h4>
                        <p>9051 Constra Incorporate, USA</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Email Us</h4>
                        <p>contact@digitalnowonline.com </p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="gap-40"></div>

        <div class="row">
            <div class="col-md-6">
                <h3 class="column-title">Our Location</h3>
                <div class="google-map">
                    <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="column-title">We Love to Hear from you</h3>
                <form id="contact-form" action="#" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div><!-- Content row -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->


<?php $this->load->view('frontend/inc/footer') ?>