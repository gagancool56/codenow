<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">DATA RECOVERY FOR IOS</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">DATA RECOVERY FOR IOS</li>
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
                    <input type="hidden" name="productname" value="Data Recovery For iOS">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>
                <div class="text-center mt-5">
                    <img src="<?= base_url('assets/frontend/images/products/ios.jpeg') ?>" height="300px" alt="">
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
                <h4 class="text-center">Data Recovery For iOS</h4>
                <p>Scanning the iOS device directly for data is possible. Data Recovery for iPhone allows you to recover deleted data from your Apple device even if it hasn't been backed up. We can help you recover deleted items like contacts, text messages, photographs, videos, notes, call history, and more at Geeks. iCloud backups can be used to restore erased data You can utilize iCloud backup to retrieve data if you set up a new Apple device or erase all important data from your iPhone/iPad/iPod touch using &quot;Erase All Content and Settings.&quot; Users who have backed up their iOS device using iCloud will find Data Recovery for iPhone to be a simple and reliable recovery solution. Simply login in with your Apple ID, extract your deleted files from your iCloud backup, and restore them. 15+ file formats are supported, as well as three iOS apps SMS messages, contacts, notes, photos, videos, camera roll, calendar, reminders, phone history, Safari bookmarks, message attachments, Facebook &amp; Twitter media, WhatsApp chats, and other file types are supported. Data from WhatsApp Messenger, Vimeo, and Instagram can also be recovered using the iPhone data recovery software. To recover data from an iOS device, extract iTunes and iCloud backup files You have the right to scan your data and retrieve what you want from iTunes and iCloud backup files as long as you have backed up everything and stored it in your iTunes and iCloud accounts. The most practical and safest backup techniques are iTune and iCloud backups. You can recover deleted Contacts, Messages, Call history, Calendar, Notes, Reminder, Safari bookmark, Camera Roll, Photo Stream, Message attachments, Voice memos, Voicemail, App photos/videos/documents (WhatsApp, Flirc, iPhoto, iMovie, Kindle, Keynote, etc.) from iPhone 6 Plus/6/5s/5c/5/4s/4/3GS, iPad Air 2, iPad Air, iPad mini 3, iPad mini with Retina.</p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>