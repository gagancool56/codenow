<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">DATA RECOVERY FOR WINDOWS</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">DATA RECOVERY FOR WINDOWS</li>
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
                    <input type="hidden" name="productname" value="DATA RECOVERY FOR WINDOWS">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>
                <div class="text-center mt-5">
                    <img src="<?= base_url('assets/frontend/images/products/windows.jpeg') ?>" height="300px" alt="">
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
                <h4 class="text-center">Data Recovery For Windows</h4>
                <p>Windows Data Recovery is capable of: DigitalNowOnline is a free online tool. Repair for Active Directory is Active Directory database repair software that detects, analyzes, and repairs faulty Active Directory databases. The software restores all AD objects to a new AD database on a different system with the same domain name. The DigitalNowOnline Online tool Repair for MS SQL software allows you to recover database objects selectively. The function allows you to choose and choose individual database objects from a list and save them to a default or specific place. You can effortlessly recover all of your lost or deleted files, folders, and hard disk volumes in your Linux system and optical media with DigitalNowOnline 's online program Linux Data Recovery. This software allows you to examine your storage media for specified file types and recover them selectively in a short amount of time.</p>

                <p>DigitalNowOnline is a free online tool. Data Recovery for Virtual Machine software is used to recover data from virtual image files such as VMware (.vmdk), Oracle (.vdi), and Microsoft (.vhd). It can recover data from virtual drives using the FAT16, FAT32, NTFS, exFAT, and NTFS file systems. Photo Recovery - (Windows) by DigitalNowOnline is a free online utility that recovers lost or deleted photo, video, and music files from a computer's hard drive and other removable storage devices. It's a newer version of our data recovery software. It has a wide range of functions for retrieving deleted data. This product was created with windows in mind. DigitalNowOnline is a useful tool. Data Recovery Standard is a low-cost data recovery program that recovers lost and deleted documents, folders, emails, images, audio, videos, and more from internal and external hard drives, USB flash drives, memory cards, and cameras. For significantly corrupted or formatted storage media, the 'Deep Scan' is suggested.</p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>