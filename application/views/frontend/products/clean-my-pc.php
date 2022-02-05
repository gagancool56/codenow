<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Clean My PC</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">Clean My PC</li>
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
                    <input type="hidden" name="productname" value="Clean My PC">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>
                <div class="text-center mt-5">
                    <img src="<?= base_url('assets/frontend/images/products/clean-my-pc.png') ?>" height="300px" alt="">
                </div>
                <h4 class="mt-5">Product Features</h4>
                <ul class="list-arrow pl-3">
                    <li>Simple to use</li>
                    <li>All Windows versions are easy to work with.</li>
                    <li>A Budget-Friendly Exit</li>
                    <li>Simple to use</li>
                </ul>

            </div><!-- Col 1 end -->
            <div class="col-lg-6 col-md-6 mb-5 p-3 shadow-lg">
                <h4 class="text-center">Clean My PC</h4>
                <p class="text-justify">Computer users are usually on the lookout for software that can clear the hard disk without compromising data integrity. Aside from that, they also choose to go with a solution that can boost the PC's speed at a rapid rate. Every problem has a solution, and Clean My PC is the solution for this one. This is a technologically advanced tool that can delete outdated and obsolete files from your computer's hard drive without affecting the data contained there. This means that the tool will not impact critical files on the hard drive, but will effectively eliminate only old and obsolete files. affecting the data contained there. This means that the tool will not impact critical files on the hard drive, but will effectively eliminate only old and obsolete files. Rectify/remove unwanted data and Clean is usually an excellent option. My computer is well-versed in this subject. By relying on this application, you will be able to get your computer to perform at a faster rate than before. You won't have any problems controlling it because it is technologically advanced and intelligent. Your PC will have extra disk space once the less important/old/obsolete files are eliminated. In a summary, purchasing this instrument is an excellent long-term investment. </p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>