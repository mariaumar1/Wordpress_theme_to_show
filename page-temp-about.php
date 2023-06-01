<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<main class="main page_with_Tabs">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/contentnotitle', 'page' );
        endwhile;
        ?>
    </div>
</main><!-- #main -->
<?php get_footer();