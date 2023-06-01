<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */


get_header(); ?>
   <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php /*

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		*/ ?>
	</main><!-- #main -->
</div><!-- #primary -->
  <main class="main">
        <section class="how_big">
            <div class="container-fluid">
                <h1 class="text-center"><?php the_field('how_big_title'); ?></h1>
                <div class="row how_big_row">
                    <div class="col-md-6">
<!-- =============================== -->
<!-- =============================== -->
<!-- =============================== -->
                        <div id="hotspotImg" class="hotspotImg responsive-hotspot-wrap row">

                            <img src="<?php echo bloginfo('template_url') ?>/images/home_img_pointss.png" class="img-responsive" alt="home_img_points"  width="1033" height="702">

                            <!-- =============================== -->
                            <?php if( have_rows('add_point_on_map') ): ?>
                                <?php while( have_rows('add_point_on_map') ): the_row();
                                    $point_icon = get_sub_field('point_icon');
                                    $point_on_map_xaxis = get_sub_field('point_on_map_xaxis');
                                    $point_on_map_yaxis = get_sub_field('point_on_map_yaxis');
                                    $name_of_point = get_sub_field('name_of_point');
                                    $tooltip_image = get_sub_field('tooltip_image');
                                    ?>
                                    <div class="hot-spot" x="<?php echo $point_on_map_xaxis; ?>" y="<?php echo $point_on_map_yaxis; ?>">
                                        <div class="circle innerCrucial">
                                            <span class="place_bag">
                                                <?php echo wp_get_attachment_image( $point_icon, 'map_bag_img_size' ); ?>
                                            </span>
                                        </div>
                                        <span class="place_name">
                                            <?php echo $name_of_point; ?>
                                        </span>
                                        <div class="tooltip">
                                            <div class="text-row">
                                                <?php echo wp_get_attachment_image( $tooltip_image, 'map_hover_img_size' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <!-- =============================== -->
<div class="hotspotImg_moto">
    <h6>Alaska’s motto is “North to the Future”</h6>
</div>
                        </div>
<!-- =============================== -->
<!-- =============================== -->
<!-- =============================== -->
                        <!-- ================================================================ -->
                        <div class="how_big__left">

                            <?php $howbigimage = get_field('how_big_left_section');
                                if( !empty( $howbigimage ) ): ?>
                                <img src="<?php echo esc_url($howbigimage['url']); ?>" alt="<?php echo esc_attr($howbigimage['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="how_big__right">
                            <div class="row">
                                 <!-- ====================================== -->
                                <div class="col-md-6">
                                    <!-- =========left_section_images_list============================= -->
                                    <div class="left_section_images_list">
                                        <ul class="images_list">
                                            <?php if( have_rows('left_section_images_list') ): ?>
                                                <?php while( have_rows('left_section_images_list') ): the_row();
                                                    $add_image = get_sub_field('add_image');
                                                    ?>
                                                    <li>
                                                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <!-- ============left_section_images_list========================== -->

                                <?php	if( have_rows('how_big_right_section_1st_column') ): ?>
                                    <?php	while( have_rows('how_big_right_section_1st_column') ) : the_row(); ?>
                                    <div class="how_big__box">
                                        <h6><?php the_sub_field('title'); ?></h6>
                                        <p><?php the_sub_field('description'); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                <!-- ====================================== -->
                                <div class="col-md-6">
                                   <!-- =========left_section_images_list============================= -->
                                    <div class="left_section_images_list">
                                        <ul class="images_list">
                                            <?php if( have_rows('right_section_images_list') ): ?>
                                                <?php while( have_rows('right_section_images_list') ): the_row();
                                                    $add_image = get_sub_field('add_image');
                                                    ?>
                                                    <li>
                                                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <!-- ============left_section_images_list========================== -->
                                <?php	if( have_rows('how_big_right_section_2nd_column') ): ?>
                                    <?php	while( have_rows('how_big_right_section_2nd_column') ) : the_row(); ?>
                                    <div class="how_big__box">
                                        <h6><?php the_sub_field('title'); ?></h6>
                                        <p><?php the_sub_field('description'); ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                 </div>
                                  <!-- ====================================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================================================================= -->
        <section class="featured_adventures">
            <div class="container">
                <h2 class="heading_with_bottom_line heading_with_bottom_line__all_center">Featured Adventures</h2>
                <?php $args = array( 'post_type' => 'tours', 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes');
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : ?>
            <div class="row">
                <?php while ( $query->have_posts() ) : $query->the_post();  ?>
                <div class="col-md-4">
                    <div class="trip-info">
                        <?php the_post_thumbnail(); ?>
                        <div class="trip-detail-info">
                            <h2 class="h5"><?php the_title(); ?></h2>
                                <?php if( have_rows('activity') ):  ?>
                                <div class="activity bottom-line">
                                    <p class="line_img"><span class="line_img_span"><img src="https://dev.loebigink.com/alaska/wp-content/uploads/2021/11/Group-106.png"/></span>Activity: </p>
                                        <ul>
                                            <?php  while( have_rows('activity') ) : the_row(); ?>
                                            <li class="green-box"><?php the_sub_field('activity_keywords'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                </div>
                                <?php endif; ?>
<?php /*  */ ?>

<?php /*
                                <div class="Location bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-map-marker-alt"></i></span>Location: <span><?php the_field('location'); ?></span></p>
                                </div>
*/ ?>
                                <div class="Duration bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-clock"></i></span>Duration: <span><?php the_field('duration'); ?></span></p>
                                </div>

<?php /*
                                <div class="Distance bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-map"></i></span>Distance: <span><?php the_field('distance'); ?></span></p>
                                </div>
*/ ?>
                                <div class="Season bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-calendar-alt"></i></span>Season: <span><?php the_field('season'); ?></span></p>
                                </div>
<?php /*
                                <?php if( have_rows('transportaion') ):  ?>
                                <div class="Transport bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-plane"></i></span>Transpotation: </p>
                                        <ul>
                                            <?php  while( have_rows('transportaion') ) : the_row(); ?>
                                            <li class="green-box"><?php the_sub_field('vehical_name'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                </div>
                                <?php endif; ?>
                                <div class="cost bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-dollar-sign"></i></span>Cost: <span><?php the_field('cost'); ?></span></p>
                                </div>
                                <div class="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
*/ ?>
                                <div class="book_now">
                                    <?php the_field('book_now'); ?>
                                </div>
                                <div class="trip__details">
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">View Full Trip Details</a>
                                </div>
                        </div>    
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif;  
            wp_reset_query(); ?> 
            </div>
        </section>
        <!-- ======================================================================= -->
        <section class="why_choose_us">
            <div class="container">
                <h2 class="heading_with_bottom_line heading_with_bottom_line__all_center"><?php the_field('why_choose_us_title'); ?></h2>
                <?php	if( have_rows('why_choose_us') ): ?>
                <div class="row">
                    <?php	while( have_rows('why_choose_us') ) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="why_choose_us__box text-center">
                            <div class="why_choose_us__box__icon">
                                <?php $chooseusicon = get_sub_field('choose_us_icon');
                                    if( !empty( $chooseusicon ) ): ?>
                                    <img src="<?php echo esc_url($chooseusicon['url']); ?>" alt="<?php echo esc_attr($chooseusicon['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="why_choose_us__box__text">
                                <p><?php the_sub_field('choose_us_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- ======================================================================= -->
    </main>


<?php get_footer(); ?>

