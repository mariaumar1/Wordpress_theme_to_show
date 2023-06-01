<?php /* Template Name: Our  Guides */ ?>

<?php get_header(); ?>
<main class="main our_alaska_guides">
    <div class="container">
         <?php the_title( '<h1 class="heading_with_bottom_line">', '</h1>' ); ?>
          <div class="content">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/page/contentnotitle', 'page' );
            endwhile;
            ?>
        </div>
    </div>
<!-- ================================================================== -->
<!-- ================================================================== -->
<!-- ================================================================== -->
    <div class="our_guides">
        <div class="container">
<!-- ============================================================ -->
            <?php   $row = 0; //<-- set your counter to 0
            if( have_rows('guides') ): ?>
            <?php while( have_rows('guides') ): the_row();
                    $guide_image = get_sub_field('guide_image');
                    $guide_title = get_sub_field('guide_title');
                    $guide_content = get_sub_field('guide_content');
                    $our_guides_image_size = 'our_guides_image_size'; // (thumbnail, medium, large, full or custom size)
                    ?>
                 <?php if ($row  % 2 === 0) :?>
                    <div class="guides__box">
                    <div class="row">
                        <!-- right column -->
                        <div class="col-md-3 col-sm-3">
                            <div class="our_guides_img">
                                <?php if( !empty($guide_image) ): ?>
                                    <?php echo wp_get_attachment_image( $guide_image, $our_guides_image_size ); ?>
                                <?php else: ?>
                                  <img src="<?php echo bloginfo('template_url') ?>/images/no_img.jpg" width="280" height="280" alt="no_img">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                           <div class="our_guides_content">
                                <h5><?php echo $guide_title; ?></h5>
                                <div class="our_guides_content_inner">
                                    <?php echo $guide_content; ?>
                                </div>
                            </div>
                        </div><!-- right column -->
                    </div>
                    </div>
                <?php else: ?>
                    <div class="guides__box odd_box">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-9 col-sm-9">
                           <div class="our_guides_content">
                                <h5><?php echo $guide_title; ?></h5>
                                <div class="our_guides_content_inner">
                                    <?php echo $guide_content; ?>
                                </div>
                            </div>
                        </div><!-- right column -->

                        <div class="col-md-3 col-sm-3">
                            <div class="our_guides_img">
                                <?php if( !empty($guide_image) ): ?>
                                    <?php echo wp_get_attachment_image( $guide_image, $our_guides_image_size ); ?>
                                <?php else: ?>
                                    <img src="<?php echo bloginfo('template_url') ?>/images/no_img.jpg" width="280" height="280" alt="no_img">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    </div>
            <?php endif; ?>
            <?php  $row++;  endwhile; ?>
            <?php endif; ?>
            <!-- ============================================================ -->
            <?php if( get_field('add_content_after') ): ?>
                  <div class="our_guides_after">
                    <?php the_field('add_content_after'); ?>
                </div>
            <?php endif; ?>
            <!-- ============================================================ -->
        </div>
    </div>
    <!-- ================================================================== -->
    <!-- ================================================================== -->
    <!-- ================================================================== -->

</main><!-- #main -->
<?php get_footer();