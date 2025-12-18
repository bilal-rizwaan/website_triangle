    <!-- Core JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/gsap/gsap.min.js"></script>
    <script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script>
    <script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <script src="assets/vendor/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script src="assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/isotope/packery-mode.pkgd.min.js"></script>
    <script src="assets/vendor/fancybox/js/fancybox.umd.js"></script>
    <script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
      var $demoGridImages = $(".tt-demo-img");

      function setThemeImages() {
        $demoGridImages.each(function() {
          var $img = $(this);
          var currentSrc = $img.attr("src");

          if ($("body").hasClass("tt-lightmode-on")) {
            var newSrc = currentSrc.replace("https://demo.themetorium.net/dark/",
              "https://demo.themetorium.net/light/").replace("-dark", "-light");
          } else {
            var newSrc = currentSrc.replace("https://demo.themetorium.net/light/",
              "https://demo.themetorium.net/dark/").replace("-light", "-dark");
          }

          if ($img.attr("src") !== newSrc) {
            $img.attr("src", newSrc);
          }
        });
      }
      setThemeImages();
      $(document).on("themeChanged", function() {
        setThemeImages();
      });
      $(".tt-style-switch").on("click", function() {
        $(document).trigger("themeChanged");
      });
    </script>
    <script>
      $(".cali_brands").slick({
        slidesToShow: 6,
        infinite: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false
      });
    </script>

    <script> 
      
    </script>
    </body>

    </html>