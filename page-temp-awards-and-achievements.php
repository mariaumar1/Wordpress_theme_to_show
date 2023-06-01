<?php /* Template Name: Awards and Achievements  */ ?>

<?php get_header(); ?>
<main class="main page_awards">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>
<!-- ========================== -->

    <div class="awards">
        <div class="container">

              <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'awards',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                      )
                    );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="awards_box">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-lg-2">
                                <div class="awards_img">
                                    <a href="<?php the_field('side_image_url'); ?>" target="_blank">
                                    <?php
                                        $side_image = get_field('side_image');
                                        $size = 'full';
                                        if( $side_image ) {
                                            echo wp_get_attachment_image( $side_image, $size );
                                        }
                                     ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-10">
                                <div class="awards_title">
                                    <h3><a href="<?php the_field('title_url'); ?>" target="_blank"><?php the_field('title'); ?></a> <span><?php the_field('add_date'); ?></span></h3>
                                </div>
                                <div class="awards_content">
                                    <?php the_field('content'); ?>
                                </div>
                                    <a href="<?php the_field('visit_website_url'); ?>" class="btn btn-default" target="_blank"><?php the_field('visit_website'); ?></a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();