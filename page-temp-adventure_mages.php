<?php /* Template Name: Adventure Images */ ?>

<?php get_header(); ?>
<main class="main page_adventure_images">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>
<!-- ==========page_adventure_images============= -->
    <div class="gallery_images">
        <div class="container">
            <div class="imglist" style="max-width: 1000px;">
                <div class="row no-gutters">
                    <!-- ===gallery_images=========== -->
                    <?php $images = get_field('gallery_images');
                    if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                            <div class="col-6 col-sm-3 col-md-3">
                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="images">
                                     <img src="<?php echo esc_url($image['sizes']['gallery_size_small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- =======gallery_images=============== -->
                </div>
            </div>
        </div>
    </div>
        <!-- ============================================================ -->
            <?php if( get_field('content_after') ): ?>
                  <div class="our_guides_after mg_top_30">
                     <div class="container">
                        <?php the_field('content_after'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- ============================================================ -->

<!-- ==========page_adventure_images============= -->
</main><!-- #main -->
<?php get_footer();