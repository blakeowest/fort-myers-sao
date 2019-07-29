<?php /* Template Name: Assistant Attorney */ get_header(); ?>
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
                    <div class="col-xs-12 col-md-4 col-md-push-8 interview-dates">
                        <div class="content">
                            <p class="white"><?php echo rwmb_meta('our_asa-interview-dates'); ?></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-md-pull-4">
                        <?php the_content(); ?>
                        <!-- <div id="accordion" class="panel-group" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <a role="button" href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                    <div id="headingOne" class="panel-heading" role="tab">
                                        <h6 class="panel-title">Florida Retirement System (FRS)</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>All employees have two choices of retirement plans: The FRS Pension Plan and the FRS Investment Plan. Your employer contributes the majority of your FRS retirement plan savings. A mandatory 3% pretax contribution is directed form you paycheck into you retirement account. For additional information on these great plans visit the Florida Retirement System website at MyFRS.com. New FRS members enrolling in the pension plan qualify for a benefit after 8 years of services; those enrolling in the Investment Plan qualify for a benefit after 1 year.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" role="button" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">
                                    <div id="headingTwo" class="panel-heading" role="tab">
                                        <h5 class="panel-title">Transfer of Unused Sick Leave Within State Government</h5>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>An employee who moves from one position in state government to another position in state government, may be credited by the receiving agency with all unused sick leave not paid. An employee who resigns from a city of county governmental authority within 31 calendar day, may, at the discretion of the State Attorney, be credited with up to a maximum of 480 hours of unused sick leave that was accrued while employed by the other organization.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" role="button" href="#collapseThree" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree">
                                    <div id="headingThree" class="panel-heading" role="tab">
                                        <h5 class="panel-title">Annual Leave</h5>
                                    </div>
                                </a>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>All full-time employees who are filling established positions shall earn annual leave as shown:</p>
                                        <div class="col-xs-6"><p>Creditable Service</p></div>
                                        <div class="col-xs-6"><p>Hours Per Month</p></div>
                                        <div class="col-xs-6"><p>0-3 years</p></div>
                                        <div class="col-xs-6"><p>8 hours = 12 days per year</p></div>
                                        <div class="col-xs-6"><p>Years 4 and 5</p></div>
                                        <div class="col-xs-6"><p>10 hours = 15 days per year</p></div>
                                        <div class="col-xs-6"><p>Years 6, 7, and 8</p></div>
                                        <div class="col-xs-6"><p>13.25 hours = 20 days per year</p></div>
                                        <div class="col-xs-6"><p>9 years and over</p></div>
                                        <div class="col-xs-6"><p>20 hours = 30 days per year</p></div>
                                        <p>Annual leave balances may not exceed 240 as of January 1st of each new year. A departing employee will be compensated for their accrued leave not to exceed 240 hours. Also, one day (8 hours) of annual leave will be granted to each employee per year in recognition of his/her anniversary date of employment. This Personal Day is earned on July 1st of each year and must be used by June 30th of the following year.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a class="collapsed" role="button" href="#collapseFour" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFour">
                                    <div id="headingFour" class="panel-heading" role="tab">
                                        <h5 class="panel-title">Sick Leave</h5>
                                    </div>
                                </a>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>All full-time employees shall be credited with one day (8 hours) per month of sick leave, equaling 12 days per year. Part-time employees will earn leave time on a pro-rated basis according to numbers of hours worked. After ten years of service, a departing employee will be compensated for 25% of their accrued sick leave, not to exceed 480 hours.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tab-container">
                            <div class="tabs">
                                <p data-tab="requirements">Requirements</p>
                                <p data-tab="apply">How to Apply</p>
                                <p data-tab="interview">Interview & Hiring Process</p>
                            </div>
                            <div class="tab-text">
                                <div data-tab="requirements">
                                    <?php echo rwmb_meta('our_asa-requirements'); ?>
                                </div>
                                <div data-tab="apply">
                                    <?php echo rwmb_meta('our_asa-apply'); ?>
                                </div>
                                <div data-tab="interview">
                                    <?php echo rwmb_meta('our_asa-interview'); ?>
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
                        <?php echo rwmb_meta('our_asa-interview-dates'); ?>
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