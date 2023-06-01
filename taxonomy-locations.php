<?php get_header(); ?>

<main class="main advanture_archive">
    <div class="container">    
        <div class="tour-posts">
            <?php $al_cat_slug = get_queried_object()->slug;
            $args = array( 'post_type' => 'tours','posts_per_page' => -1, 'order' => 'asc', 'tax_query' => array(array('taxonomy' => 'locations','field' => 'slug','terms' => $al_cat_slug)));
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
                                    <p class="line_img"><span class="line_img_span"><img src="https://dev.loebigink.com/alaska/wp-content/uploads/2021/11/Group-106.png"/></span> Activity: </p>
                                        <ul>
                                            <?php  while( have_rows('activity') ) : the_row(); ?>
                                            <li class="green-box"><?php the_sub_field('activity_keywords'); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                </div>
                                <?php endif; ?>
                                <div class="Location bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="fas fa-map-marker-alt"></i></span> Location: <span><?php the_field('location'); ?></span></p>
                                </div>
                                <div class="Duration bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-clock"></i></span>Duration: <span><?php the_field('duration'); ?></span></p>
                                </div>
                                <div class="Distance bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-map"></i></span> Distance: <span><?php the_field('distance'); ?></span></p>
                                </div>
                                <div class="Season bottom-line">
                                    <p class="line_img"><span class="line_img_span"><i class="far fa-calendar-alt"></i></span>Season: <span><?php the_field('season'); ?></span></p>
                                </div>
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
    </div> 

</main>

<?php get_footer();?>