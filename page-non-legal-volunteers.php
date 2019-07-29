<?php /* Template Name: Non Legal Volunteers */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
    <section style="background-image: url(https://sao.pairsite.com/wp-content/uploads/2019/02/inner_page_bg.jpg);" class="container-fluid innerhero-section">
		<div class="row ih-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" >
                        <h2 style="color: white; text-align: left;"><?php echo the_title(); ?></h2>
                    </div>
                </div>
            </div>
		</div>
	</section>
    <section class="container-fluid innerpage-section">
        <div class="row">
            <div class="container">
                <div class="row is-1">
                    <div class="col-xs-12">
                        <?php the_content(); ?>
                        <div class="tab-container">
                            <div class="tabs">
                                <p data-tab="requirements">Requirements</p>
                                <p data-tab="apply">How to Apply</p>
                            </div>
                            <div class="tab-text">
                                <div data-tab="requirements">
                                    <?php echo rwmb_meta('our_nlv-requirements'); ?>
                                </div>
                                <div data-tab="apply">
                                    <?php echo rwmb_meta('our_nlv-apply'); ?>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                          jQuery(document).ready(function ($) {
                            $('.tab-container .tabs p:first-of-type').addClass('selected');
                            $('.tab-container .tabs p').on('click', function (e) {
                              //Variables
                              var a = $(this).data('tab');
                              $(this).addClass('selected').siblings('p').removeClass('selected');
                              $('.tab-container .tab-text div').each(function () {
                                var b = $(this).data('tab');
                                if (a == b) {
                                  $(this).show().siblings().hide();
                                }
                              });
                            });
                          });
                        </script>
                    </div>
					<!-- <div class="col-xs-12 col-sm-4">
                        <div class="sidebar">
                            <div class="content">
                                <img src="https://sao.pairsite.com/wp-content/uploads/2019/02/sao-headshot.png">
                                <h6 class="white">MEET YOUR STATE ATTORNEY AMIRA D. FOX</h6>
                                <a href="#"><button class="btn-white">READ BIO</button></a>
                                <div class="links">
                                    <h6 class="white">MEDIA</h6>
                                    <a class="white" href="/law-students/">Law Students</a>
                                    <a class="white" href="/careers/">Careers</a>
                                    <ul>
                                        <li><a href="/careers/assistant-state-attorney/" class="white">Assistant State Attorney</a></li>
                                        <li><a href="/careers/investigators/" class="white">Investigators</a></li>
                                        <li><a href="/careers/volunteers/" class="white">Non-Legal Volunteers</a></li>
                                        <li><a href="/careers/support-staff/" class="white">Support Staff</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>