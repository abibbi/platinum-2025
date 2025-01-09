<!doctype html>
<html lang="en">

<?php $current = "Personal Deposit Products"; ?>

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
                                <a class="nav-link " href="business-deposit.php">Business Deposits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="personal-deposit.php">Personal Deposits</a>
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
                                        <!--<h3 class="iq-pb-25">Savings</h3>-->
                                        <div class="tab">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <div id="accordion">
                                                        <!-- 
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h3 class="iq-pb-25">Personal</h3>
                                                            </div>
                                                        </div> -->
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">Certificate of
                                                                        Deposit
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>With a Certificate Account from Platinum
                                                                                Federal Credit Union, you know your
                                                                                exact return on investment with fixed
                                                                                dividend rates. Choose from 6 to 60
                                                                                Month terms, depending on your
                                                                                investment strategy. Our competitive
                                                                                rates let you take advantage of
                                                                                risk-free* investing while enjoying the
                                                                                great rates you've come to expect. We
                                                                                offer a variety of rates for business
                                                                                accounts with minimum opening deposits
                                                                                as low as $1,000.</p>
                                                                            <p><strong>Short-Term Certificate:</strong>
                                                                                For members wanting a quick return on
                                                                                their investment, generally payable or
                                                                                reaching maturity within a relatively
                                                                                brief time, usually less than one year.
                                                                            </p>
                                                                            <p><strong>Long-Term Certificate:</strong>
                                                                                For members wanting to invest their
                                                                                money for longer than one year,
                                                                                generally receiving a higher rate of
                                                                                return.</p>
                                                                            <p><strong>Account Access</strong><br>
                                                                                Access your accounts at PFCU 24 hours a
                                                                                day with Home Banking.</p>
                                                                            <p><em>NCUA insurance limit up of
                                                                                    $250,000.</em></p>
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
                                                                        aria-controls="collapseTwo">Savings
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>PFCU’s Personal Savings Account gives you
                                                                                the option to earn a competitive rate of
                                                                                return on the excess cash you may have
                                                                                in your business accounts. Open a
                                                                                Business Savings Account today!</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>$20 minimum balance to open</li>
                                                                                <li>One time fee of $20 for Business
                                                                                    membership</li>
                                                                                <li>No monthly service fee</li>
                                                                                <li>No transaction fees</li>
                                                                                <li>No Dollar limit on deposits and
                                                                                    withdrawals</li>
                                                                                <li>Dividend accrues from the date of
                                                                                    deposit</li>
                                                                                <li>Dividends paid semi-annually</li>
                                                                            </ul>
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
                                                                        aria-controls="collapseFour">College Savings
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFour" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <h3 class="iq-pb-25">College Savings Account
                                                                            </h3>
                                                                            <p><strong>Saving a little bit every pay
                                                                                    period for your child's college with
                                                                                    PFCU's College Savings Account can
                                                                                    really add up.</strong></p>
                                                                            <p>PFCU's College Savings Accounts are
                                                                                insured up to $250,000 by NCUA, a
                                                                                government agency. Deposits in PFCU
                                                                                College Savings Account do not drop in
                                                                                value as compared with the 529 College
                                                                                Savings Account Equity options. PFCU
                                                                                pays interest rate monthly on college
                                                                                savings account which is equivalent to
                                                                                three years Certificate of Deposit
                                                                                interest rate as of the end of previous
                                                                                year. <a
                                                                                    href="../forms/college-savings-plan.pdf"
                                                                                    target="_blank">Click here for
                                                                                    detailed information on PFCU's
                                                                                    College Savings account</a> and
                                                                                comparison with ESA Coverdell and 529
                                                                                Plan.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingEight">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseEight"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseEight">Platinum Simple
                                                                        Checking Account
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseEight" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>At Platinum Federal Credit Union, we
                                                                                offer our members with what we call it a
                                                                                No Hassle Personal Checking Account
                                                                                which pays interest on your balance and
                                                                                has no minimum balance requirement, no
                                                                                monthly maintenance fee, free home
                                                                                banking, free bill pay, etc. etc. etc.
                                                                                Since PFCU is part of the credit union
                                                                                shared branching network you can access
                                                                                your account free of charge at one of
                                                                                the 5,000 credit union locations
                                                                                nationwide.</p>
                                                                            <p>The following features apply to Platinum
                                                                                FCU's Simple Interest Bearing Checking
                                                                                Account:</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">

                                                                                <li>Free VISA&reg; Debit Card with
                                                                                    access to over 45,000 ATM locations
                                                                                </li>
                                                                                <li>Free Home Banking with text and
                                                                                    email alerts.</li>
                                                                                <li>Free Access to your account via over
                                                                                    5,000 shared branching credit union
                                                                                    locations nationwide</li>
                                                                                <li>No Minimum Balance Requirement</li>
                                                                                <li>Choose between Monthly E-Statements
                                                                                    or Print Statements both with check
                                                                                    images</li>
                                                                                <li>Free Direct Deposit</li>
                                                                                <li>Free Unlimited Transactions</li>
                                                                                <li>Free Unilimed Teller Transactions
                                                                                </li>
                                                                                <li>Free Night Drop Facility</li>
                                                                                <li>Next Day Clearing on Most of your
                                                                                    Check Deposits</li>
                                                                                <li>Free Notary Services</li>
                                                                                <li>Overdraft Lines available based on
                                                                                    financials and credit worthiness
                                                                                </li>
                                                                                <li>Safe Deposit boxes available at
                                                                                    Georgia Locations for secure
                                                                                    valuables and document storage</li>
                                                                                <li>Both Domestic and International Wire
                                                                                    Transfer facility available</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingNine">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseNine" aria-expanded="true"
                                                                        aria-controls="collapseNine">Platinum Secure
                                                                        Checking Account
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseNine" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>Peace of mind. It’s one of the most
                                                                                important benefits a financial
                                                                                institution can provide.With unrivaled
                                                                                security and smart savings – it’s
                                                                                simple! With Platinum Secure Checking
                                                                                it’s easier to protect your finances,
                                                                                take advantage of smart discounts on
                                                                                financial services and everyday
                                                                                purchases, and enjoy your life. That’s
                                                                                something you can count on. The Platinum
                                                                                Since PFCU is part of the credit union
                                                                                shared branching network you can access
                                                                                your account free of charge at one of
                                                                                the 5,000 credit union locations
                                                                                nationwide.</p>
                                                                            <p>The following features apply to Platinum
                                                                                Secure Checking Account:</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>No minimum balance requirement</li>
                                                                                <li>Tiered Interest Rates</li>
                                                                                <li>Free VISA&reg; Debit Card with
                                                                                    access to over 45,000 ATM locations
                                                                                </li>
                                                                                <li>Free Home Banking with text and
                                                                                    email alerts</li>
                                                                                <li>Free Access to your account via over
                                                                                    5,000 shared branching credit union
                                                                                    locations nationwide</li>
                                                                                <li>No Minimum Balance Requirement</li>
                                                                                <li>Choose between Monthly E-Statements
                                                                                    or Print Statements both with check
                                                                                    images</li>
                                                                                <li>Free Direct Deposit</li>
                                                                                <li>Free Unilimed Transactions</li>
                                                                                <li>Free Unilimed Teller Transactions
                                                                                </li>
                                                                                <li>Free Night Drop Facility</li>
                                                                                <li>3 Free Bankers Check per month</li>
                                                                                <li>First 5 ATM Fee's waived</li>
                                                                                <li>Free Notary Services</li>
                                                                            </ul>
                                                                            <p>With Platinum Secure Checking you also
                                                                                receive the following benefits at no
                                                                                additional cost:</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>IDProtect®</li>
                                                                                <li>Cellular Telephone Protection</li>
                                                                                <li>Accidental Death & Dismemberment
                                                                                    Insurance</li>
                                                                                <li>Debit Advantage&reg;</li>
                                                                                <li>Travel and Leisure Discounts</li>
                                                                                <li>$hopping Rewards™</li>
                                                                                <li>Family Health Discounts</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p align="center"><img
                                                                                    src="../images/comparison-chart.jpg"
                                                                                    alt="Checking Account Comparison Chart"
                                                                                    class="img-fluid"
                                                                                    style="width: 100%;" width></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p align="center"
                                                                                style="position:relative;height:0;padding-bottom:56.25%">
                                                                                <iframe width="750" height="515"
                                                                                    title="YouTube Video"
                                                                                    src="https://www.youtube.com/embed/c2q5j7diQs4"
                                                                                    frameborder="0"
                                                                                    style="position:absolute;width:100%;height:100%;left:0"
                                                                                    allow="autoplay; encrypted-media">
                                                                                </iframe>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTen">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseTen" aria-expanded="true"
                                                                        aria-controls="collapseTen">Student Checking
                                                                        Accounts
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTen" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <p>At Platinum Federal Credit Union, we
                                                                                offer our members with convenient
                                                                                Student Checking Account which pays
                                                                                interest on your balance and has no
                                                                                minimum balance requirement, no monthly
                                                                                maintenance fee, free home banking, free
                                                                                bill pay, etc. etc. etc. Since PFCU is
                                                                                part of the credit union shared
                                                                                branching network you can access your
                                                                                account free of charge at one of the
                                                                                5,000 credit union locations nationwide.
                                                                                So you can attend some years of college
                                                                                in one state and transfer to another
                                                                                college across the country to finish
                                                                                your college and still have access to
                                                                                your checking account at PFCU via a
                                                                                physical credit union branch location in
                                                                                addition to hundreds of surcharge free
                                                                                ATM's.</p>
                                                                            <p>The following features apply to Platinum
                                                                                FCU's Student Interest Bearing Checking
                                                                                Account:</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black">
                                                                                <li>Tiered interest rates - the more
                                                                                    your balance the more it earns</li>
                                                                                <li>Free VISA® Debit Card with access to
                                                                                    over 45,000 ATM locations</li>
                                                                                <li>Free Home Banking with text and
                                                                                    email alerts.</li>
                                                                                <li>Free Access to your account via over
                                                                                    5,000 shared branching credit union
                                                                                    locations nationwide</li>
                                                                                <li>No Minimum Balance Requirement</li>
                                                                                <li>Choose between Monthly E-Statements
                                                                                    or Print Statements both with check
                                                                                    images</li>
                                                                                <li>Free Direct Deposit</li>
                                                                                <li>Free Unlimited Transactions</li>
                                                                                <li>Free Unilimed Teller Transactions
                                                                                </li>
                                                                                <li>Free Night Drop Facility</li>
                                                                                <li>Next Day Clearing on Most of your
                                                                                    Check Deposits</li>
                                                                                <li>Free Notary Services</li>
                                                                                <li>Overdraft Lines available based on
                                                                                    financials and credit worthiness
                                                                                </li>
                                                                                <li>Safe Deposit boxes available at
                                                                                    Georgia Locations for secure
                                                                                    valuables and document storage</li>
                                                                                <li>Both Domestic and International Wire
                                                                                    Transfer facility available</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingEleven">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseEleven"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseEleven">Money Market
                                                                        Account
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseEleven" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <h3 class="iq-pb-25">Money Market Account
                                                                            </h3>
                                                                            <p>With Platinum Federal Credit Union, you
                                                                                have access to competitive rates no
                                                                                matter how much savings you have.
                                                                                Whether you're saving for an upcoming
                                                                                house purchase, remodeling your house,
                                                                                tax payments, saving for emergencies or
                                                                                simply trying to help your liquid money
                                                                                work as hard as it can, our tiered money
                                                                                market account is an ideal way to earn
                                                                                more dividends on your funds while
                                                                                maintaining flexibility.</p>
                                                                            <ul
                                                                                class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                                                                <li>Tiered interest rates - the more you
                                                                                    save the more it earns</li>
                                                                                <li>No monthly fee with minimum balance
                                                                                    of $1,000; otherwise $10 per month
                                                                                </li>
                                                                                <li>Up to six withdrawals or transfers
                                                                                    per month</li>
                                                                                <li>No dollar limitations on deposits or
                                                                                    withdrawals</li>
                                                                                <li>Convenient account access</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingOnei">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseOnei" aria-expanded="true"
                                                                        aria-controls="collapseOnei">Individual
                                                                        Retirement Accounts
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOnei" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p>One of the greatest challenges facing Americans
                                                                        today is ensuring the financial well being and
                                                                        security of your family throughout your
                                                                        retirement years. With uncertainty over the
                                                                        adequacy of social security growing daily, it's
                                                                        increasingly necessary to rely on your own
                                                                        savings plans and resources to support your
                                                                        future retirement plans.</p>
                                                                    <p>Yet another challenge is finding money for the
                                                                        impending college education expenses for your
                                                                        children. Tuition and other collegiate expenses
                                                                        are on the rise, so it's a good idea to get a
                                                                        head start on saving for those expenses now,
                                                                        instead of getting caught unprepared later!</p>
                                                                    <p>At Platinum FCU, we offer three long term savings
                                                                        accounts geared to help you save for your
                                                                        family's future: Traditional IRAs, Roth IRAs and
                                                                        Coverdell Education Savings Accounts (ESAs).</p>
                                                                   <!-- <p>Invest with confidence with the help of our <a
                                                                            href="mailto:mwm@platinumfcu.org">Member
                                                                            Wealth Management (MWM)</a> team who will
                                                                        work closely with you to provide strategies that
                                                                        help with your unique situations. Our Member
                                                                        Wealth Management services include retirement
                                                                        and income strategies, investment analysis and
                                                                        portfolio allocation, and wealth transfer and
                                                                        estate planning services.</p>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwoi">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseTwoi" aria-expanded="true"
                                                                        aria-controls="collapseTwoi">TRADITIONAL IRAs
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseTwoi" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p>Traditional IRAs are valuable long-term savings
                                                                        tools that can provide safety and security for
                                                                        you and your family. Your contributions can be
                                                                        deducted from your taxable income, reducing the
                                                                        income taxes you are currently paying.</p>
                                                                    <p><strong>raditional IRA Features:</strong></p>
                                                                    <ul
                                                                        class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                                                        <li>Can be opened and funded without any
                                                                            employer participation</li>
                                                                        <li>Contributions and/or earnings are
                                                                            tax-deferred until retirement</li>
                                                                        <li>Possible deductions based on retirement plan
                                                                            participation and income</li>
                                                                        <li>Provide full accessibility to your funds;
                                                                            10% early distribution penalty if younger
                                                                            than 59½ years</li>
                                                                        <li>Completely flexible as there is no minimum
                                                                            contribution in any year</li>
                                                                        <li>under age 70½ years may contribute a maximum
                                                                            of $5K per year</li>
                                                                    </ul>
                                                                    <p>Platinum FCU offers a Traditional IRA that pays
                                                                        competitive market rates. No minimum amount is
                                                                        required to set up a Traditional IRA savings
                                                                        account. <a href="rates.php">To view current
                                                                            rates click here</a> or <a
                                                                            href="services-general.php">click here for
                                                                            the retirement calculators</a>.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingThreei">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseThreei"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseThreei">ROTH IRAs
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseThreei" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p>Roth IRAs offer you a very easy way to plan for
                                                                        the future of you and your family. Your
                                                                        contributions are not tax-deductible but the
                                                                        earnings within a Roth IRA are tax-free as long
                                                                        as your funds have been in the account for at
                                                                        least 5 years and you are either over 59½ years
                                                                        of age, disabled, or buying your first home.</p>
                                                                    <p><strong>Roth IRA Features:</strong></p>
                                                                    <ul
                                                                        class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                                                        <li>The money you contribute to a Roth IRA has
                                                                            already been taxed. So the principal amount
                                                                            is never subject to taxes or penalties in
                                                                            the future, as long as you stay within the
                                                                            contribution guidelines.</li>
                                                                        <li>Roth IRAs enable the money you contribute to
                                                                            grow tax-deferred. If you do not withdraw
                                                                            any of the earnings until you have had the
                                                                            IRA for at least 5 years and have a
                                                                            qualifying event, those earnings become
                                                                            tax-free</li>
                                                                        <li>There is no 70½ year age limit on making
                                                                            contributions. You do, however, need earned
                                                                            income, which is defined the same as for
                                                                            Traditional IRAs. As long as you satisfy the
                                                                            Roth IRA requirements, you may contribute to
                                                                            a Roth IRA, even after the year in which you
                                                                            reach 70½ years.</li>
                                                                    </ul>
                                                                    <p>Platinum FCU offers a Roth IRA that pays
                                                                        competitive market rates. No minimum amount is
                                                                        required to set up a Roth IRA savings account.
                                                                        <a href="rates.php">To view current rates click
                                                                            here</a> or <a
                                                                            href="services-general.php">click here for
                                                                            the retirement calculators</a>.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFouri">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapseFouri"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseFouri">COVERDELL
                                                                        EDUCATION SAVINGS ACCOUNTS (ESAs)
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseFouri" class="collapse"
                                                                data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p>Are you ready to start planning for your child’s
                                                                        future? There is no time like the present! And
                                                                        the perfect way to start is with a Coverdell
                                                                        Education Savings Account (ESA) from Platinum
                                                                        FCU.</p>
                                                                    <p>The ESA allows after-tax contributions of $2K per
                                                                        year for each child until they reach 18 years of
                                                                        age. Contributions and earnings are tax free
                                                                        when withdrawn to pay for qualified education
                                                                        expenses which include tuition, fees, books,
                                                                        supplies and equipment.</p>
                                                                    <p><strong>Coverdell Education Savings Account
                                                                            Features:</strong></p>
                                                                    <ul
                                                                        class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                                                        <li>Contributions are not tax-deductible, but
                                                                            the contributions may earn interest tax
                                                                            deferred until distributed</li>
                                                                        <li>The child will not owe tax on any withdrawal
                                                                            from the account if withdrawal is equal to
                                                                            or less than the child's qualified education
                                                                            expenses at an eligible educational
                                                                            institution for the year</li>
                                                                        <li>Amounts withdrawn from an ESA that exceed
                                                                            the child's qualified education expenses in
                                                                            a taxable year may be subject to income tax
                                                                            and to an additional penalty of 10%</li>
                                                                        <li>If the child doesn't need the money for pre-
                                                                            or postsecondary education, the child may
                                                                            roll or transfer the balance to an eligible
                                                                            family member's ESA or to a qualified
                                                                            tuition program (QTP)</li>
                                                                    </ul>
                                                                    <p>Platinum FCU offers a Coverdell Education Savings
                                                                        Account that pays competitive market rates. No
                                                                        minimum amount is required to set up an ESA. <a
                                                                            href="rates.php">To view current rates click
                                                                            here</a> or <a
                                                                            href="services-general.php">click here for
                                                                            the retirement calculators</a>.</p>
                                                                    <p><em>*The Credit Union provides no legal advice to
                                                                            members, and provides the foregoing
                                                                            information from a reliable resource to give
                                                                            our members a basic understanding of these
                                                                            services. You should consult with your tax
                                                                            or legal advisor regarding any particular
                                                                            and the current status of applicable federal
                                                                            and state laws.</em></p>
                                                                </div>
                                                            </div>
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
    <?php include '../inc/modals.php';?>
    <?php include '../inc/inner-scripts.php';?>
</body>

</html>