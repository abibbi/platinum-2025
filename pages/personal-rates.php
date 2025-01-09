<!doctype html>
<html lang="en">

<?php $current = "Personal Rates"; ?>

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
    <?php include '../inc/rate-fees-personal-hidden-nav.php'; ?>
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
                                <a class="nav-link" href="business-rates.php">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="personal-rates.php">Personal</a>
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
                                    <div class="col-md-12 tab-border iq-accordion">
                                        <!--<h3 class="iq-pb-25">Savings</h3>-->
                                        <div class="tab">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active">

                                                    <div id="accordion">

                                                        <!-- <div class="row">
                                                            <div class="col-sm-12">
                                                                <h3 class="iq-pb-25">Personal</h3>
                                                            </div>
                                                        </div> -->
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Loan Rates
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p><strong>Loan Rates are accurate as of September 23, 2024. Rates and other terms may change at any time without prior notice. For variable rate loans a floor rate may be applicable.</strong></p>

                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Loan Type</strong></center>
                                                                                        </th>
                                                                                        <th scope="col" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Annual Percentage Rate</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><strong>New Auto Loan</strong></td>
                                                                                        <td>As low as 5.49%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Pre-Owned Auto Loan</strong></td>
                                                                                        <td>As low as 5.49%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Personal Loan</strong></td>
                                                                                        <td>As low as 8.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Signature Loan</strong></td>
                                                                                        <td>As low as 8.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Share/CD Secured Loan</strong></td>
                                                                                        <td>3.00% above existing dividend</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>New Motorcycle Loan </strong></td>
                                                                                      <td>As low as 6.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>Used Motorcycle Loan </strong></td>
                                                                                      <td>As low as 8.24%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>New RV Loan </strong></td>
                                                                                      <td>As low as 7.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>Used RV Loan </strong></td>
                                                                                      <td>As low as 9.24%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>555 Loan </strong></td>
                                                                                      <td>Fixed at 5.00% up to 5 years</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td><strong>Vocational Income Program Loan </strong></td>
                                                                                      <td>Fixed at 5.99% up to 5 years</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Emergency Loan</strong></td>
                                                                                        <td>As low as 11.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Student Deferred Loan</strong></td>
                                                                                        <td>As low as 6.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Student Loan</strong></td>
                                                                                        <td>As low as 6.99%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Home Equity Line of Credit</strong></td>
                                                                                        <td>As low as <a href="#" data-remodal-target="wallstreet">Wall Street Journal Prime*</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>VISA&reg; Credit Card</strong></td>
                                                                                        <td>As low as 9.90%</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <p>*With a floor rate of 4.99%</p>
																			
																			<p>Credit subject to approval. Payment does not include taxes and insurance; actual payment may be greater. Rates posted are indications only and are subject to change without notice. Your actual rate may be different, as many factors go into providing you with a loan. Rates shown are available to qualified borrowers.</p>
																			
                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Deposit Rates
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p><strong>Dividend Rate is accurate as of July 1, 2024. Rates and other terms may change at any time without prior notice.</strong></p>
                                                                            <table class="table-bordered table-striped" align="center" style="width:95%;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Account Type</strong></th>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Dividend Rate</strong></th>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Annual Percentage Yield (APY)</strong></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p align="left"><strong>Share Savings</strong><br>
                                                                                                $100 - $2,499.99<br>
                                                                                                $2,500 - $9,999.99<br>
                                                                                                $10,000 - $49,999.99<br>
                                                                                                $50,000 &amp; above
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.25%<br>
                                                                                                0.25%<br>
                                                                                                0.25%<br>
                                                                                                0.25%</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.25%<br>
                                                                                                0.25%<br>
                                                                                                0.25%<br>
                                                                                                0.25%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p align="left"><strong>Money Market Savings</strong><br>
                                                                                                $0 - $4,999.99<br>
                                                                                                $5,000 - $9,999.99<br>
                                                                                                $10,000 - $49,999.99<br>
                                                                                                $50,000 - $99,999.99<br>
                                                                                                $100,000 &amp; above
                                                                                            </p>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p><br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                1.00%</p>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p><br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                0.50%<br>
                                                                                                1.00%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p align="left"><strong>Platinum Secure Checking</strong><br>
                                                                                                $500 - $999.99<br>
                                                                                                $1,000 - $4,999.99<br>
                                                                                                $5,000 &amp; above
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.05%<br>
                                                                                                0.05%<br>
                                                                                                0.05%
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.05%<br>
                                                                                                0.05%<br>
                                                                                                0.05%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p align="left"><strong>Student Interest Checking</strong><br>
                                                                                                $500 - $999.99<br>
                                                                                                $1,000 - $4,999.99<br>
                                                                                                $5,000 &amp; above
                                                                                            </p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.05%<br>
                                                                                                0.05%<br>
                                                                                                0.05%</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                0.05%<br>
                                                                                                0.05%<br>
                                                                                                0.05%</p>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p align="left"><strong>College Savings Plan</strong></p>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p>4.00%</p>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p>4.08%</p>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
																		  </table><p></p>
                                                                            <p><strong>Regular and IRA Certificate of Deposit (CD) Rates $1,000 Minimum Investment</strong></p>
                                                                            <p><em>*Dividend Rate is accurate as of <strong>September 23, 2024</strong>. Rates and other terms may change at any time without prior notice. After your certificate is opened, the dividend rate is fixed for the term. A penalty is imposed for early withdrawal. Fees could reduce earnings on the account.</em></p>
                                                                            <table class="table-bordered table-striped" align="center" style="width:95%;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Terms</strong></th>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Dividend Rate</strong></th>
                                                                                        <th bgcolor="#065e2c"><strong style="color:#fff;">Annual Percentage Yield (APY)</strong></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p align="left"><strong>6 months</strong><br>
                                                                                                $1,000 - $9,999<br>
                                                                                                $10,000 - $24,999<br>
                                                                                                $25,000 - $99,999<br>
                                                                                                above $100,000</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                4.25%<br>
                                                                                                4.25%<br>
                                                                                                4.25%<br>
                                                                                          4.25%</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                4.32%<br>
                                                                                                4.32%<br>
                                                                                                4.32%<br>
                                                                                                4.32%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                      <td bgcolor="#D3D3D3"><p align="left"><strong>12 months</strong><br>
                                                                                        $1,000 - $9,999<br>
                                                                                        $10,000 - $24,999<br>
                                                                                        $25,000 - $99,999<br>
                                                                                        above $100,000</p></td>
                                                                                      <td bgcolor="#D3D3D3"><p><br>
                                                                                        4.00%<br>
                                                                                        4.00%<br>
                                                                                        4.00%<br>
                                                                                        4.00%</p></td>
                                                                                      <td bgcolor="#D3D3D3"><p><br>
                                                                                        4.06%<br>
                                                                                        4.06%<br>
                                                                                        4.06%<br>
                                                                                      4.06%</p></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td >
                                                                                            <p align="left"><strong>24 months</strong><br>
                                                                                                $1,000 - $9,999<br>
                                                                                                $10,000 - $24,999<br>
                                                                                                $25,000 - $99,999<br>
                                                                                                above $100,000</p>
                                                                                        </td>
                                                                                        <td >
                                                                                            <p><br>
                                                                                                3.50%<br>
                                                                                                3.50%<br>
                                                                                                3.50%<br>
                                                                                               3.50%</p>
                                                                                        </td>
                                                                                        <td >
                                                                                            <p><br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p align="left"><strong>36 months</strong><br>
                                                                                                $1,000 - $9,999<br>
                                                                                                $10,000 - $24,999<br>
                                                                                                $25,000 - $99,999<br>
                                                                                                above $100,000</p>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p><br>
                                                                                                3.50%<br>
                                                                                                3.50%<br>
                                                                                               3.50%<br>
                                                                                                3.50%<br>
                                                                                        </td>
                                                                                        <td bgcolor="#D3D3D3">
                                                                                            <p><br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <p align="left"><strong>60 months</strong><br>
                                                                                                $1,000 - $9,999<br>
                                                                                                $10,000 - $24,999<br>
                                                                                                $25,000 - $99,999<br>
                                                                                                above $100,000</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                3.50%<br>
                                                                                                3.50%<br>
                                                                                                3.50%<br>
                                                                                                3.50%</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <p><br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%<br>
                                                                                                3.55%</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <p>&nbsp;</p>
                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a day with&nbsp;<a href="../index.php" title="Home Banking" aria-label="Home Banking Login">Home Banking </a>.</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFour">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Deposit Account Fee Schedule
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p><strong>The following fees may be assessed against your account and the following transaction limitations, if any, applied to your account.</strong></p>
                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Share/Savings Account</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>One time Membership Fee</td>
                                                                                        <td>$20.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Monthly Fee</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Deposit Fee</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Withdrawals up to six month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Withdrawals in excess of six a month</td>
                                                                                        <td>$1.00 per transaction</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Home Banking</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dividend (declared quarterly)</td>
                                                                                        <td>Deposit Rates (see above)</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal up to $10,000/month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal in excess of $10,000/month</td>
                                                                                        <td>$0.12 per $100</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Other Fees</td>
                                                                                        <td>Miscellaneous Fees(see below)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Platinum Secure Checking Account</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Monthly Fee</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Number of Transactions</td>
                                                                                        <td>Unlimited</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Teller Transactions</td>
                                                                                        <td>Unlimited</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Home Banking</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Bill Pay</td>
                                                                                        <td>No Fee is used</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dividend</td>
                                                                                        <td>Deposit Rates (see above)</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>E-Statement with Check Images</td>
                                                                                        <td>Free</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Starter Checks</td>
                                                                                        <td>10 Free</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>View/Print Online Check Images up to 2 years</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Overdraft Protection from other Accounts</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Discretionary Overdraft Privilege</td>
                                                                                        <td>Up to $50,000</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal up to $10,000/month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal in excess of $10,000/month</td>
                                                                                        <td>$0.12 per $100</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Other Fees</td>
                                                                                        <td>Miscelleneous Fees(see below)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>



                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Platinum Simple Checking Account</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Monthly Fee</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Number of Transactions</td>
                                                                                        <td>Unlimited</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Teller Transactions</td>
                                                                                        <td>Unlimited</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Home Banking</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Bill Pay</td>
                                                                                        <td>No Fee is used</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dividend</td>
                                                                                        <td>No Dividend</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>E-Statement with Check Images</td>
                                                                                        <td>Free</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Starter Checks</td>
                                                                                        <td>10 Free</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>View/Print Online Check Images up to 2 years</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Overdraft Protection from other Accounts</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Discretionary Overdraft Privilege</td>
                                                                                        <td>Up to $50,000</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal up to $10,000/month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal in excess of $10,000/month</td>
                                                                                        <td>$0.12 per $100</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Other Fees</td>
                                                                                        <td>Miscelleneous Fees(see below)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>



                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Money Market Account</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Monthly Fee if average daily balance above $1,000</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Monthly Fee if average daily balance below $1,000</td>
                                                                                        <td>$10.00 per month</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Up to six withdrawals or transfers per month</td>
                                                                                        <td>No Charge</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Withdrawals or transfers in excess of six per month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dollar limits on deposits or withdrawals</td>
                                                                                        <td>No Limits</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Home Banking</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dividend (tiered rate and credited monthly)</td>
                                                                                        <td>Deposit Rates (see above)</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal up to $10,000/month</td>
                                                                                        <td>No Fee</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cash/Coin Deposit & Withdrawal in excess of $10,000/month</td>
                                                                                        <td>$0.12 per $100</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Other Fees</td>
                                                                                        <td>Miscelleneous Fees(see below)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFive">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Loan Fee Schedule
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p><strong>The following fees may be assessed against your account and the following transaction limitations, if any, applied to your account.</strong></p>

                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Loans Fee Schedule</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><strong>New & Used Auto Loan</strong><br>
                                                                                            Loan up to $5,000<br>
                                                                                            Loan in excess of $5,000</td>
                                                                                        <td><br>$30.00 per loan<br>
                                                                                            $100.00 per loan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Personal Loan</strong><br>
                                                                                            Loans up to $5,000<br>
                                                                                            Loans from $5,001 to $49,900</td>
                                                                                        <td><br>$30.00 per loan<br>
                                                                                            <a href="../pdf/personal-loan-sheet.pdf" target="_blank">See Personal Loan Sheet</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Signature Loan</strong><br>
                                                                                            Loan up to $10,000<br>
                                                                                            Loan up to $49,900</td>
                                                                                        <td><br>$100.00 per loan<br>
                                                                                            <a href="../pdf/signature-loan-sheet.pdf" target="_blank">See Signature Loan Sheet</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Mortgage Loan</strong><br>
                                                                                            Loans up to any amount permissible</td>
                                                                                        <td><br>1% of loan amount</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Home Equity Line of Credit (HELOC)</strong><br>
                                                                                            Loans up to $300,000</td>
                                                                                        <td><br>1% of loan amount</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Student Loan</strong><br>
                                                                                            Loans up to $10,000</td>
                                                                                        <td><br>$20.00 per loan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Emergency Loan</strong><br>
                                                                                            Loans up to $5,000</td>
                                                                                        <td><br>$25.00 per loan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>Share/CD Secured Loan</strong><br>
                                                                                            Loans up to any Secured Share/CD amount</td>
                                                                                        <td><br>$20.00 per loan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><strong>VISA&reg; Credit Card</strong><br>
                                                                                            Credit Limits up to $10,000</td>
                                                                                        <td><br>$0.00 to $49.00 based on credit worthiness</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingSix">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Misc. Fee Schedule
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseSix" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p><strong>The following fees may be assessed against your account and the following transaction limitations, if any, applied to your account.</strong></p>

                                                                            <table class="table table-bordered table-striped">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" colspan="2" style="background-color: #065e2c; color: #fff;">
                                                                                            <center><strong>Miscellaneous Fee Schedule</strong></center>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Outgoing Domestic Wire Transfer</td>
                                                                                        <td>$15.00 per wire</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Outgoing International Wire Transfer</td>
                                                                                        <td>$34.99 per wire</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Incoming Domestic Wire Transfer</td>
                                                                                        <td>$5.00 per wire</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Incoming International Wire Transfer</td>
                                                                                        <td>$15.00 per wire</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Deposit Item Return</td>
                                                                                        <td>$5.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Next Day Deposit for Checks/ACH Presented</td>
                                                                                        <td>$9.99 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Discretionary Overdraft Previlege</td>
                                                                                        <td>$28.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Stop Payment Fee</td>
                                                                                        <td>$20.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Counter Checks</td>
                                                                                        <td>$1.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Check/ACH Return Fee (NSF Fee)</td>
                                                                                        <td>$28.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Loan Deposit Return Fee</td>
                                                                                        <td>$28.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Interim Statement Fee</td>
                                                                                        <td>$5.00 per statement</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Statement Reprint Fee</td>
                                                                                        <td>$5.00 per statement</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cashier's Check Fee</td>
                                                                                        <td>$5.00 per check</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Manual Account to Account Balance Transfer</td>
                                                                                        <td>$3.00 per transfer</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Deposit/Paid Check Copy</td>
                                                                                        <td>$2.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Account Research Fee</td>
                                                                                        <td>$25.00 per hour</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Returned Mail Fee</td>
                                                                                        <td>$5.00 per occurrence</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dormant Account Fee (after 12 months of no activity)</td>
                                                                                        <td>$5.00 per month</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Certified Mail (Documents, Check, Cashier's Check, etc.)</td>
                                                                                        <td>$5.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Levy/Garnishment</td>
                                                                                        <td>$25.00</td>
                                                                                    </tr>
                                                                                    <tr>

                                                                                        <td>Check Order</td>
                                                                                        <td><a href="#" data-remodal-target="deluxe">See Deluxe Website</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>NACHA Unauthorized Entry Fee</td>
                                                                                        <td>$5.00 per item</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>NACHA Unauthorized Entry Credit</td>
                                                                                        <td>$5.00 per item</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="card">
											<div class="card-header" id="headingAuto">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseAuto" aria-expanded="true" aria-controls="collapseAuto">Auto Loans
													</button>
												</h5>
											</div>
											<div id="collapseAuto" class="collapse" data-parent="#accordion">
												<div class="card-body">
													<div class="row">
														<div class="col-sm-12">
															
															<h3 class="iq-pb-25">Auto Loans</h3>
										<p>Shopping for a new or used car or truck? You've already got plenty to think about: Makes, models, optional equipment, colors and so on. When it comes to financing, make it easy on yourself with an auto loan from Platinum FCU.</p>
										<p>We have loans available for new and used cars and trucks. Our loans feature competitive interest rates and the kind of efficient, personalized service that only your credit union can provide. We can finance your car up to 72 months in order for our members to have low monthly payments.</p>
										<p><a href="personal-rates2.php">Click here to see our low rates on New and Pre-owned Auto Loans</a></p>
										<p>Please visit one of <a href="contactus.php">PFCU's branch locations or contact us via phone or email</a> and we can pre-approve you for your dream car. Pre-approval will also help you negotiate a better purchase price from auto dealers.</p>
										<p><strong>Account Access</strong><br>
											Access your accounts at PFCU 24 hours a day with Home Banking</p>
										<p align="center"><img src="../images/auto-keys.png" alt="Car Keys" class="img-fluid"></p>
															
														</div>
                                					</div>
												</div>
											</div>
										</div>-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
	<!-- google translate -->
	<?php include "../inc/google-translate.php"; ?>
    <!-- back-to-top End -->
    <?php include '../inc/modals.php'; ?>
    <?php include '../inc/inner-scripts.php'; ?>
</body>

</html>