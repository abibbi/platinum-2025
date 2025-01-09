<!doctype html>
<html lang="en">

<?php $current = "Deposit Products"; ?>

<?php
$title = $current;
include '../inc/head.php';
?>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="../images/loader.png" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- HEADER  -->
    <header class="header-06 white">
        <?php include '../inc/header.php';?>
    </header>
    <!-- /HEADER END -->
    <!-- search -->
    <div class="search hidden">
        <?php include '../inc/site-search.php';?>
    </div>
    <!-- /search END -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <?php
    $page_title = $current;
    include '../inc/about-hero.php';
    ?>
    <!--HIDDEN NAV-->
    <?php include '../inc/deposit-hidden-nav.php';?>
    <!--======= Breadcrumb Left With BG Image =======-->
    <!--=================================
MAIN CONTENT -->
    <div class="main-content">
        <!--=================================
Tabs -->
        <div class="overview-block-ptb iq-tab6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 iq-mtb-15">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills tabs-left" id="pills-tab">
                            <li class="nav-item">
                                <a class="nav-link" href="business-deposit.php">Business Deposits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="personal-deposit.php">Personal Deposits</a>
                            </li>
                        </ul>
                        <div class="red-bg iq-mt-30 iq-pall-20">
                            <h6 class="iq-tw-6 iq-font-black small-title white">How can We Help You?</h6>
                            <div class="iq-font-white">Access your account at PFCU 24hr a day with Home Banking or call
                                us at 1(877)PFCU4YO (732-8496) or call/text us at (404) 297-9797.
                            </div>
                            <div class="iq-mt-20 read-more white green">
                                <a href="tel:+18777328496"><img src="../images/about-us/icon.png" alt="">
                                    <span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1877 732 8496</span><br>
                                </a>
                                <a href="tel:+14042979797">
                                    <div class="coolBox"></div>
                                    <span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1404 297 9797</span><br>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 iq-mtb-15">
                        <!-- Tab panes -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- <h3 class="iq-pb-25">Deposit</h3> -->
                                        <p>Our community is known to keep the business within the community. Our
                                            community trade associations and the credit unions are a great example of
                                            this principle. That's why at PFCU you’ll find the products and services to
                                            meet your business banking needs – from checking and mobile banking for
                                            managing your day-to-day finances to a complete suite of complex cash
                                            management needs. When you choose PFCU, you’ve got a banking partner who
                                            knows a thing or two about doing business within the community. Together we
                                            continue to grow stronger.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--HIDDEN GREEN-->
        <?php include '../inc/hidden-green.php';?>
        <!--=================================
Tabs -->
    </div>
    <!--=================================
Main Content -->
    <!--=================================
Footer -->
    <footer class="iq-footer6">
        <?php include '../inc/footer.php';?>
    </footer>
    <!--=================================
Footer -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top" aria-label="button to return to top of page"><img src=""
                alt="Image to go to top of page" style="display:none;"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
	<!-- google translate -->
	<?php include "../inc/google-translate.php"; ?>
    <!-- back-to-top End -->
    <?php include '../inc/inner-scripts.php';?>
</body>

</html>