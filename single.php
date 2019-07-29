<?php get_header(); ?>
<div id="primary" class="content-area container">
    <main id="main" class="site-main row" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
        <?php endwhile; // end of the loop. ?>
    </main>
</div>
<?php get_footer(); ?>
