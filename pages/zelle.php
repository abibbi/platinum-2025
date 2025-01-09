<!doctype html>
<html lang="en">

<?php $current = "Zelle"; ?>

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
	<?php include '../inc/services-hidden-nav.php'; ?>
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
								<a class="nav-link" href="https://www.platinumfcu.org/pages/business-services.php">Business Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.platinumfcu.org/pages/services-general.php">General Services</a>
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
								<a href="tel:+14042979797">
									<div class="coolBox"></div>
									<span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1404 297 9797</span><br>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-9 col-md-8 col-sm-12 iq-mtb-15">
						<!-- Tab 1 -->
						<div class="event iq-hide">
							<div class="container">
								<div class="row">
									
									<script>var JHZELLE_eventMethod = window.addEventListener?"addEventListener":"attachEvent"; var JHZELLE_eventer = window[JHZELLE_eventMethod]; var JHZELLE_messageEvent = "attachEvent"==JHZELLE_eventMethod?"onmessage":"message"; JHZELLE_eventer(JHZELLE_messageEvent,function(e){ if(-1!=e.data.indexOf("JHZELLE_RESIZE::")){ var E=e.data.replace("JHZELLE_RESIZE::",""); document.getElementById("JHZELLE_iframe").style.height=E+"px"}},!1);</script><iframe id="JHZELLE_iframe" src="https://www.paymentsemails.com/ZelleOverview?jhid=48761&showVideo=1&hidescroll=1" style="border: none;" title="Zelle Landing Page" width="100%"></iframe>
									
								</div>
							</div>
						</div>
						<!-- Tab 1 -->
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
	<!-- back-to-top End -->
	<?php include '../inc/modals.php'; ?>
	<?php include '../inc/inner-scripts.php'; ?>
</body>

</html>