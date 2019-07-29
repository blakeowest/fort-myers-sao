<?php /* Template Name: Resources */ get_header(); ?>
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
                                    <h6 class="white">RESOURCES</h6>
                                    <a class="white" href="/diversion-programs/">Diversion Programs</a>
                                    <ul>
                                        <li><a href="/diversion-programs/underage-drinking/" class="white">Underage Drinking Diversion Program</a></li>
                                        <li><a href="/worthless-checks/worthless-check-education-course/" class="white">Worthless Check Diversion Program</a></li>
                                    </ul>
                                    <a class="white" href="https://www.cjis20.org/cjis/" target="_blank">CJIS</a>
                                    <a class="white" href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000006-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dsTwwfoVV6synGnboq60iBuM4Vn6cKLuOjJtVu_p_pQsAEIp7MsCNk_IRfkO6DcIT4rqV-iyMvFguLxTbGhv94wKzc_PcBV6WJhK1M5ldleMnS00cZpZ-FPMKfheoTiH7V7z5DAS782EiF3loAcsxPh3Vqm9lWQqWyvKz977VvxE&nonce=636849859531116911.ODlkZjRiZjgtM2U0ZC00ZDc5LWE0MTUtMWFkNjFmMzg0OGYzYTE1ZmI5NDItZjJiYi00NzRjLTgzZmEtNWE4YzU2NTVlNDZh&redirect_uri=https%3a%2f%2fportal.office.com%2flanding&ui_locales=en-US&mkt=en-US&client-request-id=8f438d72-471c-4e9c-bd09-bb605bf1ead6&sso_reload=true" target="_blank">Webmail</a>
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