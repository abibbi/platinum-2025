<!doctype html>
<html lang="en">

  <?php $current = "General Services"; ?>

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
                    <div class="col-md-12 tab-border iq-accordion">
                      <!--<h3 class="iq-pb-25">Savings</h3>-->
                      <div class="tab">
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active">

                            <div id="accordion">

                              <!-- <div class="row">
<div class="col-sm-12">
<h3 class="iq-pb-25">Services</h3>
</div>
                              </div> -->

                              <div class="card">
                                <div class="card-header" id="headingEightteen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEightteen" aria-expanded="true" aria-controls="collapseEightteen">Calculators
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseEightteen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <ul class="pin">
                                          <li><a href="../calculators/standard_loan/slc.html" target="_blank">Standard Loan Calculator</a></li>
                                          <li><a href="../calculators/adv_loan/alc.html" target="_blank">Advance Loan Calculator</a></li>
                                          <li><a href="../calculators/loan_qualifier/lq.html" target="_blank">Loan Qualifier</a></li>
                                          <li><a href="../calculators/auto_loan/clc.html" target="_blank">Auto Loan Calculator</a></li>
                                          <li><a href="../calculators/retirement/rc.html" target="_blank">Retirement Calculator</a></li>
                                          <li><a href="../calculators/creditcard_payoff/ccpc.html" target="_blank">Credit Card Payoff Calculator</a></li>
                                          <li><a href="../calculators/savings/sc.html" target="_blank">Savings Calculator</a></li>
                                          <li><a href="../calculators/fixed_rate_mortgage/frmc.html" target="_blank">Fixed Rate Mortgage Calculator</a></li>
                                          <li><a href="../calculators/variable_rate_mortgage/vrmc.html" target="_blank">Variable Rate Mortgage Calculator</a></li>
                                        </ul>
                                      </div>

                                      <div class="col-sm-6">
                                        <ul class="pin">
                                          <li><a href="../calculators/refinance/rfc.html" target="_blank">Refinance Calculator</a></li>
                                          <li><a href="../calculators/compound_interest/cic.html" target="_blank">Compound Interest Calculator</a></li>
                                          <li><a href="../calculators/APR/aprc.htm" target="_blank">APR Calculator</a></li>
                                          <li><a href="http://webapps.ncua.gov/ins/" target="_blank">NCUA Insurance Calculator</a></li>
                                          <li><a href="https://www.loanliner.com/ICE/presenter/default.asp?CuIdNr=01000232&ProtPkgIdNr=8173739812048084441&ORIGIN_CHANNEL_ID=6178990312048144039&ORIGIN_LOCATION_ID=0701751912048144027" target="_blank">GA and Credit Card Payment Protection Calculator</a></li>
                                          <li><a href="https://www.loanliner.com/ICE/presenter/default.asp?CuIdNr=01000232&ProtPkgIdNr=2254969512062095634&ORIGIN_CHANNEL_ID=6178990312048144039&ORIGIN_LOCATION_ID=0701751912048144027" target="_blank">AL Payment Protection Calculator</a></li>
                                          <li><a href="https://www.loanliner.com/ICE/presenter/default.asp?CuIdNr=01000232&ProtPkgIdNr=4148735112062095706&ORIGIN_CHANNEL_ID=6178990312048144039&ORIGIN_LOCATION_ID=0701751912048144027" target="_blank">FL Payment Protection Calculator</a></li>
                                          <li><a href="https://www.loanliner.com/ICE/presenter/default.asp?CuIdNr=01000232&ProtPkgIdNr=4192236512048084412&ORIGIN_CHANNEL_ID=6178990312048144039&ORIGIN_LOCATION_ID=0701751912048144027" target="_blank">GAP Loan Calculator</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header" id="headingCheck">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCheck" aria-expanded="true" aria-controls="collapseCheck">Checks
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseCheck" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <p><a href="#" data-remodal-target="deluxeCheck"><img src="../images/PersonalCheckSite.jpg" alt="personal check site image"></a></p>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header" id="headingSeventeen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">Insurance
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSeventeen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <a class="nav-link" href="#" data-remodal-target="trustage1">Click Here for Insurance</a>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">E-Statements
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>Electronic statements are the quickest and safest way to view your monthly PFCU account statement(s).</p>
                                        <ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                          <li>No need to wait for mailed paper statements</li>
                                          <li>Getting E-statements under Home Banking is safe and secure</li>
                                          <li>You receive your statements at least one week before mailed statements arrive</li>
                                          <li>Save a tree – reduce paper waste</li>
                                          <li>View your account and loan statements online in a secure environment, 24/7</li>
                                          <li>Your E-Statements include check images for your convenience</li>
                                          <li>We just need an e-mail address - we will send an e-mail to let you know when your statement's available to view online</li>
                                          <li>Access at least 12 months of statement history online - save statements to a folder on your computer for your record-keeping purposes</li>
                                          <li>Cost effective - E-statements save the credit union resources so we can pass on more savings to you</li>
                                        </ul>
                                        <p>You can easily sign up for E-statements while in Home Banking. Click on the Statements tab and click on the "Start E-Statements" choice. That is all there is to it! Sign up for E-statements and get the safest, quickest statement delivery while saving trees!</p>
                                        <p><strong>You're in control</strong> - To switch back to mailed paper statements: In Home Banking click on Statements tab, click on the "Stop E-Statements" choice.</p>

                                        <p><strong>Account Access</strong><br>
                                          Access your business checking account at PFCU 24 hours a day with business online banking or 1-877-PFCUTEL (732-8835).</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Online/Mobile Banking
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">

                                  <img src="/images/mobile-book.png" style="max-width:100%"/>

                                  <p align="center" style="padding-top:20px;"><a href="#" data-remodal-target="apple"><img src="../images/app_store.png" alt="Apple App Store"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-remodal-target="google"><img src="../images/android_store.png" alt="Google Play Store"></a></p>
                                  <!-- <div class="card-body"> -->
                                  <!-- 	<div class="row"> -->
                                  <!-- 		<div class="col-sm-12"> -->
                                  <!-- 			<h5 class="iq-pb-25">Home Banking</h5> -->
                                  <!-- 			<p>Access and manage your accounts anywhere, anytime with PFCU's Home Banking system. Access your checking, savings, money market, loan, credit card and other accounts at your convenience. It's safe, simple and secure!</p> -->
                                  <!---->
                                  <!-- 			<ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15"> -->
                                  <!-- 				<li>Check account balances and history</li> -->
                                  <!-- 				<li>Make transfers between PFCU accounts</li> -->
                                  <!-- 				<li>Download transactions to Quickbooks, MS-Money or Microsoft Excel Software. <a href="../pdf/Quickbooks.pdf" target="_blank">Click here for detailed instructions</a>.</li> -->
                                  <!-- 				<li>Use PFCU's Bill Pay service to make your bill payment electronically and secure your identity as well as save time and money on envelopes and postage stamps.</li> -->
                                  <!-- 				<li>Easy access to account information 24/7/365</li> -->
                                  <!-- 			</ul> -->
                                  <!---->
                                  <!-- 			<p><a href="https://bsdc.onlinecu.com/platinumfcu/#/" target="_blank">Click Here to access your Home Banking</a> or call us at 1(877) PFCU4YOU (732-8496).</p> -->
                                  <!-- 			<p><strong>You're in control</strong> - To switch back to mailed paper statements: In Home Banking click on Statements tab, click on the "Stop E-Statements" choice.</p> -->
                                  <!-- 		</div> -->
                                  <!-- 	</div> -->
                                  <!-- 	<div class="row"> -->
                                  <!-- 		<div class="col-lg-12"> -->
                                  <!-- 			<h5 class="iq-pb-25">Mobile Banking</h5> -->
                                  <!-- 			<p>Our apps are made specifically for your smartphone. They give you fast and free access to account information and use your phone's build-in-functions to provide a better banking experience.</p> -->
                                  <!-- 			<p>Our apps are supported by Android, Apple iPhone, Apple iPad and Windows devices.</p> -->
                                  <!-- 			<p><strong>With apps you can:</strong></p> -->
                                  <!-- 			<ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15"> -->
                                  <!-- 				<li>One Click Bill Pay</li> -->
                                  <!-- 				<li>View Balances</li> -->
                                  <!-- 				<li>Deposit Checks</li> -->
                                  <!-- 				<li>Find Locations</li> -->
                                  <!-- 				<li>Transfer Funds</li> -->
                                  <!-- 				<li>And more...</li> -->
                                  <!-- 			</ul> -->
                                  <!-- 			<p align="center"><a href="#" data-remodal-target="apple"><img src="../images/app_store.png" alt="Apple App Store"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-remodal-target="google"><img src="../images/android_store.png" alt="Google Play Store"></a></p> -->
                                  <!---->
                                  <!-- 			<p align="center"><img src="../images/new-mobile.jpg" alt="New Mobile Banking" width="456" height="590"></p> -->
                                  <!---->
                                  <!-- 			<!--<p align="center"><iframe style="min-height: 315px; max-width: 550px;" width="100%" height="auto" src="https://www.youtube.com/embed/CUXIVm8_MxA" frameborder="0" allowfullscreen title="Mobile Banking and Online App Video"></iframe></p>-->
                                  <!-- 		</div> -->
                                  <!-- 	</div> -->
                                  <!-- </div> -->
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">Next Day Clearing
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p align="center"><strong>FUNDS AVAILABILITY POLICY DISCLOSURE</strong></p>
                                        <p align="center"><strong>YOUR ABILITY TO WITHDRAW FUNDS</strong></p>
                                        <p>Platinum Federal Credit Union's policy is to make funds from your check deposits available to you on the first business day after the day we receive your deposit. Cash and Electronic direct deposits will be available on the day we receive the deposit. Once they are available, you can withdraw the funds in cash and we will use the funds to pay checks that you have written.</p>
                                        <p>For determining the availability of your deposit, every day is a business day, except Saturdays, Sundays, and federal holidays. If you make a deposit before the end of business day, on a business day that we are open, we will consider that day to be the day of your deposit. However, if you make a deposit after end of business day or on a day we are not open, we will consider that the deposit was made on the next business day we are open.</p>

                                        <p align="center"><strong>LONGER DELAYS MAY APPLY</strong></p>
                                        <p>In some cases, we will not make all of the funds that you deposit by check available to you on the first business day after the day of your deposit. Depending on the type of check that you deposit, funds may not be available until the second business day after the day of your deposit. The first $200 of your deposits, however, will be available on the first business day.</p>
                                        <p>If we are not going to make all of the funds from your deposit available on the first business day, we will notify you at the time you make your deposit. We will also tell you when the funds will be available. If your deposit is not made directly to one of our employees, or if we decide to take this action after you have left the premises, we will mail you the notice by the day after we receive your deposit.</p>
                                        <p>If you will need the funds from a deposit right away, you should ask us when the funds will be available.</p>
                                        <p>In addition, funds you deposit by check may be delayed for a longer period under the following circumstances:</p>
                                        <ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                          <li>We believe a check you deposit will not be paid.</li>
                                          <li>You deposit checks totaling more than $5,000 on any one day.</li>
                                          <li>You deposit checks not made payable to you.</li>
                                          <li>You redeposit a check that has been returned unpaid.</li>
                                          <li>You have overdrawn your account repeatedly in the last six months.</li>
                                          <li>There is an emergency, such as failure of computer or communications equipment.</li>
                                        </ul>

                                        <p>We will notify you if we delay your ability to withdraw funds for any of these reasons, and we will tell you when the funds will be available. They will generally be available no later than the seventh business day after the day of your deposit.</p>

                                        <p align="center"><strong>SPECIAL RULES FOR NEW ACCOUNTS</strong></p>
                                        <p>If you are a new member, the following special rules will apply during the first 30 days your account is open.</p>
                                        <p>Funds from electronic direct deposits to your account will be available on the day we receive the deposit. Funds from deposits of cash, wire transfers, and the first $5,000 of a day's total deposits of cashier's, certified, teller's, traveler's and federal, state, and local government checks will be available on the first business day after the day of your deposit if the deposit meets certain conditions. For example, the checks must be payable to you. The excess over $5,000 will be available on the seventh business day after the day of your deposit. If your deposit of these checks (other than a U. S. Treasury check) is not made in person to one of our employees, the first $5,000 will not be available until the second business day after the day of your deposit.</p>
                                        <p>Funds from all other check deposits will be available on the seventh business day after the day of your deposit.</p>

                                        <p><strong>Account Access</strong><br>Access your accounts at PFCU 24 hours a day with Home Banking or 1-877-
                                          PFCUTEL (732-8835) or Call us at 1(877) PFCU4YOU (732-8496).</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">Night Drop Facility
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>For those times when you're in a hurry, you can quickly and conveniently make deposits, loan payments, Visa® payments, and check orders in our Night Drop Deposit boxes. Currently available at most of our branches, these services let you avoid waiting in the teller line or conduct branch activities if you are unable to make it to the branch during business hours. And since these boxes are opened under dual control, you'll have the peace of mind that your transaction is safe.</p>
                                        <ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                          <li>Night Drop Deposits are processed and credited the next business day.</li>
                                        </ul>
                                        <p>If you have additional questions, please call us at 1(877) PFCU4YOU (732-8496).</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingNine">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">Notary Services
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>A PFCU Notary Public will notarize any documents pertaining to PFCU's Real Estate transactions, Affidavit of Plastic Card Forgery, Certification of Trust membership updates, and DMV forms at no fee. All other documents can be notarized for members at no fee. There will be a $2.00/notary charge for non-members. Please contact your <a href="contact-us.php">local branch</a> to make an appointment for this service.&sup1;</p>
                                        <p>&sup1;This service may not be available at all locations.</p>
                                        <p><strong>Account Access</strong>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">Overdraft Protection
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p><strong>8 Reasons You'll Appreciate Overdraft Privilege</strong></p>
                                        <p>1. Added convenience.<br>
                                          2. A deposit you expected was delayed.<br>
                                            3. You have greater flexibility managing your money.<br>
                                            4. Unforeseen expenses drained your account balance.<br>
                                            5. Your chances of paying a merchant’s expensive returned-check charge are limited.<br>
                                            6. You made an honest mistake balancing your checkbook and now you’re short of funds.<br>
                                            7. You may avoid the embarrassment of a “bounced” check or a declined debit card transaction.<br>
                                            8. Other than our normal non-sufficient funds charges (set forth in our fee schedules), there’s no additional fee for this extra service.</p>

                                        <p align="center"><strong>Platinum Federal Credit Union Discretionary Overdraft Privilege Policy</strong></p>
                                        <p>It is the policy of Platinum Federal Credit Union to comply with all applicable laws and regulations and to conduct business in accordance with applicable safety and soundness standards. The Membership Account Agreement and Disclosure provided to you at the time you opened your account with us controls the duties, obligations and rights of the Depositor, the Authorized Signatories and Platinum Federal Credit Union with regard to your checking account. The Membership Account Agreement (and all amendments thereto) and its terms shall control any possible conflict, if any, between any provision of this Discretionary Overdraft Privilege Policy and the Membership Account Agreement and Disclosure. A copy of the Membership Account Agreement and Disclosure is available to you on request from a Platinum Federal Credit Union representative.</p>
                                        <p>Overdraft privilege is not a line of credit. However, if you inadvertently overdraw your account, we will have the discretion to pay the overdraft, subject to the limit of your overdraft privilege and the amount of the overdraft fee. Platinum Federal Credit Union is not obligated to pay any item presented for payment if your account does not contain sufficient available funds. Any discretionary payment by Platinum Federal Credit Union of an overdraft check (or items, such as a ACH Debit) does not obligate Platinum Federal Credit Union to pay any other overdraft check (or item), or to provide prior notice of its decision to refuse to pay such check (or item).</p>
                                        <p>Pursuant to Platinum Federal Credit Union’s commitment to always provide you with the best level of service, now and in the future, if your checking account has been open for at least thirty (30) days and thereafter you maintain your account in good standing, which includes at least:</p>
                                        <p>A) Bringing your account to a positive balance within every thirty (30) day period for a minimum period of 24 hours;<br>
                                          B) Not being in default on any loan or other obligation to Platinum Federal Credit Union; and<br>
                                            C) Not being subject to any legal or administrative order or levy, Platinum Federal Credit Union will have the discretion to pay overdrafts within the overdraft privilege limits. Payment by Platinum Federal Credit Union is a discretionary courtesy and not a right of the accountholder or an obligation of Platinum Federal Credit Union. Business members will be required to fill out an application to request overdraft privilege and submit tax returns and other documents which will help PFCU credit committee to approve a defined overdraft privilege limit. This privilege for personal checking accounts will generally be limited to a maximum of $500 (up to $10,000 for retail businesses and up to $50,000 for wholesale businesses) overdraft (negative) balance. Of course, any and all fees and charges, including without limitation the non-sufficient funds fees (as set forth in our fee schedules and membership account agreement and disclosure), will be included as part of this maximum amount. It may be possible that your account will become overdrawn in excess of the overdraft privilege amount as a result of the assessment of a fee.</p>
                                        <p>The total of the discretionary Overdraft Privilege (negative) balance, which includes any and all fees and charges, including all non-sufficient funds/overdraft fees is due and payable upon demand, and Depositor and each Authorized Signatory will continue to be liable, jointly and severally, for all such amounts, as described in the Membership Account Agreement and Disclosure.</p>
                                        
                                        <p>Transactions may not be processed in the order in which they occurred, and the order in which transactions are received and processed may impact the total amount of fees incurred. While Platinum Federal Credit Union will have the discretion to pay overdrafts on accounts in good standing (as described above), any such payment is a discretionary courtesy, and not a right of the accountholder or an obligation of Platinum Federal Credit Union and Platinum Federal Credit Union in its sole and absolute discretion, can cease paying overdrafts at any time without prior notice of reason or cause.</p>
                                        <p>Platinum Federal Credit Union will not pay overdrafts for ATM or everyday debit card transactions after August 15, 2010 unless Platinum Federal Credit Union has provided you with the notice required by section 205.17(b) of Regulation E and you have opted in to the payment of these overdrafts. In order to avoid overdrafts due to ATM and everyday debit card transactions, Platinum Federal Credit Union will place a hold on your account for any ATM or everyday debit card transaction authorized until the transaction settles. ATM and everyday debit card transactions usually settle within three business days after the transaction is authorized. The amount of the hold will be for the amount authorized, or as permitted under applicable payment network rules. Holds on authorized ATM and everyday debit card transactions will be removed prior to settlement where required by applicable payment network rules. In addition you may opt out of the Overdraft Privilege services for check, ACH and debit card bill payment transactions at any time by contacting one of our Member Service Representatives.</p>
                                        <p><strong>Account Access</strong>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingEleven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">Safe Deposit Box
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>Safe Deposit Boxes are a great tool for managing your valuables and important documents. They are safe, secure, fire proof and provide convenient access to those items you absolutely can't lose.</p>
                                        <p>Safe Deposit Boxes are available at the following branches:</p>
                                        <p>Decatur, GA<br>
                                          Duluth, GA<br>
                                        Lilburn, GA</p>
                                        <p>Safe Deposit Boxes come in varied sizes. Annual rental fees vary based on size, subject to box availability.</p>

                                        <table class="table table-bordered table-striped">
                                          <thead>
                                            <tr>
                                              <th scope="col" style="background-color: #065e2c; color: #fff;">
                                                <center><strong>Box Size</strong></center>
                                              </th>
                                              <th scope="col" style="background-color: #065e2c; color: #fff;">
                                                <center><strong>Annual Fee</strong></center>
                                              </th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>3"x3"</td>
                                              <td>$20.00</td>
                                            </tr>
                                            <tr>
                                              <td>5"x5"</td>
                                              <td>$50.00</td>
                                            </tr>
                                            <tr>
                                              <td>3"x10"</td>
                                              <td>$60.00</td>
                                            </tr>
                                            <tr>
                                              <td>5"x10"</td>
                                              <td>$75.00</td>
                                            </tr>
                                            <tr>
                                              <td>10"x10"</td>
                                              <td>$100.00</td>
                                            </tr>
                                          </tbody>
                                        </table>

                                        <p>To find out if a box is available at your nearest branch, please call us at 1(877) PFCU4YOU (732-8496).</p>
                                        <p>Safe Deposit Boxes offer two keys for every rental. Lost keys may result in replacement fees and/or locksmith recovery costs if boxes must be forced.</p>
                                        <p><strong>Account Access</strong>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwelve">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">Shared Branch Services
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p><strong>Shared Branching Makes Life Easier</strong></p>
                                        <p>Whether you're in the next town or on vacation, you'll find a credit union ready to help - thanks to the convenience of shared branching.</p>
                                        <p>PFCU also participates in the CO-OP Shared Branch network. This allows PFCU members to conduct their financial business at over 5,000 branches and over 2,000 self-service locations in all 50 states, Puerto Rico, Guam and military bases around the globe. You are never far from your money when you need it. Convenience is KEY in your busy life and we've got you covered. <a href="#" data-remodal-target="co-op">Click here to search for a CO-OP Shared Branch location near you</a>.</p>
                                        <p>It's like having a PFCU branch where ever you go!</p>
                                        <p>*There is a $4.00/transaction fee for business checking account transactions.</p>
                                        <p><strong>Account Access</strong>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingThirteen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">Surcharge Free ATMs
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseThirteen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>The Credit Union 24 (CU24) network allows you to use Credit Union 24 Here ATMs surcharge-Free. This provides availability to over Twenty Three hundred Surcharge Free ATMs nationwide.</p>
                                        <p>Credit Union 24 Presto! Network which is the Credit Union 24 Select program, enables members of PFCU to enjoy over nine hundred additional surcharge-free ATMs at Publix Supermarket stores throughout the Southeast.</p>
                                        <p><a href="#" data-remodal-target="cu24">Click here to locate a surcharge-free ATM near you</a>.</p>
                                        <p><strong>Account Access</strong><br>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.</p>
                                        <p align="center"><a href="#" data-remodal-target="cu24"><img src="../images/cu24.jpg" alt="Credit Union 24"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-remodal-target="cu24"><img src="../images/logocu24publix.gif" alt="Credit Union 24 Select"></a></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingFourteen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">VISA® Debit Card
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFourteen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <p>Instead of writing a check, use the VISA® Debit Card.</p>
                                        <ul class="listing-mark iq-tw-6 iq-font-black iq-pb-15">
                                          <li>Purchase goods and services from any merchant who accepts VISA and get cash back</li>
                                          <li>Amounts are deducted from your checking account similar to check clearing</li>
                                          <li>Use at ATM machines to make deposits and withdrawals to and from your checking account. Using CU24 ATMs is Free to PFCU members. Please note, PFCU belongs to CU24 Here, CU24 Select and Money Pass networks. PFCU does not belong to their Allpoint network.</li>
                                          <li>Honored by all merchants that display the VISA® logo</li>
                                          <li>It’s fast and convenient</li>
                                        </ul>
                                        <p><strong>Always choose "Credit"! It’s to your advantage!</strong><br>
                                          When using your VISA® Debit Card for a retail purchase, you will be given a choice between debit (using your PIN) or credit (signature required). Be sure you always choose credit when you do not need cash back.<br>
                                            What’s the difference? In both cases the amount of your purchase will be deducted from your checking account. When you choose "debit", you are not covered under the zero liability for unauthorized transactions. However, if you push "credit" you have coverage for zero liability on unauthorized transactions.
                                        </p>
                                        <p><strong>To Report Lost or Stolen Debit Card, Please call 1-800-325-3678.</strong></p>
                                        <p><strong>Account Access</strong><br>
                                          Access your accounts at PFCU 24 hours a day with Home Banking.
                                        </p>
                                        <p align="center">
                                          <a href="#" data-remodal-target="cred24"><img src="../images/moneypass.jpg" border="0" alt="ATM Locators">
                                          </a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                             

                              <div class="card">
                                <div class="card-header" id="headingSixteen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">Wire Transfer
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseSixteen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p>On occasion, you may need to have money quickly transferred between the Credit Union and another financial institution. Wire transfers allow this to occur safely and quickly to meet that need. <strong>Wire transfers are processed Monday - Friday, during regular business hours.</strong></p>
                                        <p><strong>Receiving Funds</strong><br>
                                          There is a $5.00 charge for incoming wires. <a href="../pdf/WireInstructions-Incoming.pdf" target="_blank">Click Here for instructions/information for the sender/payer to receive wire transfer in your account at PFCU</a>.</p>
                                        <p><strong>Sending Funds</strong><br>
                                          Funds can be wired worldwide to any financial institution capable of receiving them. Outgoing wire requests must be made by 3:00 p.m. Monday - Friday to go out the same day. International transactions may require a U.S. Correspondent Bank and may take longer to reach the receiving bank, based on their receiving process. There are <a href="rates.php">service fees</a> associated with this service.</p>
                                        <p>For your convenience, you can complete the <a href="https://www.platinumfcu.org/pages/wire-transfer-form.php">Wire Transfer Form</a> online</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>



                              <div class="card">
                                <div class="card-header" id="headingNineteen">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="true" aria-controls="collapseSixteen">Zelle
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseNineteen" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12">

                                        <script>var JHZELLE_eventMethod = window.addEventListener?"addEventListener":"attachEvent"; var JHZELLE_eventer = window[JHZELLE_eventMethod]; var JHZELLE_messageEvent = "attachEvent"==JHZELLE_eventMethod?"onmessage":"message"; JHZELLE_eventer(JHZELLE_messageEvent,function(e){ if(-1!=e.data.indexOf("JHZELLE_RESIZE::")){ var E=e.data.replace("JHZELLE_RESIZE::",""); document.getElementById("JHZELLE_iframe").style.height=E+"px"}},!1);</script><iframe id="JHZELLE_iframe" src="https://www.paymentsemails.com/ZelleOverview?jhid=48761&showVideo=1&hidescroll=1" style="border: none;" title="Zelle Landing Page" width="100%"></iframe>
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
