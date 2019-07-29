<?php /* Template Name: Services */ get_header(); ?>
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