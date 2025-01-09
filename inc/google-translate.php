<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate Page</title>
    <style>
            .green-header {
      color: #108242 !important;
      font-weight: 700;
    }

    .blk-text {
      color: #000;
      font-weight: 500;
    }

    .popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 999;
    }

    .popup-content {
      background-color: black;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px #000;
      width: 80%;
      max-width: 400px;
      position: relative;
    }

    .close-btn {
      position: absolute;
      right: 15px;
      top: 5px;
      font-size: 25px;
      cursor: pointer;   
    }
	  #google_translate_element { 
		  z-index: 999;
      position: fixed;
      bottom: 100px;
      left: 0px;
      background: white;
      color: black;
      border: none;
      font-weight: bold;
      border-radius: 3px;
      padding: 1px 8px;
		border: 2px solid black;
    }
	  #google_translate_element select {
    color: black;
    border: none;
    font-weight: bold;
    border-radius: 3px;
    padding: 8px 12px;
    outline: none; /* Remove outline */
		  border-style: solid black;
}


    body > .skiptranslate,.goog-logo-link,.gskiptranslate,.goog-te-gadget span,.goog-te-banner-frame,#goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{
    display: none!important;
  }
  .goog-te-gadget {
    color: transparent!important;
    font-size:0px;
  }
  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }
  #google_translate_element select{
	   
          /* Adjust this value to change distance from right */
   
    color:black;
    border: none;
    font-weight:bold;
    border-radius:3px;
    padding:8px 12px
  }
    </style>
</head>
<body>
    <!-- Google Translate Element -->
    <div id="google_translate_element"></div>

  

   <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: true,
            includedLanguages: 'en,hi,gu,ur,ar,fa,ps,tg,ru',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
    }

    function readCookie(name) {
        const cookies = document.cookie.split('; ').reduce((acc, cookie) => {
            const [key, value] = cookie.split('=');
            acc[key] = value;
            return acc;
        }, {});
        return cookies[name];
    }

    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.getElementsByClassName('textTab');
        const loginBox = document.getElementsByClassName('card-log');

        function getSelectedLang() {
            const selectedOption = document.querySelector('select.goog-te-combo option:checked');
            const language = selectedOption ? selectedOption.textContent.trim() : '';

            let paddingTop = '10px';
            let loginBoxWidth = '';

            if (language === 'Tajik') {
                paddingTop = '52px';
                loginBoxWidth = '440px';
            } else if (language === 'Arabic') {
                paddingTop = '31px';
            }

            Array.from(elements).forEach(element => {
                element.style.paddingTop = paddingTop;
            });

            Array.from(loginBox).forEach(box => {
                if (loginBoxWidth) {
                    box.style.width = loginBoxWidth;
                }
            });
        }

        // Use MutationObserver to observe changes in the language selector
        function observeLanguageSelector() {
            const targetNode = document.querySelector('select.goog-te-combo');
            if (targetNode) {
                const observer = new MutationObserver(() => {
                    getSelectedLang();
                });
                observer.observe(targetNode, { childList: true, subtree: true });
            } else {
                // Retry if selector is not found
                setTimeout(observeLanguageSelector, 1000);
            }
        }

        observeLanguageSelector();

        // Update language settings after initial load
        setTimeout(() => {
            getSelectedLang(); // Calls after 5 seconds
        }, 2000);

        // Prevent any default behavior that might affect the widget
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Backspace') {
                event.preventDefault(); // Optional: prevents default behavior
                // Check if this prevents or affects widget visibility
				console.log("back")
            }
        });
    });
	   


</script>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
