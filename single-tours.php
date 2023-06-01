<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


get_header(); ?>

<style>
.tours_single .wpdevart-responsive .wpda-previous .calendarsvg  ,
.tours_single .wpdevart-responsive .wpda-next .calendarsvg {
    width: 12px !important;
    height: 12px !important;
}
</style>
<main class="main tours_single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <!-- ======================= -->
                     <?php if( get_field('show_title_with_icon') == 'yes'): ?> <!-- if show_text_editor is yes -->
                    <div class="tours_single_box">
                        <div class="tours_single_title">
                            <div class="tours_single_icon">
                                <?php
                                $title_icon = get_field('title_icon');
                                 if( !empty($title_icon) ): ?>
                                    <?php echo wp_get_attachment_image( $title_icon, 'full' ); ?>
                                <?php else: ?>
                                    <img src="<?php echo bloginfo('template_url') ?>/images/bag.png" alt="bag">
                                <?php endif; ?>
                            </div>
                            <div class="tours_single_content">
                                <h1>
                                <?php
                                $title_small = get_field('title_small');
                                 if( !empty($title_small) ): ?>
                                    <small><?php echo $title_small ; ?></small>
                                <?php else: ?>
                                    <small>10 Days</small>
                                <?php endif; ?>

                                <?php
                                $title_heading = get_field('title_heading');
                                 if( !empty($title_heading) ): ?>
                                   <?php echo $title_heading ; ?>
                                <?php else: ?>
                                     <?php the_title(); ?>
                                <?php endif; ?>
                                <?php $per_person_price = get_field('per_person_price');
                                 if( !empty($per_person_price) ): ?>
                                   <p><?php echo $per_person_price ; ?></p>
                                <?php endif; ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?><!-- if show_text_editor is yes -->
                    <!-- ======================= -->
                <div class="content">
                      <!-- ======================= -->
                    <?php the_content(); ?>
                    <!-- ========================= -->
                    <div class="trip_Details">

                        <?php
                        $trip_details_heading = get_field('trip_details_heading');
                         if( !empty($trip_details_heading) ): ?>
                           <h3 class="heading_with_bottom_line"><?php echo $trip_details_heading ; ?></h3>
                        <?php else: ?>
                             <h3 class="heading_with_bottom_line">Trip Details</h3>
                        <?php endif; ?>

                        <?php
                        $trip_details_content = get_field('trip_details_content');
                         if( !empty($trip_details_content) ): ?>
                           <?php echo $trip_details_content ; ?>
                        <?php else: ?>
                             <p>Our incomparable 12-day combination adventure will take you backpacking and hiking through the Arrigetch Peaks region of the central Brooks Range plus canoeing down the Wild and Scenic Alatna River. For those looking for the quintessential expedition into the remote wilds of Gates of the Arctic National Park, look no further.</p>
                        <?php endif; ?>

                    </div>
                    <!-- ========================= -->
                    <div class="key_Highlights">

                        <?php
                        $key_highlights_title = get_field('key_highlights_title');
                         if( !empty($key_highlights_title) ): ?>
                           <h4 class="heading_with_bottom_line"><?php echo $key_highlights_title ; ?></h4>
                        <?php else: ?>
                             <h4 class="heading_with_bottom_line">Key Highlights</h4>
                        <?php endif; ?>



                        <?php if( have_rows('key_highlights_repeater') ): ?>
                            <ul>
                            <?php while( have_rows('key_highlights_repeater') ): the_row();
                                ?>
                                <li><?php the_sub_field('add_key_highlight'); ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                      <!-- ======================= -->
                    <div class="need_details">
                        <?php $needdetailslink = get_field('need_details');
							if( $needdetailslink ): 
							$link_url = $needdetailslink['url'];
							$link_title = $needdetailslink['title'];
							$link_target = $needdetailslink['target'] ? $needdetailslink['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                    </div>
                    <div class="download_itinerary_btn">
                       <?php $downloaddetailslink = get_field('download_detail_button');
							if( $downloaddetailslink ): 
							$link_url = $downloaddetailslink['url'];
							$link_title = $downloaddetailslink['title'];
							$link_target = $downloaddetailslink['target'] ? $downloaddetailslink['target'] : '_self';
							?>
							<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                    </div>
                    
                    <?php
                    $trip_review = get_field('trip_review');
                     if( !empty($trip_review) ): ?>
                        <blockquote class="default trip_reviews">
                        	<p><?php the_field('trip_review'); ?></p>
                                <?php $customer_name = get_field('customer_name'); 
                                if( !empty($customer_name) ): ?> 
                                    <span><?php the_field('customer_name'); ?></span>
                                <?php endif; ?>
                        </blockquote>
                    <?php endif; ?>
                    <!-- ============== -->
                    <div class="share-icons">
                        <?php
                        $share_icon_shortcode = get_field('share_icon_shortcode');
                        if( !empty($share_icon_shortcode) ): ?>
                            <p>share <?php the_field('share_icon_shortcode'); ?> </p>
                        <?php else: ?>
                            <p>Share <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- ============== -->

                    <?php
                        $trip_factor_heading = get_field('trip_factor_heading');
                         if( !empty($trip_factor_heading) ): ?>
                        <div class="trip_factor">
                            <h6><?php echo $trip_factor_heading ; ?></h6>
                            <?php $tripfactor = get_field( 'trip_factor'); ?>
    						<?php if($tripfactor) : ?>
    						<?php echo wpautop($tripfactor) ?>
    						<?php endif; ?>
                        </div>
                     <?php endif; ?>
                     <!-- ================== -->
                    <div class="trip__Itinerary">

                        <?php
                        $itinerary_title = get_field('itinerary_title');
                         if( !empty($itinerary_title) ): ?>
                        <h2  class="heading_with_bottom_line"><?php the_field('itinerary_title'); ?></h2>
                        <?php endif; ?>
						<?php	if( have_rows('itinerary_data') ): ?>
             			<?php	while( have_rows('itinerary_data') ) : the_row(); ?>
                        <div class="trip__Itinerary_days">
                            <h3><? the_Sub_field('days'); ?></h3>
                            <p><? the_Sub_field('details'); ?></p>
                        </div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
                     <!-- ================== -->
                    <div class="need_details">
                        <?php $needdetailslink = get_field('need_details');
							if( $needdetailslink ): 
							$link_url = $needdetailslink['url'];
							$link_title = $needdetailslink['title'];
							$link_target = $needdetailslink['target'] ? $needdetailslink['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                    </div>
                    <div class="download_itinerary_btn">
                       <?php $downloaddetailslink = get_field('download_detail_button');
								if( $downloaddetailslink ): 
								$link_url = $downloaddetailslink['url'];
								$link_title = $downloaddetailslink['title'];
								$link_target = $downloaddetailslink['target'] ? $downloaddetailslink['target'] : '_self';
								?>
								<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                    </div>
<!-- ================================= -->
                    <?php
                    $trip_factor_after_heading = get_field('trip_factor_after_heading');
                    if( !empty($trip_factor_after_heading) ): ?>
                        <div class="trip_factor">
                            <h6><?php echo $trip_factor_after_heading ; ?></h6>
                            <!-- ============= -->
                            <?php $tripfactorafter = get_field( 'trip_factor_after'); ?>
                            <?php if($tripfactorafter) : ?>
                            <?php echo wpautop($tripfactorafter) ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
<!-- ================================= -->
                </div>
			</div>
            <div class="col-lg-4">
                <div class="tours_single_sidebar">
                    <h2 class="heading_with_bottom_line">Available Dates</h2>

                    <div class="available__dates_tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Calender</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="dates_list_view">
                                    <div class="dates_list_top">
                                        <div class="row">
                                            <div class="col-4 text-left"><a href="#" class="list_top_icon list_top_left"><svg class="list_top_svg"><use xlink:href="#right-chevron"></use></svg></a></div>
                                            <div class="col-4 text-center"><span class="list_top_year">2022 April</span></div>
                                            <div class="col-4 text-right"><a href="#" class="list_top_icon list_top_right"><svg class="list_top_svg"><use xlink:href="#right-chevron"></use></svg></a></div>
                                        </div>
                                    </div>
                                    <div class="dates_list_bottom">
                                        
                                        <?php echo do_shortcode('[list_view_shortcode calender_id="8" ]'); ?>
                                        
                                        
                                        <ul>
                                            <li class="dates_list_li">
                                               <span class="list_dot list_green_dot"></span>
                                               <span class="list_date">
                                                   <span class="list_start_date">July 7</span> - <span class="list_end_date">July 16</span>, <span class="list_year_date">2022</span>

                                                   <span class="list_date_text">6 Available Slots <span  class="sept_bar">|</span> 0 to guarantee</span>
                                                </span>
                                                <span class="list_arrow">
                                                    <a href="#" class="list_arrow_icon"><svg class="list_arrow_svg"><use xlink:href="#right-chevron"></use></svg></a>
                                                </span>
                                            </li>
                                            <li class="dates_list_li">
                                               <span class="list_dot list_orange_dot"></span>
                                               <span class="list_date">
                                                   <span class="list_start_date">July 7</span> - <span class="list_end_date">July 16</span>, <span class="list_year_date">2022</span>
                                                   <span class="list_date_text">6 Available Slots <span  class="sept_bar">|</span> 0 to guarantee</span>
                                                </span>
                                                <span class="list_arrow">
                                                    <a href="#" class="list_arrow_icon"><svg class="list_arrow_svg"><use xlink:href="#right-chevron"></use></svg></a>
                                                </span>
                                            </li>
                                            <li class="dates_list_li">
                                               <span class="list_dot list_green_dot"></span>
                                               <span class="list_date">
                                                   <span class="list_start_date">July 7</span> - <span class="list_end_date">July 16</span>, <span class="list_year_date">2022</span>
                                                   <span class="list_date_text">6 Available Slots <span  class="sept_bar">|</span> 0 to guarantee</span>
                                                </span>
                                                <span class="list_arrow">
                                                    <a href="#" class="list_arrow_icon"><svg class="list_arrow_svg"><use xlink:href="#right-chevron"></use></svg></a>
                                                </span>
                                            </li>
                                            <li class="dates_list_li">
                                               <span class="list_dot list_blue_dot"></span>
                                               <span class="list_date">
                                                   <span class="list_start_date">July 7</span> - <span class="list_end_date">July 16</span>, <span class="list_year_date">2022</span>
                                                   <span class="list_date_text">6 Available Slots <span  class="sept_bar">|</span> 0 to guarantee</span>
                                                </span>
                                                <span class="list_arrow">
                                                    <a href="#" class="list_arrow_icon"><svg class="list_arrow_svg"><use xlink:href="#right-chevron"></use></svg></a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <!-- ================================== -->
                                <div class="available__dates_wrap">
                                    <div class="available__Dates">
                                        <?php if( get_field('available_dates_calendar_short_code') ): ?>
                                            <div class="available__dates">
                                                <?php the_field('available_dates_calendar_short_code'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- ================================== -->
                            </div>
 <!-- ================================== -->
            <div class="events-container">
                <ul class="events__list">
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Guaranteed Trip</span>
                        </div>
                        <span class="events__tag events__tag--highlighted_green"></span>
                    </li>
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Has Bookings</span>
                        </div>
                        <span class="events__tag events__tag--highlighted_orange"></span>
                    </li>
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Opportunity</span>
                        </div>
                        <span class="events__tag "></span>
                    </li>
                </ul>
                    <span class="events__title">Custom dates available. Call for Details!</span>
            </div>
                        </div>
                    </div>


                    <div class="book_now">
                        <?php the_field('book_now'); ?>
                    </div>

                    <div class="trip_states">
                        <h2 class="heading_with_bottom_line"><?php the_field('trip_stats_title'); ?></h2>
						<?php	if( have_rows('trip_stats') ): ?>
             			 <div class="trip_states_box">
							<table class="table table__white">
								<?php	while( have_rows('trip_stats') ) : the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('stats_name'); ?></td><td><?php the_sub_field('stats_datail'); ?></td>
                                </tr>
								<?php endwhile; ?>
                            </table>
							
                        </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php	if( have_rows('trip_addition_details') ): ?>
        <div class="trip_addition-detail full-width-section">
            <div class="container">    
                <div class="row">
                    <?php	while( have_rows('trip_addition_details') ) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="additional_details">
                            <h6><?php the_sub_field('title'); ?></h6>
                            <p><?php the_sub_field('description'); ?></p>
                            <div class="additional_link">
                                <?php $additionallink = get_sub_field('button_link');
                                        if( $additionallink ): 
                                        $link_url = $additionallink['url'];
                                        $link_title = $additionallink['title'];
                                        $link_target = $additionallink['target'] ? $additionallink['target'] : '_self';
                                        ?>
                                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="blog-posts">
            <div class="container">
                <div class="row">
                    <?php $args = array( 'post_type' => 'post','posts_per_page' => 4, 'order' => 'asc');
                    $query = new WP_Query( $args ); 
                    if ( $query->have_posts() ) :  ?>
                        <div class="col-lg-8">
                            <h2 class="heading_with_bottom_line">Tales from the Tundra</h2>
                            <div class="blog-post-wrapper">
                                <?php while ( $query->have_posts() ) : $query->the_post();  ?>
                                    <div class="blog_posts">
                                        <div class="blog_posts_inner">
                                        <?php the_post_thumbnail('blogpost'); ?>
                                        <div class="post-content">
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_excerpt(); ?>
                                            <div class="post-link">
                                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="blog-links">
                                    <a href="#">See more tale from tundura</a>
                                    <a href="#"><i class="fas fa-rss-square"></i> Subscribe to thiss RSS Feed</a>
                            </div>
                        </div>
                    <?php endif;  
                    wp_reset_query(); ?>  
                    <div class="col-lg-4">
                        <div class="related__adventures">
                        <h2 class="heading_with_bottom_line">Related Adventures</h2>
                        <div class="related-posts">
                            <?php $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'advantures', array('fields' => 'ids') );
                            $args = array(
                                'post_type' => 'tours',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'orderby' => 'rand',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'advantures',
                                        'field' => 'id',
                                        'terms' => $customTaxonomyTerms
                                    )
                                ),
                                'post__not_in' => array ($post->ID),
                            ); 
                            $relatedPosts = new WP_Query( $args ); 
                            if($relatedPosts->have_posts()){
                            
                                while($relatedPosts->have_posts()){ 
                                    $relatedPosts->the_post(); ?>
                            <div class="trip-info">
                                <?php the_post_thumbnail(); ?>
                                <div class="trip-detail-info">
                                    <h2><?php the_title(); ?></h2>
                                        <div class="Duration bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-clock"></i></span>Duration: <span><?php the_field('duration'); ?></span></p>
                                        </div>
                                        <div class="difficulty bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-flag"></i></span>Difficulty: <span><?php the_field('difficulty'); ?></span></p>
                                        </div>
                                        <div class="Season bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-calendar-alt"></i></span>Season: <span><?php the_field('season'); ?></span></p>
                                        </div>
                                        <div class="book_now">
                                            <?php the_field('book_now'); ?>
                                        </div>
                                        <div class="trip__details">
                                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">View Full Trip Details</a>
                                        </div>
                                </div>    
                            </div>
                            <?php }
                            
                            }
                            else{
                                    //no posts found
                            }
                            //restore original post data
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div><!-- .wrap -->
</main><!-- #main -->
<?php get_footer(); ?>
