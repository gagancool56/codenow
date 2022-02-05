<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background:url(assets/frontend/images/banner/banner5.png) rgba(20, 20, 20, 0.5);">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Blogs</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->
<section id="main-container" class="main-container pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/blog/html.png') ?>" height="150px" alt="html-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('blog/evolution-of-html') ?>">Evolution of HTML</a></h3>
                            <p class="text-justify">You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                            <a href="<?= base_url('blog/evolution-of-html') ?>" class="btn btn-block btn-primary mt-3">Read more</a>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>