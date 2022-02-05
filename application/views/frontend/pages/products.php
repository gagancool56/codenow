<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background:url(assets/frontend/images/banner/banner5.png) rgba(20, 20, 20, 0.5);">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Products</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
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
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/advanced-pc-booster.png') ?>" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/advanced-pc-booster') ?>">Advanced PC Booster</a></h3>
                            <p class="text-justify">It's difficult to choose a software solution for a secure PC these days because there are so many possibilities. Advanced PC Optimizer, on the other...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/advanced-pc-booster') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Advanced PC Booster">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/clean-my-pc.png') ?>" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/clean-my-pc') ?>">Clean MY PC</a></h3>
                            <p class="text-justify">Computer users are usually on the lookout for software that can clear the hard disk without compromising data integrity. Aside from that, they also...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/clean-my-pc') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Clean My PC">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/windows.jpeg') ?>" height="350px" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/windows-data-recovery') ?>">DATA RECOVERY FOR WINDOWS</a></h3>
                            <p class="text-justify">DigitalNowOnline is a free online tool. Repair for Active Directory is Active Directory database repair software that detects, analyzes, and ...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/windows-data-recovery') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Data Recovery For Windows">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/mac.jpeg') ?>" height="350px" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/mac-data-recovery') ?>">DATA RECOVERY FOR MAC</a></h3>
                            <p class="text-justify">DigitalNowOnline Online Repair for Video is an excellent program for repairing corrupt, broken, or damaged MP4, MOV, AVI, MKV, AVCHD, MJPEG, WEBM...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/mac-data-recovery') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Data Recovery For MAC">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/ios.jpeg') ?>" height="350px" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/ios-data-recovery') ?>">DATA RECOVERY FOR IOS</a></h3>
                            <p class="text-justify">Data Recovery for iPhone allows you to recover deleted data from your Apple device even if it hasn't been backed up. We can help you recover deleted...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/ios-data-recovery') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Data Recovery For iOS">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box shadow-lg">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="<?= base_url('assets/frontend/images/products/email.jpeg') ?>" height="350px" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-info pr-4 pb-3">
                            <h3 class="service-box-title"><a href="<?= base_url('products/deleted-emails-recovery') ?>">RECOVERING DELETED EMAILS</a></h3>
                            <p class="text-justify">DigitalNowOnline Online Undelete Email for Outlook is a capable email recovery program that safely recovers lost or deleted emails from Microsoft Outlook ...</p>
                            <a class="learn-more d-inline-block" href="<?= base_url('products/deleted-emails-recovery') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                            <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                                <input type="hidden" name="productname" value="Deleted Emails Recovery">
                                <input type="hidden" name="productamount" value="29.99">
                                <button class="btn btn-success btn-block mt-3">Buy Now @ $29.99 Only </button>
                            </form>
                        </div>
                    </div>
                </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>