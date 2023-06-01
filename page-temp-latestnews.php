<?php /* Template Name: News */ ?>

<?php get_header(); ?>
<main class="main page_with_news">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
<!-- ==========page_news============= -->
        <div class="page_news">
            <?php if( have_rows('add_news') ): ?>
                <?php while( have_rows('add_news') ): the_row();
                    $news_add_title = get_sub_field('add_title');
                    $news_add_title_url = get_sub_field('add_title_url');
                    $news_add_news_content = get_sub_field('add_news_content');
                    $url_target_window = get_sub_field('url_target_window');
                    ?>
                    <div class="page_news_box">
                        <h2 class="h5">
                            <a href="<?php echo $news_add_title_url; ?>" target="<?php echo $url_target_window; ?>"  >
                            <?php echo $news_add_title; ?></a></h2>
                        <div class="page_news_box_content">
                            <?php echo $news_add_news_content; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
<!-- ==========page_news============= -->
    </div>
</main><!-- #main -->
<?php get_footer();