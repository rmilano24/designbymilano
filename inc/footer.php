<!-- FOOTER -->
<footer id="footer-container">


  <div class="col-sm-12 cta">

    <!-- <a href="contact">Start Your Project</a> -->

    <a class="link link--takiri" href="contact">Start Your Project</a>

  </div>


<div id="footer-bottom">

<div class="container">
  <div class="row">
    <div class="col-sm-7">

      <div class="contact-info">

        <ul>
          <li>&copy; 2016 Milano Design</li>
          <li><a href="tel:18312396605">831-239-6605</a></li>
          <li>805 Rosedale Ave. Capitola, CA 95010</li>
          <li><a href="contact">Contact</a></li>
        </ul>


      </div><!-- widget-text -->

    </div><!-- col -->

    <div class="col-sm-5">

      <div class="branding">

        <a href="/"><img width="60" height="69" src="assets/images/milano-light.png" alt="Creative Branding Agency in Santa Cruz"></a>

      </div><!-- widget-pages -->

    </div><!-- col -->
  </div><!-- row -->
</div><!-- container -->

</div><!-- footer-bottom -->

</footer><!-- FOOTER -->

</div><!-- MAIN CONTAINER -->
<div class="overlay overlay-cornershape" data-path-to="m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
				<path class="overlay-path" d="m 0,0 1439.999975,0 0,805.99999 0,-805.99999 z"/>
			</svg>
			<!-- <button type="button" class="overlay-close">Close</button> -->
			<nav>
				<ul>
          <li><a href="work">work</a></li>
          <li><a href="about">about</a></li>
          <li><a href="capabilities">capabilities</a></li>
          <!-- <li><a href="digest.php">digest</a></li> -->
          <li><a href="contact">Contact</a></li>
				</ul>
			</nav>
		</div>


<!-- jQUERY -->
<script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- VIEWPORT -->
<script src="assets/plugins/viewport/jquery.viewport.js"></script>

<!-- MENU -->
<script src="assets/plugins/menu/hoverIntent.js"></script>
<script src="assets/plugins/menu/superfish.js"></script>

<!-- FANCYBOX -->
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script>

<!-- REVOLUTION SLIDER -->
<script src="assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js"></script>

<!-- OWL Carousel -->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- PARALLAX -->
<script src="assets/plugins/parallax/jquery.stellar.min.js"></script>

<!-- ISOTOPE -->
<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- PLACEHOLDER -->
<script src="assets/plugins/placeholders/jquery.placeholder.min.js"></script>

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="assets/plugins/validate/jquery.validate.min.js"></script>
<script src="assets/plugins/submit/jquery.form.min.js"></script>

<!-- GOOGLE MAPS -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/plugins/googlemaps/gmap3.min.js"></script>

<!-- CHARTS -->
<script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>

<!-- COUNTER -->
<script src="assets/plugins/counter/jQuerySimpleCounter.js"></script>

<!-- YOUTUBE PLAYER -->
<script src="assets/plugins/ytplayer/jquery.mb.YTPlayer.min.js"></script>

<!-- INSTAFEED -->
<script src="assets/plugins/instafeed/instafeed.min.js"></script>

<!-- NOUISLIDER -->
<script src="assets/plugins/nouislider/nouislider.min.js"></script>

<!-- ANIMATIONS -->
<script src="assets/plugins/animations/wow.min.js"></script>

<!-- COUNTDOWN -->
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>
<?php if($is_homepage) { ?>
<script src="assets/js/covervid.min.js"></script>
<?php } ?>
<script src="assets/js/scripts.js"></script>

<script src="assets/js/classie.js"></script>
<script src="assets/js/demo9.js"></script>

<!-- Call CoverVid -->
<script type="text/javascript">
// If using jQuery
// $('.masthead-video').coverVid(1920, 1080);
// If not using jQuery (Native Javascript)
coverVid(document.querySelector('.masthead-video'), 640, 360);
</script>

<script>

  var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

  var hamburgers = document.querySelectorAll(".hamburger");
  if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
      hamburger.addEventListener("click", function() {
        this.classList.toggle("is-active");
      }, false);
    });
  }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85148383-1', 'auto');
  ga('send', 'pageview');

</script>



</body>

</html>
