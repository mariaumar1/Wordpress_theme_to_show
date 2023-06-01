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

<main class="main">
    <div class="container">
    	<div class="row">
    		<div class="col-md-8">
    			<div class="content">
					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/post/content', get_post_format() );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						the_post_navigation(
							array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
							)
						);

					endwhile; // End the loop.
					?>
				</div><!-- #primary -->
    		</div>
    		<div class="col-md-4">
    			<?php get_sidebar(); ?>
    		</div>
    	</div>
	</div><!-- .wrap -->
</main><!-- #main -->
<?php get_footer();