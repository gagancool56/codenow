<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">DATA RECOVERY FOR MAC</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">DATA RECOVERY FOR MAC</li>
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
                    <input type="hidden" name="productname" value="DATA RECOVERY FOR MAC">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>
                <div class="text-center mt-5">
                    <img src="<?= base_url('assets/frontend/images/products/mac.jpeg') ?>" height="300px" alt="">
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
                <h4 class="text-center">Data Recovery For MAC</h4>
                <p>DigitalNowOnline Online Repair for Video is an excellent program for repairing corrupt, broken, or damaged MP4, MOV, AVI, MKV, AVCHD, MJPEG, WEBM, ASF, WMV, FLV, DIVX, MPEG, MTS, M4V, 3G2, 3GP, and F4V file formats on Mac computers. It recovers videos that have been corrupted during the shoot, file transfer, editing, conversion, or processing. For Mac OS, DigitalNowOnline Online Partition Manager is an excellent partition management tool. The app increases the speed of your hard drive by managing your Mac partitions, including Boot Camp. DigitalNowOnline online Photo Repair is a solution for repairing broken or unreadable JPEG files that can't be opened with an image editor. It can also generate thumbnails from those photographs. Users can clone the complete hard drive as well as individual volumes based on HFS, HFS+, FAT, and exFAT file systems, including the boot disk, using the DigitalNowOnline Online utility Drive Clone. Backup is a useful feature in the utility that allows you to create an automatic backup schedule for specified files and folders on any Mac drive. On any APFS, HFS, FAT, ex-FAT, or NTFS formatted disks and volumes, DigitalNowOnline Online tool Professional for Mac can help you recover lost files. Text documents, images, audio, movies, database files, and more can all be recovered with the software. For both personal and professional users, DigitalNowOnline Online Solution Premium for Mac is a great data recovery tool. Deleted file recovery, disk cloning, photo repair, and video file repair are all possible with it. Algorithms are used in Mac picture recovery software to recover lost/deleted photo, audio, and video files. This software includes an interactive user interface that helps you to recover your valuable images in just a few easy steps: 'Select,' 'Scan,' and 'Recover.'</p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>