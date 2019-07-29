<?php /* Template Name: Events */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
</div>
    <section style="background-image: url(https://sao.pairsite.com/wp-content/uploads/2019/02/inner_page_bg.jpg);" class="container-fluid innerhero-section">
		<div class="row ih-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" >
                        <h1 style="color: white; text-align: left;"
                            ><?php echo the_title(); ?></h1>
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
                        <?php
                        //Post loop
                        $args = array (
                            'post_type' => array( 'event' ),
                            'posts_per_page' => 999,
                            'orderby' => 'date',
                            'order' => 'DESC',
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
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>