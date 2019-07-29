<?php wp_footer(); ?>
<footer>
	<section id="newsletter" class="newsletter" style="background-image: url('/wp-content/uploads/2019/02/newsletter-bg.jpg');">
		<h1 class="white">SUBSCRIBE TO OUR NEWSLETTER</h1>
		<!-- Begin Mailchimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
		<div id="mc_embed_signup">
			<form action="https://cjis20.us20.list-manage.com/subscribe/post?u=9c475d488eefdae5d8942cf9b&amp;id=38b010616d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="ENTER YOUR EMAIL ADDRESS" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9c475d488eefdae5d8942cf9b_38b010616d" tabindex="-1" value=""></div>
					<div class="clear">
						<input type="submit" value="SEND ME NEWSLETTERS >" name="subscribe" id="mc-embedded-subscribe" class="button">
					</div>
				</div>
			</form>
		</div>
		<!--End mc_embed_signup-->
	</section>
	<section class="menu">
		<div class="container-fluid">
			<div class="inner-container">
				<div class="row">
					<div class="col-xs-12 col-md-2">
						<div class="content">
							<img class="logo" src="/wp-content/uploads/2019/02/footer-logo.png">
						</div>
					</div>
					<div class="col-xs-6 col-md-2 box">
						<div class="content">
							<h6 class="white">ABOUT US</h6>
							<?php echo rwmb_meta('our_foot-about-us', '', 12); ?>
						</div>
						<div class="bottom-content">
							<h6 class="white">CAREERS</h6>
							<?php echo rwmb_meta('our_foot-careers', '', 12); ?>
						</div>
					</div>
					<div class="col-xs-6 col-md-2 box">
						<div class="content">
							<h6 class="white">SERVICES</h6>
							<?php echo rwmb_meta('our_foot-services', '', 12); ?>
						</div>
					</div>
					<div class="col-xs-6 col-md-2 box">
						<div class="content">
							<h6 class="white">RESOURCES</h6>
							<?php echo rwmb_meta('our_foot-resources', '', 12); ?>
						</div>
					</div>
					<div class="col-xs-6 col-md-2 box">
						<div class="content">
							<h6 class="white">MEDIA</h6>
							<?php echo rwmb_meta('our_foot-media', '', 12); ?>
						</div>
					</div>
					<div class="col-xs-12 col-md-2 box">
						<div class="content">
							<h6 class="white">COMMUNITY RELATIONS</h6>
							<?php echo rwmb_meta('our_foot-community', '', 12); ?>
						</div>
					</div>
				</div>
				<div class="bottom">
					<hr>
					<p class="white"><a href="tel:(239) 533-1000">(239) 533-1000</a> | <a href="https://www.google.com/maps/place/2000+Main+St,+Fort+Myers,+FL+33901/data=!4m2!3m1!1s0x88db41e406aa6087:0x7f5843ea26aa1f9d?ved=2ahUKEwj3qIfS-ejgAhUJ7IMKHXWuC3gQ8gEwAHoECAQQAQ" target="_blank">2000 Main St, Fort Myers, FL 33901</a> | <a href="mailto:stateattorney@sao.cjis20.org">stateattorney@sao.cjis20.org</a> |</p>
					<div class="social">
						<a href="https://www.facebook.com/SAOAmiraFox/" target="_blank"><img src="/wp-content/uploads/2019/02/facebook-logo-1.png"></a>
						<!-- <a href="https://twitter.com/SAOAmiraFox" target="_blank"><img src="/wp-content/uploads/2019/02/twitter-logo-silhouette-1.png"></a> -->
						<a href="#"><img src="/wp-content/uploads/2019/02/instagram-logo-1.png"></a>
					</div>
					<p class="copyright white"><?php echo rwmb_meta('our_foot-copyright'); ?></p>
					<p class="white">Created by <a href="https://www.curiositymg.com/" target="_blank">Curiosity</a></p>
				</div>
			</div>
		</div>
	</section>
</footer>
<!-- Adds JS for fancybox -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<!-- <script>
    AOS.init();
    // AOS.init({ disable: 'mobile' });
  </script> -->
</body>
</html>