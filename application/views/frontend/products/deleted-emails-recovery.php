<?php $this->load->view('frontend/inc/header') ?>

<div id="banner-area" class="banner-area" style="background-image:url(../assets/frontend/images/banner/banner1.png)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Deleted Emails Recovery</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                <li class="breadcrumb-item active" aria-current="page">Deleted Emails Recovery</li>
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
                    <input type="hidden" name="productname" value="Deleted Emails Recovery">
                    <input type="hidden" name="productamount" value="29.99">
                    <button class="btn btn-success btn-block mt-3">Offer Price Buy Now @ $29.99 Only </button>
                </form>
                <div class="text-center mt-5">
                    <img src="<?= base_url('assets/frontend/images/products/email.jpeg') ?>" height="300px" alt="">
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
                <h4 class="text-center">Deleted Emails Recovery</h4>
                <p>DigitalNowOnline Online Undelete Email for Outlook is a capable email recovery program that safely recovers lost or deleted emails from Microsoft Outlook mailboxes. The recovered Mail Items are saved in MSG, EML, HTML, RTF, and PDF formats.<br>
                    The OLM file repair program is used to restore a corrupted OLM file. The recovered data pieces are recorded in RGE format as 'Main Identity.rge' after they have been fixed. The RGE file that is created can then be imported into the Outlook Mac desktop email client to gain access to all of the mailbox items.<br>
                    DigitalNowOnline online Mail Backup is a comprehensive program that allows you to back up all of your emails, contacts, tasks, notes, calendar entries, diaries, and other important data. On logical, external, or network attached drives, it saves both incremental and differential backups. Duplicate Outlook Emails are removed from multiple folders. This software helps you to delete undesirable duplicate emails from all of the folders you choose in your Microsoft Outlook application.<br>
                    The DigitalNowOnline Online Password Recovery for Outlook software unlocks password-protected PST files and recovers Outlook passwords. As a master key, it provides six different sets of useable PST passwords. The software's straightforward and contextual UI makes it easy to recover a lost PST password. It ensures that encrypted Outlook PST files are successfully reset.<br>
                    The DigitalNowOnline Online Password Recovery tool is a methodology-based software that can be used to reset the passwords for the Admin and User accounts in Windows. This Windows password recovery program retrieves usernames and passwords from web browsers, remote desktop, and FTP client apps, and performs the required tasks.<br>
                </p>
            </div><!-- Col 1 end -->

        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>