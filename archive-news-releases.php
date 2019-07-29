<?php get_header(); ?>
<div class="container">
    <div class="row r1">
        <div class="col-xs-12">
            <h1 class="aligncenter">NEWS & RELEASES</h1>
        </div>
    </div>
    <div class="row r2">
        <?php
        //Post loop
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array (
            'post_type' => array( 'news-releases' ),
            'posts_per_page' => 12,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
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
        <?php if (function_exists("pagination")) {
            pagination($query->max_num_pages);
        } 
        ?>
    </div>
</div>
<?php get_footer(); ?>