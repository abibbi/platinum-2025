<!doctype html>
<html lang="en">

<?php $current = "Other Forms"; ?>

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
        <?php include '../inc/header.php'; ?>
    </header>
    <!-- /HEADER END -->
    <!-- search -->
    <div class="search hidden">
        <?php include '../inc/site-search.php'; ?>
    </div>
    <!-- /search END -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <?php
    $page_title = $current;
    include '../inc/about-hero.php';
    ?>
	<!--HIDDEN NAV-->
	<?php include '../inc/forms-hidden-nav.php'; ?>
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
                        <ul class="nav nav-pills tabs-left" id="pills-tab" >
                            
                            <li class="nav-item">
                                <a class="nav-link" href="membership-forms.php">Membership Forms</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link active" href="other-forms.php">Other Forms</a>
                            </li>
                        </ul>
                       <div class="red-bg iq-mt-30 iq-pall-20">
                            <h6 class="iq-tw-6 iq-font-black small-title white">How can We Help You?</h6>
                            <div class="iq-font-white">Access your account at PFCU 24hr a day with Home Banking or call us at 1(877)PFCU4YO (732-8496) or call/text us at (404) 297-9797. 
</div>
                            <div class="iq-mt-20 read-more white green">
                                <a href="tel:+18777328496"><img src="../images/about-us/icon.png" alt="">
<span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1877 732 8496</span><br>
</a>
                            <a href="tel:+14042979797"><div class="coolBox"></div>
<span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1404 297 9797</span><br>
</a>
</div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 iq-mtb-15">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <div class="row">
									<div class="col-sm-12"><h3 class="iq-pb-25">Other Forms</h3></div>
                                    <div class="col-lg-6">

										<ul class="listing-mark iq-tw-6 iq-font-black iq-pb-25">
											<li><a href="https://www.platinumfcu.org/forms/DepositSlip.pdf" target="_blank">Deposit Slip</a></li>
											<li><a href="https://www.platinumfcu.org/forms/WithdrawalSlip.pdf" target="_blank">Withdrawal Slip</a></li>
											<li><a href="address-change.php">Address Change Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/college-savings-plan.pdf" target="_blank">College Savings Plan Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/DirectDepositAuthorization.pdf" target="_blank">Direct Deposit Authorization Form</a></li>
											<li><a href="stop-payment.php">Stop Payment Order for Checks &amp; ACH Entries Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/Authorization-Designation.pdf" target="_blank">Authorization Designation Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/ira.php" target="_blank">IRA Forms</a></li>
											<li><a href="mailto:memberservice@platinumfcu.org?subject=Send-More-Info">Send More Info Form</a></li>
										</ul>
										
                                    </div>
									
									<div class="col-lg-6">

										<ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
											
											<li><a href="https://www.platinumfcu.org/forms/WireInstructionsIncoming.pdf" target="_blank">Incoming Wire Instructions</a></li>
											<li><a href="wire-transfer-form.php">Wire Transfer Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/MSBAccountChecklist.pdf" target="_blank">MSB Account Checklist</a></li>
											<li><a href="https://www.platinumfcu.org/forms/MSBConsultantsList.pdf" target="_blank">MSB Consultants</a></li>
											<li><a href="https://www.platinumfcu.org/forms/MSBDutytoInform.pdf" target="_blank">MSB Duty to Inform</a></li>
											<li><a href="https://www.platinumfcu.org/forms/MSBPledgeAgreement.pdf" target="_blank">MSB Pledge Agreement Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/Safe-Deposit-Agreement.pdf" target="_blank">Safe Deposit Agreement Form</a></li>
											<li><a href="https://www.platinumfcu.org/forms/Safe-Deposit-Box-Card.pdf" target="_blank">Safe Deposit Box Card Form</a></li>
										</ul>
										
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
		<?php include '../inc/hidden-green.php'; ?>
        <!--=================================
Tabs -->
    </div>
    <!--=================================
Main Content -->
    <!--=================================
Footer -->
    <footer class="iq-footer6">
        <?php include '../inc/footer.php'; ?>
    </footer>
    <!--=================================
Footer -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top" aria-label="button to return to top of page"><img src="" alt="Image to go to top of page" style="display:none;"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
	<!-- google translate -->
	<?php include "../inc/google-translate.php"; ?>
    <!-- back-to-top End -->
	<?php include '../inc/modals.php'; ?>
    <?php include '../inc/inner-scripts.php'; ?>
</body>

</html>