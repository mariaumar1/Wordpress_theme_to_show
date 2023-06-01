<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<main class="main blog_page">
    <div class="container">
        <div class="content">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/page/content', 'page' );
            endwhile; // End the loop.
            ?>
       </div><!-- #primary -->
    </div><!-- .wrap -->
</main><!-- #main -->
<?php get_footer();