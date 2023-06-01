<?php /* Template Name: Press */ ?>

<?php get_header(); ?>
<main class="main page_press">
    <div class="press">
        <div class="container">
            <h1 class="heading_with_bottom_line"><?php the_title(); ?></h1>
            <?php if( have_rows('latest_news') ): ?>

                <?php while( have_rows('latest_news') ) : the_row(); ?>
                    <div class="press__box">
                    <div class="row press-row">
                <div class="col-md-3 col-lg-2">
                    <div class="press-image">
                        
                        <?php $presslink = get_sub_field('press_link');
                            if( $presslink ): 
                                $link_url = $presslink['url'];
                                $link_title = $presslink['title'];
                                $link_target = $presslink['target'] ? $presslink['target'] : '_self';
                                ?>
                                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
<?php /*
                                    <?php $pressimage = get_sub_field('press_image');
                                    if( !empty( $pressimage ) ): ?>
                                        <img src="<?php echo esc_url($pressimage['url']); ?>" alt="<?php echo esc_attr($pressimage['alt']); ?>" />
                                    <?php endif; ?>
 */?>
                                    <?php
                                    $press_image = get_sub_field('press_image');
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if( $press_image ) {
                                    echo wp_get_attachment_image( $press_image, $size );
                                    }
                                    ?>

                                </a>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="col-md-9 col-lg-10">
                    <div class="press-detail">
                        <div class="link-name">
                            <?php $presslink = get_sub_field('press_link');
                                if( $presslink ): 
                                    $link_url = $presslink['url'];
                                    $link_title = $presslink['title'];
                                    $link_target = $presslink['target'] ? $presslink['target'] : '_self';
                                    ?>
                                    <h4><a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h4>
                            <?php endif; ?> 
                        </div>
                        <div class="press-date">
                            <em><?php the_sub_field('press_date'); ?></em>
                        </div>  
                        <div class="press-description">
                            <?php the_sub_field('press_description'); ?>
                        </div>
                        <?php $pressrelatedtour = get_sub_field('press_related_tour');
                                if( $pressrelatedtour ): ?>
                        <div class="press-related-tours">
                            <?php $link_url = $pressrelatedtour['url'];
                                  $link_title = $pressrelatedtour['title'];
                                  $link_target = $pressrelatedtour['target'] ? $pressrelatedtour['target'] : '_self';
                                  ?>
                                <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                        <?php endif; ?>              
                    </div>
                </div>
                </div>
                </div>
                <?php endwhile; ?>

            <?php endif; ?> 
        </div>
    </div>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();