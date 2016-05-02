<!-- ============================================================================|
**** Footer Module [2 of 2]                                                      |
****                                                                             |
**** includes/footer_awards.php                                                  |
**** Modified: 24 April 2016                                                     |
**** ============================================================================|
****                                                                |            |
**** Table of Contents (CTRL + F [object_name])                     |   Line #   |
****                                                                |            |
**** [FULL CONTAINER]                                               |       26   |
**** - [CONTAINER]                                                  |       28   |
**** - - [H3] Awards & Affiliates                                   |       31   |
**** - - [COL XS 2] images of awards (x6)                           |       34   |
**** [FULL CONTAINER]                                               |       68   |
**** - [CONTAINER]                                                  |       70   |
**** - - [COL MD 6] social media icons and links                    |       73   |
**** - - [COL MD 6] copyright and attribution                       |       83   |
**** [SCRIPTS]                                                      |       96   |
**** [END BODY]                                                     |      102   |
**** [END HTML]                                                     |      103   |
****                                                                |            |
**** ============================================================================|
-->


<!-- [FULL CONTAINER] -->
<div class="container-fluid awards-bg">
  <!-- [CONTAINER] -->
    <div class="container awards-container">

      <!-- [H3] -->
        <h3 class="awards-title">Awards <span class="reg-weight"> & </span>Affiliates</h3>

        <!-- [COL XS 2] Simply the Best -->
        <div class="award-icons">
            <img class="img-responsive" src="images/award-simplythebest2.png" title="Voted 2014 Mukwonago Area's 'Simply the Best' Landscape and Lawn Maintenance Company">
            <img class="img-responsive icon-margin" src="images/award-muk2.png" title="Mukwonago Area Chamber of Commerce & Tourism Center">
            <img class="img-responsive icon-margin" src="images/award-mastergardener2.png" title="UW-Extension Master Gardener Program">
            <img class="img-responsive icon-margin" src="images/award-pat.png" title="UW-Extension Pesticide Applicator Training Program">
            <img class="img-responsive icon-margin" src="images/award-waa2.png" title="Wisconsin Arborist Association">
            <img class="img-responsive wlca-fix icon-margin" src="images/award-wlca2.png" title="Wisconsin Landscape Contractors Association">
            <img class="img-responsive" src="images/isa_logo.svg" title="International Society of Arboriculture">        
        </div>
    </div> <!--/ end of [CONTAINER] -->
</div> <!--/ end of [FULL CONTAINER] -->


<!-- [FULL CONTAINER] -->
<div class="container-fluid footer2">
	<!-- [CONTAINER] -->
	<div class="container">

		<!-- [COL MD 6] social media -->
		<div class="col-md-6 footer-text-left footer-mobile-center">
			<p class=" footer-social-links">
				<!-- facebook -->
				<a href="https://www.facebook.com/pages/Your-Personal-Gardener-LLC/114144462115014" target="_blank" title="Like YPG on Facebook"><span class="icon-facebook icons"></span></a>
				<!-- google+ -->
				<a href="https://plus.google.com/108042060288189957057/about" target="_blank" title="Visit YPG on Google+"><span class="icon-googleplus icons"></span></a>
			</p>
		</div> <!-- end of [COL MD 6] -->

		<!-- [COL MD 6] copyright and attribution -->
		<div class="col-md-6 footer-text-right">
			<!-- copyright -->
			<p>&copy; 2016 Your Personal Gardener, LLC.  All rights reserved.</p>
			<!-- attribution -->
			<p>A <a href="http://tom-egan.com/" title="Check out more work done by Wisconsin freelancer Tom Egan" target="_blank">Tom Egan Interactive</a> Website.</p>
		</div> <!-- end of [COL MD 6] -->

	</div> <!-- end of [CONTAINER] -->
</div> <!-- end of [FULL CONTAINER] -->

	<!-- [SCRIPTS] -->
    <!-- Import jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Import Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Testimonial Slider -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- Ideal Slider: Main -->
    <script src="js/ideal_slider/ideal-image-slider.js"></script>
    <!-- Ideal Slider: Bullets -->
    <script src="js/ideal_slider/iis-bullet-nav.js"></script>
    <!-- Ideal Slider: Captions -->
    <script src="js/ideal_slider/iis-captions.js"></script>
    <!-- Ideal Slider: Initialization-->
    <script>
      var slider = new IdealImageSlider.Slider('#slider');
        slider.addCaptions();
        slider.addBulletNav();
        slider.start();
    </script>
    <!-- Testimonial Slider: Initialization-->
    <script type="text/javascript">
    $('.testimonials-slider').bxSlider({
           slideWidth: 1150,
           minSlides: 1,
           maxSlides: 1,
           slideMargin: 112,
           auto: true,
         });
    </script>
</body>
</html>