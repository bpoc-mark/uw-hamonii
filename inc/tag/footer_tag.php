<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/saiiku/js/jquery.matchHeight-min.js"></script>
<script src="/saiiku/js/polyfill.js"></script>
<script src="/saiiku/js/smooth-scroll.polyfills.min.js"></script>
<script src="/saiiku/js/lazysizes.min.js"></script>
<script src="/saiiku/js/common.js"></script>
<script>
  $(window).on("load", function() {
    let scroll = new SmoothScroll('a[href*="#"]', {
      header: "header",
      speedAsDuration: true,
      speed: 650,
      easing: 'easeInOutQuint',
    });
  });

  $('.fot_top nav li').matchHeight();
</script>
