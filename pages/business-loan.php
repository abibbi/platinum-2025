<!doctype html>
<html lang="en">

<?php $current = "Business Loans"; ?>

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
    <?php include '../inc/loans-hidden-nav.php'; ?>
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
                                <a class="nav-link active"
                                    href="https://www.platinumfcu.org/pages/business-loan.php">Business Loans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.platinumfcu.org/pages/personal-loans.php">Personal
                                    Loans</a>
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
                        <!-- Tab 1 -->
                        <div class="event iq-hide">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 tab-border iq-accordion">
                                        <!--<h3 class="iq-pb-25">Loans</h3>-->
                                        <div class="tab">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <!-- <div class="row">
                                                        <div class="col-sm-12">
                                                            <h3 class="iq-pb-25">Business</h3>
                                                        </div>
                                                    </div> -->
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">Commercial Real
                                                                        Estate Loan
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>At Platinum Federal Credit Union, our
                                                                                commercial real estate loan experts will
                                                                                handle your loan needs with efficiency
                                                                                and accuracy. Our experienced lenders
                                                                                are located in Georgia, so you can be
                                                                                confident that they know and understand
                                                                                Southeastern real estate market.</p>
                                                                            <p>Financing on commercial and industrial
                                                                                projects, office buildings, apartment
                                                                                homes, convenience stores, gas stations
                                                                                and retail establishments is available
                                                                                in loan amounts of up to
                                                                                <strong>$3,500,000</strong>.
                                                                            </p>
                                                                            <p>PFCU also partners with Credit Union
                                                                                Business Services (CUBS) a Credit Union
                                                                                Service Organization (CUSO) for
                                                                                increased lending amounts of up to
                                                                                <strong>$10,000,000</strong>. CUBS
                                                                                expertise is in originating,
                                                                                underwriting, and servicing business
                                                                                loans, commercial mortgage loans, and
                                                                                SBA 504 loans for real estate investors
                                                                                and business owners.
                                                                            </p>
                                                                            <p><a href="loan-forms.php">Click here for
                                                                                    forms & requirement details</a>. For
                                                                                more information, contact Chief Lending
                                                                                Officer Shaheen Mitha at 404.941.2430 or
                                                                                email her at <a
                                                                                    href="mailto:shaheenm@platinumfcu.org">ShaheenM@PlatinumFCU.org</a>.
                                                                            </p>
                                                                            <p>*Platinum Federal Credit Union business
                                                                                loan eligibility requires business
                                                                                membership and the establishment of the
                                                                                par value of one share in a business
                                                                                savings account. Business loans also
                                                                                subject to credit approval.</p>
                                                                            <p>(Currently Offered only in Georgia)</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseTwo" aria-expanded="true"
                                                                        aria-controls="collapseTwo">Business
                                                                        Visa&reg; Credit Card
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>Give your business increased purchasing
                                                                                power with the PFCU's Business
                                                                                Visa® Credit Card. Appreciate the
                                                                                convenience, security and worldwide
                                                                                acceptance at over 28 million locations.
                                                                            </p>
                                                                            <p>The PFCU's Business Visa Credit
                                                                                Card is accepted everywhere you see the
                                                                                Visa symbol. PFCU's Visa
                                                                                Credit Card is packed with convenience
                                                                                and offers up to <strong>1% Cash
                                                                                    Back</strong> on all your Business
                                                                                Purchases. <a
                                                                                    href="../forms/Business-CC-Addendum-Agreement.pdf"
                                                                                    target="_blank">See detailed
                                                                                    Business Credit Card Addendum
                                                                                    Here</a>!</p>
                                                                            <p><a href="../forms/Business-CC-Application.pdf"
                                                                                    target="_blank">Apply Now</a> or
                                                                                visit any of our convenient branch
                                                                                locations or call Business Services at
                                                                                (404) 297-9797.</p>
                                                                            <p>*Platinum Federal Credit Union business
                                                                                loan eligibility requires business
                                                                                membership and the establishment of the
                                                                                par value of one share in a business
                                                                                savings account. Business loans also
                                                                                subject to credit approval.</p>
                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your business checking account at
                                                                                PFCU 24 hours a day with Online Banking or 404.297.9797 option 1.</p>
                                                                            <p align="center"><img
                                                                                    src="../images/business-cc.jpg"
                                                                                    alt="Business Credit Card"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingThree">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseThree"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThree">Member Business
                                                                        Line of Credit
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseThree" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>PFCU Member Business Line of Credit can
                                                                                be used as additional working capital to
                                                                                assist with your day-to-day operations
                                                                                or acquire or upgrade business
                                                                                equipment, or Inventory. A variable-rate
                                                                                line from PFCU can give your business
                                                                                the boost it needs. Let us help your
                                                                                company achieve its goals by choosing
                                                                                Platinum Federal Credit Union as your
                                                                                business services partner.</p>
                                                                            <p><strong>Loan Features:</strong>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>Competitive <a
                                                                                        href="rates.php">interest
                                                                                        rates</a></li>
                                                                                <li>Lines of Credit of up to $50,000
                                                                                </li>
                                                                                <li>No pre-payment penalty</li>
                                                                                <li>No reporting in owner’s credit</li>
                                                                                <li>Interest only charged for the number
                                                                                    of days and the amount for which the
                                                                                    line is used</li>
                                                                                <li>Borrow as many times as you like and
                                                                                    pay it off as soon and as many times
                                                                                    as you want</li>
                                                                            </ul>
                                                                            <p><a href="loan-forms.php">Click here for
                                                                                    forms & requirement details</a>.</p>
                                                                            <p>*Platinum Federal Credit Union business
                                                                                loan eligibility requires business
                                                                                membership and the establishment of the
                                                                                par value of one share in a business
                                                                                savings account. Business loans also
                                                                                subject to credit approval.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFour">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseFour" aria-expanded="true"
                                                                        aria-controls="collapseFour">Member Business
                                                                        Loan
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFour" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>Let us help your company achieve its
                                                                                goals by choosing Platinum Federal
                                                                                Credit Union as your business services
                                                                                partner. Use a PFCU Member Business Loan
                                                                                as working capital to assist with your
                                                                                day-to-day operations or acquire or
                                                                                upgrade business equipment, new
                                                                                business, vehicles, or Inventory. A
                                                                                fixed-term loan from PFCU can give your
                                                                                business the boost it needs.</p>
                                                                            <p><strong>Loan Features:</strong></p>

                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>Competitive <a
                                                                                        href="rates.php">interest
                                                                                        rates</a></li>
                                                                                <li>Loans up to $100,000</li>
                                                                                <li>No pre-payment penalty</li>
                                                                                <li>No reporting in onwer's credit
                                                                                    report</li>
                                                                            </ul>
                                                                            <p><a href="loan-forms.php">Click here for
                                                                                    forms &amp; requirement details.</a>
                                                                            </p>
                                                                            <p>*Platinum Federal Credit Union business
                                                                                loan eligibility requires business
                                                                                membership and the establishment of the
                                                                                par value of one share in a business
                                                                                savings account. Business loans also
                                                                                subject to credit approval.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFive">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseFive" aria-expanded="true"
                                                                        aria-controls="collapseFive">Secure Loan/Line of
                                                                        Credit
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFive" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>Leverage your business savings and get a
                                                                                great rate on a PFCU Share/CD Secured
                                                                                loan/line of credit. Secure your
                                                                                business loan with your PFCU Business or
                                                                                Personal Savings, Money Market or
                                                                                Business Certificate account to:</p>

                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>Continue to earn dividends on the
                                                                                    account(s) securing your loan during
                                                                                    its term</li>
                                                                                <li>Keep your savings intact</li>
                                                                                <li>Possibly expense your loan interest
                                                                                    from business income (check with
                                                                                    your CPA for details)</li>
                                                                                <li>Get a low rate that's just 3% above
                                                                                    the rate of your secured account
                                                                                </li>
                                                                            </ul>
                                                                            <p><a href="../forms/Business-CC-Application.pdf"
                                                                                    target="_blank">Apply Now</a> or
                                                                                visit any of our convenient branch
                                                                                locations or call Business Services at
                                                                                (404) 297-9797 ext. 2430.</p>
                                                                            <p>*Platinum Federal Credit Union business
                                                                                loan eligibility requires business
                                                                                membership and the establishment of the
                                                                                par value of one share in a business
                                                                                savings account. Business loans also
                                                                                subject to credit approval.</p>
                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your business checking account at
                                                                                PFCU 24 hours a day with business online
                                                                                banking or 1-877-PFCUTEL (732-8835).</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="card">
                                                            <div class="card-header" id="headingSba">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseSba" aria-expanded="true"
                                                                        aria-controls="collapseSba">SBA Loan
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseSba" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">

                                                                            <p><strong>SMALL BUSINESS ADMINSITRATION
                                                                                    (SBA) LOANS</strong></p>
                                                                            <p>Small Business Administration (SBA) was
                                                                                created by Congress to help small
                                                                                businesses get started, expand and
                                                                                prosper. Today, SBA provides assistance
                                                                                to these companies by guaranteeing a
                                                                                portion of loan amounts and allowing
                                                                                longer terms for qualified borrower. SBA
                                                                                loans can include startups, business
                                                                                expansion, acquisitions, etc.
                                                                            </p>
                                                                            <p>
                                                                                Platinum Federal Credit Union (PFCU) is
                                                                                an approved Small Business
                                                                                administration (SBA) lender and is
                                                                                dedicated to helping small businesses
                                                                                grow. As an SBA lender, we can help you
                                                                                navigate the SBA borrowing process and
                                                                                determine what makes the most sense for
                                                                                your business.</p>

                                                                            <p><strong>SBA 7(a) Loan Program</strong>
                                                                            </p>

                                                                            <p>The SBA 7(a) program allows borrowers to
                                                                                obtain long-term, operating capital at a
                                                                                reasonable cost.</p>

                                                                            <p>Features include:
                                                                            <ul>
                                                                                <li>Longer Terms – Up to 25 years on
                                                                                    owner occupied commercial real
                                                                                    estate and typically 10 years on
                                                                                    most uses of proceeds</li>
                                                                                <li> Fully Amortizing – No balloon
                                                                                    payment at end of term or annual
                                                                                    renewal requirement</li>
                                                                                <li> Low Collateral Coverage Requirement
                                                                                    – Potential for lower
                                                                                    collateralization</li>
                                                                                <li> Minimal Financial Requirements –
                                                                                    Potential for minimal or no
                                                                                    financial covenants</li>
                                                                                <li> No Prepayment Penalties – For loans
                                                                                    less than 15 years</li>
                                                                            </ul>
                                                                            </p>
                                                                            <table class="table-bordered table-striped"
                                                                                align="center" width="width: 100%;"
                                                                                role="presentation">
                                                                                <tr>
                                                                                    <td style="vertical-align: top">
                                                                                        <p>Guarantor:
                                                                                        <ul>


                                                                                            <li> Acceptable personal
                                                                                                credit score
                                                                                            </li>
                                                                                            <li> No previous government
                                                                                                defaults
                                                                                            </li>
                                                                                            <li> US citizen or legal
                                                                                                permanent resident
                                                                                            </li>
                                                                                            <li> Less than $5 million in
                                                                                                outstanding SBA loan?
                                                                                            </li>

                                                                                        </ul>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td style="vertical-align: top">
                                                                                        <p>Borrower:
                                                                                        <ul>

                                                                                            <li> For profit business
                                                                                            </li>
                                                                                            <li> US based</li>
                                                                                            <li> Less than $5 million in
                                                                                                after tax net income
                                                                                            </li>
                                                                                            <li> Less than $15 million
                                                                                                in tangible net worth
                                                                                            </li>

                                                                                        </ul>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="vertical-align: top">
                                                                                        <p>Industry:
                                                                                        <ul>

                                                                                            <li> Franchise, Startups,
                                                                                                Medical, Dental, Gas
                                                                                                Station, etc.</li>
                                                                                            <li> No non-owner-occupied
                                                                                                real estate</li>
                                                                                            <li> No lenders, religious
                                                                                                affiliation, or private
                                                                                                clubs</li>

                                                                                        </ul>
                                                                                        </p>
                                                                                    </td>
                                                                                    <td style="vertical-align: top">
                                                                                        <p>Use of Proceeds:
                                                                                        <ul>

                                                                                            <li> Working Capital</li>
                                                                                            <li> Business Acquisition
                                                                                            </li>
                                                                                            <li> Real Estate & Equipment
                                                                                                Purchase</li>
                                                                                            <li> Debt Refinance </li>

                                                                                        </ul>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <p><strong>SBA 504 loan Program</strong></p>
                                                                            <p>The SBA 504 Loan program provides the
                                                                                benefits of a long term fixed rate and
                                                                                only 10% down payment. This is
                                                                                advantageous for small business who is
                                                                                acquiring or constructing owner occupied
                                                                                real estate.</p>

                                                                            <p>The 504 program is available to finance
                                                                                land, building, and equipment for
                                                                                businesses occupying the property. The
                                                                                typical 504 loan structure works where a
                                                                                credit union funds 50% of a project in a
                                                                                first mortgage position, SBA funds 40%
                                                                                in a low twenty year fixed rate second
                                                                                mortgage, and the business puts down 10%
                                                                                (a higher down payment is required for
                                                                                businesses in existence for less than 2
                                                                                years or limited use facilities).</p>

                                                                            <p><strong><u><a style="color: #000"
                                                                                            href="https://www.platinumfcu.org/forms/SBA-Loan-Application.pdf"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer">SBA
                                                                                            Loan
                                                                                            Application</a></u></strong>
                                                                            </p>
                                                                            <p>Please <a
                                                                                    href="https://www.platinumfcu.org/forms/SBA-Loan-Application.pdf"
                                                                                    target="_blank">click here</a> for
                                                                                the loan application forms and email
                                                                                complete loan application forms and tax
                                                                                returns, interim financial, etc. to <a
                                                                                    href="mailto:sba@platinumfcu.org">sba@platinumfcu.org</a>.
                                                                                For questions or assistance with SBA
                                                                                Loan Application, please call
                                                                                404-297-9797 option 3 and our lending
                                                                                staff will be happy to assist you.</p>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->



                                                    </div>
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
        <a class="top" id="top" href="#top" aria-label="button to return to top of page"><img src=""
                alt="Image to go to top of page" style="display:none;"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
		<!-- google translate -->
	<?php include "../inc/google-translate.php"; ?>
    <!-- back-to-top End -->
    <?php include '../inc/modals.php'; ?>
    <?php include '../inc/inner-scripts.php'; ?>
</body>

</html>