<?php /* Template Name: Law Students */ get_header(); ?>
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
                    <div class="col-xs-12 col-sm-8">
                        <?php the_content(); ?>
                        <h5>Certified Legal Interns (CLIs)</h5>
                        <div class="tab-container">
                            <div class="tabs">
                                <p data-tab="interns">Certified Legal Interns</p>
                                <p data-tab="requirements">Requirements</p>
                                <p data-tab="apply">How to Apply</p>
                            </div>
                            <div class="tab-text">
                                <div data-tab="interns">
                                    <?php echo rwmb_meta('our_cli-text'); ?>
                                </div>
                                <div data-tab="requirements">
                                    <?php echo rwmb_meta('our_clir-requirements'); ?>
                                </div>
                                <div data-tab="apply">
                                    <?php echo rwmb_meta('our_clir-apply'); ?>
                                </div>
                            </div>
                        </div>
                        <h5>All Other Interns and Externs</h5>
                        <div class="tab-container">
                            <div class="tabs">
                                <p data-tab="requirements2">Requirements</p>
                                <p data-tab="apply2">How to Apply</p>
                            </div>
                            <div class="tab-text">
                                <div data-tab="requirements2">
                                    <?php echo rwmb_meta('our_externs-requirements'); ?>
                                </div>
                                <div data-tab="apply2">
                                    <?php echo rwmb_meta('our_externs-apply'); ?>
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
					<div class="col-xs-12 col-sm-4">
                        <div class="law-side">
                            <div class="part1">
                                <div class="content">
                                    <?php echo rwmb_meta('our_law-sb-p1'); ?>
                                </div>
                            </div>
                            <div class="part2">
                                <div class="content">
                                    <?php echo rwmb_meta('our_law-sb-p2'); ?>
                                </div>
                            </div>
                            <div class="part3">
                                <div class="content">
                                    <?php echo rwmb_meta('our_law-sb-p3'); ?>
                                </div>
                            </div>
                            <div class="part4">
                                <div class="content">
                                    <?php echo rwmb_meta('our_law-sb-p4'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>