<?php /* Template Name: Home */ get_header(); ?>
<section class="slider-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-lg-7 box no-padding">
				<script type="text/javascript">
					jQuery(document).ready(function () {
						$('.slider').slick({
							infinite: true,
							speed: 700,
							autoplaySpeed: 8000,
							cssEase: 'linear',
							autoplay: true,
							arrows: false,
							dots: true,
							fade: true,
						});
					});
				</script>
				<div class="slider">
					<?php
					$items = rwmb_meta('our_hp-slider');
					if ( !empty( $items ) ) {
					  foreach ( $items as $item ) {
					    $image_items = isset( $item['our_hp-slide-image'] ) ? $item['our_hp-slide-image'] : array();
					    foreach ( $image_items as $image_item ) {
					      $image = RWMB_Image_Field::file_info( $image_item, array() );
					      echo '<img src="'. $image['full_url'] .'" />';
					    }
					  }
					}
					?>
				</div>
				<div class="bg">
					<div class="content">
						<!-- <div class="social">
							<a href="#"><img src="/wp-content/uploads/2019/03/instagram-logo.png"></a>
							<a href="https://www.facebook.com/SAOAmiraFox/" target="_blank"><img src="/wp-content/uploads/2019/03/facebook-logo.png"></a>
							<a href="https://twitter.com/SAOAmiraFox" target="_blank"><img src="/wp-content/uploads/2019/02/twitter-logo-silhouette.png"></a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-lg-5 box no-padding right">
				<div class="inner-container">
					<div class="intro">
						<img src="/wp-content/uploads/2019/02/sao-headshot.png">
						<div class="text">
							<h5 class="white">MEET YOUR STATE ATTORNEY AMIRA D. FOX</h5>
							<a href="/amira-d-fox"><button class="btn-white">READ BIO ></button></a>
						</div>
					</div>
					<div class="services">
						<h5 class="white">QUICK LINKS</h5>
						<div class="icons">
							<div class="single icon-1">
								<a href="<?php echo rwmb_meta('our_ql-t1-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/victim-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t1-title'); ?></h6>
							</div>
							<div class="single icon-2">
								<a href="<?php echo rwmb_meta('our_ql-t2-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/marsys-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t2-title'); ?></h6>
							</div>
							<div class="single icon-3">
								<a href="<?php echo rwmb_meta('our_ql-t3-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/domestic-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t3-title'); ?></h6>
							</div>
							<div class="single icon-4">
								<a href="<?php echo rwmb_meta('our_ql-t4-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/public-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t4-title'); ?></h6>
							</div>
							<div class="single icon-5">
								<a href="<?php echo rwmb_meta('our_ql-t5-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/economic-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t5-title'); ?></h6>
							</div>
							<div class="single icon-6">
								<a href="<?php echo rwmb_meta('our_ql-t6-url'); ?>"></a>
								<img src="/wp-content/uploads/2019/02/speical-icon.png">
								<h6 class="white"><?php echo rwmb_meta('our_ql-t6-title'); ?></h6>
							</div>
						</div>
						<h2 class="white wow fadeInLeft animated" data-wow-offset="175"><?php echo rwmb_meta('our_hp-slide-text'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-2" style="background-image: url('/wp-content/uploads/2019/02/news-bg.jpg');">
	<div class="container-fluid">
		<div class="inner-container">
			<h1 class="aligncenter">NEWS & RELEASES</h1>
			<div class="row">
				<?php
				//Post loop
				$args = array (
					'post_type' => array( 'news-releases' ),
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$query = new WP_Query($args);
				if ($query->have_posts() ) :
					while ($query->have_posts() ) : $query->the_post();
						?>
						<div class="col-xs-12 col-sm-6 col-md-3 box">
							<div class="content">
								<a href="<?php echo get_the_permalink(); ?>"><img src="/wp-content/uploads/2019/02/news-img.jpg"></a>
								<a href="<?php echo get_the_permalink(); ?>"><h5 class="red"><?php echo the_title(); ?></h5></a>
								<p><?php echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 20 ) ); ?><a href="<?php echo get_the_permalink(); ?>">Read More ></a></p>
							</div>
						</div>
						<?php
				// End Loop
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<a href="/news-releases"><button class="btn-red">SEE ALL NEWS & RELEASES ></button></a>
		</div>
	</div>
</section>
<section class="section-3">
	<div class="container-fluid">
		<div class="inner-container">
			<div class="row">
				<div class="col-xs-12 left">
					<div class="content">
						<h1>UPCOMING EVENTS</h1>
						<?php
						//Post loop
						$args = array (
							'post_type' => array( 'event' ),
							'posts_per_page' => 4,
							'orderby'   => 'meta_value_num',
							'meta_key'  => 'our_event-date',
							'order' => 'ASC',
						);
						$query = new WP_Query($args);
						if ($query->have_posts() ) :
							while ($query->have_posts() ) : $query->the_post();
								?>
								<div class="single">
									<div class="date">
										<h5 class="white"><?php rwmb_the_value( 'our_event-date', array( 'format' => 'M' ) ); ?></h5>
										<h4 class="white"><?php rwmb_the_value( 'our_event-date', array( 'format' => 'd' ) ); ?></h4>
									</div>
									<div class="text">
										<a href="<?php echo get_the_permalink(); ?>"><h6><?php echo the_title(); ?></h6></a>
										<p><?php echo rwmb_meta('our_event-sd'); ?></p>
									</div>
								</div>
								<?php
						// End Loop
							endwhile;
						endif;
						wp_reset_postdata();
						?>
						<a href="/events"><button class="btn-red">SEE ALL UPCOMING EVENTS ></button></a>
					</div>
				</div>
				<!-- <div class="col-xs-12 col-md-5 right">
					<div class="content">
						<h2>ON TWITTER</h2>
						<?php echo do_shortcode('[custom-twitter-feeds]'); ?>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<section id="officeLocations" class="section-4">
	<div class="inner-container">
		<h1>OFFICE LOCATIONS</h1>
		<div class="locations">
			<div class="single">
				<div class="content">
					<?php $images = rwmb_meta( 'our_hp-office1-img' ); foreach ( $images as $image ) { ?><img src="<?php echo $image['url']; ?>"><?php } ?>
					<?php echo rwmb_meta('our_hp-office1-text'); ?>
				</div>
			</div>
			<div class="single">
				<div class="content">
					<?php $images = rwmb_meta( 'our_hp-office2-img' ); foreach ( $images as $image ) { ?><img src="<?php echo $image['url']; ?>"><?php } ?>
					<?php echo rwmb_meta('our_hp-office2-text'); ?>
				</div>
			</div>
			<div class="single">
				<div class="content">
					<?php $images = rwmb_meta( 'our_hp-office3-img' ); foreach ( $images as $image ) { ?><img src="<?php echo $image['url']; ?>"><?php } ?>
					<?php echo rwmb_meta('our_hp-office3-text'); ?>
				</div>
			</div>
			<div class="single">
				<div class="content">
					<?php $images = rwmb_meta( 'our_hp-office4-img' ); foreach ( $images as $image ) { ?><img src="<?php echo $image['url']; ?>"><?php } ?>
					<?php echo rwmb_meta('our_hp-office4-text'); ?>
				</div>
			</div>
			<div class="single">
				<div class="content">
					<?php $images = rwmb_meta( 'our_hp-office5-img' ); foreach ( $images as $image ) { ?><img src="<?php echo $image['url']; ?>"><?php } ?>
					<?php echo rwmb_meta('our_hp-office5-text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>