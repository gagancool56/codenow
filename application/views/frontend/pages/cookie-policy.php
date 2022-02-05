<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background:url(assets/frontend/images/banner/banner10.jpeg) rgba(20, 20, 20, 0.5);">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Cookies Policy</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cookies Policy</li>
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
        <div class="row">
            <div class="col-lg-12">
                <h3 class="column-title text-center">Information about cookies</h3>
                <p> When you visit most websites, cookies are very little files that are kept on your computer. They are transmitted back and forth between the website's server and your browser in order for the website to remember your actions.</p>
                <h3 class="column-title text-center">Cookies and how we utilize them</h3>
                <p> By analyzing web traffic and tracking user behavior, we utilize cookies to assist enhance the functioning of this website. A security cookie is also used to identify the developers of our website. Cookies cannot transport viruses or install malware on your computer, and the majority of them just contain randomly generated numbers.<br>
                </p>
                <h3 class="column-title text-center">Google Tag, CNO Token, XSRF-TOKEN</h3>
                <p> The token for validated authentication is saved in cookies for this purpose. This is a cookie called HttpOnly.<br>
                </p>
                <h3 class="column-title text-center"> Cookie management</h3>
                <p> Most Internet browsers have settings that allow users to decide whether or not cookies are accepted. To learn how to configure these settings on a variety of popular browsers, go to Wiki HTTP Cookie.<br>
                </p>
                <h3 class="column-title text-center">Modifications to this privacy notice </h3>
                <p> Our privacy notice is reviewed on a regular basis.</p>

            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>