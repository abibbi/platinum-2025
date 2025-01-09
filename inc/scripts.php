<!--================ Jquery =================-->
    <!-- Jquery  -->
    <script src="https://www.platinumfcu.org/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://www.platinumfcu.org/js/popper.min.js"></script>
    <script src="https://www.platinumfcu.org/js/bootstrap.min.js"></script>

    <!-- Mega Menu -->
    <script src="https://www.platinumfcu.org/js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="https://www.platinumfcu.org/js/main.js"></script>
    <!-- ADD-ONS JS FILES -->
    <script src="https://www.platinumfcu.org/revolution/js/revolution.addon.particles.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="https://www.platinumfcu.org/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="https://www.platinumfcu.org/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- Custom -->
    <script src="https://www.platinumfcu.org/js/custom.js"></script>
    <script src="https://www.platinumfcu.org/remodal/dist/remodal.js"></script>
    <!-- END REVOLUTION SLIDER -->
    <script>
    var revapi30,
        tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_30_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_30_1");
        } else {
            revapi30 = tpj("#rev_slider_30_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
				navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 20,
                        space: 5,
                        tmp: ''
                    }
                },
              
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1170,
                gridheight: 600,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
    </script>