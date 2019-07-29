<?php /* Template Name: Victim Worthless Check */ get_header(); ?>
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
                        <div id="accordion" class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <a role="button" href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                    <div id="headingOne" class="panel-heading" role="tab">
                                        <h6 class="panel-title"><?php echo rwmb_meta('our_wc-accordion1-title'); ?></h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <?php echo rwmb_meta('our_wc-accordion1-text'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">
                                    <div id="headingTwo" class="panel-heading" role="tab">
                                        <h5 class="panel-title"><?php echo rwmb_meta('our_wc-accordion2-title'); ?></h5>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <?php echo rwmb_meta('our_wc-accordion2-text'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- <div class="col-xs-12 col-sm-4">
                        <div class="sidebar">
                            <div class="content">
                                <img src="https://sao.pairsite.com/wp-content/uploads/2019/02/sao-headshot.png">
                                <h6 class="white">MEET YOUR STATE ATTORNEY AMIRA D. FOX</h6>
                                <a href="#"><button class="btn-white">READ BIO</button></a>
                                <div class="links">
                                    <h6 class="white">SERVICES</h6>
                                    <a class="white" href="/victim-witness-services/">Victim & Witness Services</a>
                                    <ul>
                                        <li><a href="/victim-witness-services/agency-contact-for-victims/" class="white">Agency Contact for Victims</a></li>
                                        <li><a href="/victim-witness-services/witness-coordination/" class="white">Witness Coordination</a></li>
                                        <li><a href="/victim-witness-services/victim-witness-rights/" class="white">Victim & Witness Rights</a></li>
                                        <li><a href="/victim-witness-services/worthless-check-restitution-program-for-victims/" class="white">Worthless Check Restitution Program for Victims</a></li>
                                        <li><a href="/victim-witness-services/survey/" class="white">Victim Services Survey</a></li>
                                        <li><a href="/victim-witness-services/encuesta-de-victimas/" class="white">Encuesta de Victimas</a></li>
                                    </ul>
                                    <a class="white" href="/worthless-checks">Worthless Checks</a>
                                    <ul>
                                        <li><a href="/worthless-checks/worthless-check-program-victims/" class="white">Worthless Check Program for Victims</a></li>
                                        <li><a href="/worthless-checks/worthless-check-education-course/" class="white">Worthless Check Education Course</a></li>
                                    </ul>
                                    <a class="white" href="/discovery-exchange/">Discovery Exchange</a>
                                    <ul>
                                        <li><a href="/discovery-exchange/e-mail-service-of-court-documents-guidelines/" class="white">E-Mail Service of Court Documents Guidelines</a></li>
                                        <li><a href="/discovery-exchange/evidence-com-discovery-exchange/" class="white">Evidence.com Discovery Exchange</a></li>
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