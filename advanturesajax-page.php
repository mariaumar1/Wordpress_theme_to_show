<div class="tour-posts">
            
            <?php
            global $catId;
			$args = array( 'post_type' => 'tours','posts_per_page' => -1, 'order' => 'asc', 'tax_query' => array(array('taxonomy' => 'advantures','field' => 'term_id','terms' => array($catId))));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : ?>
            <div class="row">
                
                <?php while ( $query->have_posts() ) : $query->the_post();  ?>
                <div class="col-md-4">
                    <div class="trip-info">
                        <?php the_post_thumbnail(); ?>
                        <div class="trip-detail-info">
                            <h2><?php the_title(); ?></h2>
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
                                <div class="Location bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-map-marker-alt"></i></span>Location: <span><?php the_field('location'); ?></span></p>
                                </div>
                                <div class="Duration bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-clock"></i></span>Duration: <span><?php the_field('duration'); ?></span></p>
                                </div>
                                <div class="Distance bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-map"></i></span>Distance: <span><?php the_field('distance'); ?></span></p>
                                </div>
                                <div class="Season bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-calendar-alt"></i></span>Season: <span><?php the_field('season'); ?></span></p>
                                </div>
                                <?php if( have_rows('transportaion') ):  ?>
                                <div class="Transport bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-plane"></i> </span>Transpotation: </p>
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
            <div class="back-btn" id="back-to-terms" style="cursor: pointer;">Back</div>
    </div>
    <script>
    	jQuery(document).ready(function() {
			jQuery('#back-to-terms').click(function(){
				//console.log("Here");
				jQuery('#category-grid').show();
			    jQuery('#term-posts').hide();
			});
		});
        jQuery(document).ready(function() {
			jQuery('#back-to-terms').click(function(){
				//console.log("Here");
				jQuery('#loc-category-grid').show();
			    jQuery('#term-loc-posts').hide();
			});
		});
    </script>