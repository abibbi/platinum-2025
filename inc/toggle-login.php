<style>
  .show-de {
    display: block;
  }

  .hidden-wrapper-de {
    display: none;
  }

  .hidden-de {
    display: none;
  }
	
	#toggleBankingLogin {
		margin-right: -165px;
	}
	
	@media (max-width: 1001px) {
  #toggleBankingLogin {
    margin-right: 0px;
  }
}

	@media (max-width: 750px){
		    margin-right: 100px;

	}
	
	
</style>


<li class="list-inline-item">

  <button id="toggleBankingLogin" class="toggleBankingLoginDe">
    <span>Login</span>
    <i class="fa fa-angle-down" aria-hidden="true"></i>
  </button>


  <div class="toggleLoginContainer hidden-wrapper-de">

    <div class="oldLogin banking-login card-log">
      <div id="bankingLoginHeader" class="card-log-header">
        Online Banking Login
      </div>
      <form action="javascript:RedirectToLogin()">
        <fieldset class="card-log-body" data-method="post">
          <legend class="sr-only">Online Banking</legend>

          <button id="submitOnlineBanking" type="submit" class="submit btn btn-primary d-inline-block" onclick="window.location.href='https://bsdc.onlinecu.com/platinumfcu/#/';">Login</button>
        </fieldset>
      </form>


      <div class="card-log-footer">
        <div class="row">
          <div class="col-6">

            <a href="https://www.ezcardinfo.com/#/">
              Credit card-login
            </a>
            <a href="https://www.businessbillpay-e.com/v2/login.aspx?instid=39424">
              Business Bill Pay
            </a>

          </div>
          <div class="col-6" style="white-space: nowrap; margin-left: -10px;">
            <a href="https://bsdc.onlinecu.com/platinumfcu/#/forgot-password">
              Forgot login info
            </a>
            <a href="https://bsdc.onlinecu.com/platinumfcu/#/sign-up">
              Enroll-Online Banking
            </a>
          </div>
        </div>
      </div>
    </div>




    <!-- new login -->
    <div class="newLogin banking-login card-log hidden-de">
      <div id="bankingLoginHeader" class="card-log-header">
        Online Banking Login
      </div>
      <div class="sr-only">Online Banking</div>
      <form method="POST" action="https://secure.platinumfcu.org/login" autocomplete="off">
        <div style="padding-inline:15px;text-align: left; padding-top:6px;">
          <label style="font-size: 16px;color: white;" for="username">Username</label>
          <input style="height:35px !important; border-radius: 5px; background:white !important;padding-inline:0.25rem;" type="text" name="username" id="username" spellcheck="false" autocorrect="off" autocapitalize="off" required>
        </div>
        <div style="padding-inline:15px;">
          <button style="color:black;width:100%; font-size: 16px; padding-inline:0.75rem; padding-block: 0.4rem;background:white;border-radius: 5px;margin-block:10px;" type="submit">Sign in</button>
        </div>
      </form>
      <div class="card-log-footer">
        <div class="row">
          <div class="col-6">
            <a href="https://www.ezcardinfo.com/#/">
              Credit card-login
            </a>
            <a href="https://www.businessbillpay-e.com/v2/login.aspx?instid=39424">
              Business Bill Pay
            </a>
          </div>
          <div class="col-6" style="white-space: nowrap; margin-left: -10px;">
            <a href="https://secure.platinumfcu.org/forgot">
              Forgot login info
            </a>
            <a href="https://secure.platinumfcu.org/enroll">
              Enroll-Online Banking
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</li>


<script>
  const toggleLoginContainer = document.querySelector(".toggleLoginContainer")

  const toggleBankingLogin = document.querySelector(".toggleBankingLoginDe")

  toggleBankingLogin.addEventListener("click", () => {
    toggleLoginContainer.classList.toggle("hidden-wrapper-de")
    console.log('clickded')
  })


  const CurrentDate = new Date();

  const oldLogin = document.querySelector(".oldLogin")
  const newLogin = document.querySelector(".newLogin")

  const targetDate = new Date("October 1, 2023 01:00:00")


  function toggleHiddenDe() {
    oldLogin.classList.toggle("hidden-de");
    newLogin.classList.toggle("hidden-de");
  }

  if (CurrentDate >= targetDate) {
    toggleHiddenDe();
  }
</script>
