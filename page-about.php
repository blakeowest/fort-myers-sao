<?php /* Template Name: About */ get_header(); ?>
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
                    <div class="col-xs-12 col-sm-12">
                        <?php the_content(); ?>
                    </div>
<!--					<div class="col-xs-12 col-sm-4">
                        <div class="sidebar">
                            <div class="content">
                                <img src="https://sao.pairsite.com/wp-content/uploads/2019/02/sao-headshot.png">
                                <h6 class="white">MEET YOUR STATE ATTORNEY AMIRA D. FOX</h6>
                                <a href="#"><button class="btn-white">READ BIO</button></a>
                                <div class="links">
                                    <h6 class="white">SERVICES</h6>
                                    <a class="white" href="/prosecution-units">Prosecution Units</a>
                                    <ul>
                                        <li><a href="/prosecution-units/domestic-violence" class="white">Domestic Violence</a></li>
                                        <li><a href="/prosecution-units/economic-crimes-unit" class="white">Economic Crimes Unit</a></li>
                                        <li><a href="/prosecution-units/firearm-offenses" class="white">Firearm Offenses</a></li>
                                        <li><a href="/prosecution-units/homicide-unit" class="white">Homicide Unit</a></li>
                                        <li><a href="/prosecution-units/juvenile" class="white">Juvenile</a></li>
                                        <li><a href="/prosecution-units/post-conviction-and-sexually-violent-predators-unit/" class="white">Post Conviction & Sexually Violent Predators Unit</a></li>
                                        <li><a href="/prosecution-units/special-victims-unit" class="white">Special Victims Unit</a></li>
                                    </ul>
                                    <a class="white" href="/history-of-eugene-berry-award/">History of Eugene Berry Award</a>
                                    <a class="white" href="#">News Releases</a>
                                    <a class="white" href="#">Contact Us</a>
                                    <a class="white" href="#">Offices</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>