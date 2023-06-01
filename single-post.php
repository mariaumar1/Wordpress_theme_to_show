<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="main single__post">
    <div class="container">
		<div class="single__feature_img">
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'single__post_featured_image' ); ?>
			</div>
    	</div>
    	<div class="row">
    		<div class="col-lg-8">

    			<div class="content">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/post/contentpost', get_post_format() );
					endwhile; // End the loop.
					?>
				</div><!-- #primary -->
    		</div>
    		<div class="col-lg-4">
    			<?php get_sidebar('post'); ?>
    		</div>
    	</div>
	</div><!-- .wrap -->

	<!-- ==================================================================================== -->
        <div class="blog-posts ">
            <div class="container">
                <div class="row">
                    <?php $args = array( 'post_type' => 'post','posts_per_page' => 4, 'order' => 'asc');
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :  ?>
                        <div class="col-lg-8">
                            <h2 class="heading_with_bottom_line">Realted Blog</h2>
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
                        </div>
                    <?php endif;
                    wp_reset_query(); ?>
                    <div class="col-lg-4">
                        <div class="related__adventures">
                        <h2 class="heading_with_bottom_line">Related Adventures</h2>
                        <div class="related-posts">
                            <?php
                            $args = array(
                                'post_type' => 'tours',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'orderby' => 'rand',
                                'post__not_in' => array ($post->ID),
                            );
                            $relatedPosts = new WP_Query( $args );
                            if($relatedPosts->have_posts()){

                                while($relatedPosts->have_posts()){
                                    $relatedPosts->the_post(); ?>
                            <div class="trip-info">
                                <?php the_post_thumbnail('blogpost'); ?>
                                <div class="trip-detail-info">
                                	<div class="the_title">
                                    <h2><?php the_title(); ?></h2>
                                	</div>
                                        <div class="Duration bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-clock"></i></span>Duration: <span><?php the_field('duration'); ?></span></p>
                                        </div>
                                        <div class="difficulty bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-flag"></i></span>Difficulty: <span><?php the_field('difficulty'); ?></span></p>
                                        </div>
                                        <div class="Season bottom-line">
                                            <p class="line_img"><span class="line_img_span"><i class="far fa-calendar-alt"></i></span>Season: <span><?php the_field('season'); ?></span></p>
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
	<!-- ==================================================================================== -->
</main><!-- #main -->
<?php get_footer();