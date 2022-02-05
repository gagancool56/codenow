<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Advanced PC Booster</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">Advanced PC Booster</li>
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
            <div class="col-lg-6 col-md-6 mb-5">
                <form action="<?= base_url('products/purchase/make-payment') ?>" method="post" style="text-align: center;">
                    <input type="hidden" name="productname" value="Advanced PC Booster">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>

                <div class="text-center">
                    <img src="<?= base_url('assets/frontend/images/products/advanced-pc-booster.png') ?>" height="300px" alt="">
                </div>
                <h4 class="mt-5">Product Features</h4>
                <ul class="list-arrow pl-3">
                    <li>When compared to other software, this one performs faster.</li>
                    <li>Reliable and simple to use</li>
                    <li>All Windows editions are supported.</li>
                    <li>A path to installation that is free of hitches.</li>
                </ul>

            </div><!-- Col 1 end -->
            <div class="col-lg-6 col-md-6 mb-5 p-3 shadow-lg">
                <h4 class="text-center">Advanced PC Booster</h4>
                <p class="text-justify">It's difficult to choose a software solution for a secure PC these days because there are so many possibilities. Advanced PC Optimizer, on the other hand, is a one-of-a-kind solution on which you may count. The software has the ability to delete superfluous files without impacting the integrity of the data. The nicest feature about this application is that it works with all Windows editions, so you can buy it and use it regardless of which Windows you're using. Users frequently prefer a way out that allows them to safely remove less needed files from the PC in an organizational atmosphere where data is life and death. Advanced PC Optimizer meets this need precisely, intelligently, and magnificently. Furthermore, it is extremely secure, efficient, and simple to use. As soon as the installation is completed, the software begins its work without making any changes to the data saved on your computer. If you purchase this instrument, you are making a wise investment in one way or another. The program is built using cutting-edge technology to ensure that you don't run into any problems in the future. Even if you aren't particularly tech-savvy, you shouldn't have any problems utilizing it. Its autonomous functionality will not obstruct your progress in any way. </p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>