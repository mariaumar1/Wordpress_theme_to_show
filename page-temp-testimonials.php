<?php /* Template Name: Testimonials */ ?>

<?php get_header(); ?>
<main class="main page_testimonials">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>
<!-- ========================== -->
    <section class="section_testimonials all_testimonials ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-columnss  all_testi">
                        <!-- ======================= -->
                        <?php
                            $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
                            $loop = new WP_Query( $args );
                            if ( have_posts() ) :
                                while (  $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <!-- ======================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="content_box">
                                        <div class="quote_signs">
                                            <svg class="iconss qoute_open">
                                                <use xlink:href="#quote"></use>
                                            </svg>
                                            <div class="card-text">
                                                <div class="bialty-container">
                                                    <?php if( get_field('add_review') ): ?>
                                                        <p><?php the_field('add_review'); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pic_box">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <?php if( get_field('visited_location_name') ): ?>
                                            <h6><a href="<?php the_field('visited_location_url'); ?>"><?php the_field('visited_location_name'); ?></a></h6>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <!-- ========================== -->
                        <?php endwhile;
                        endif ;
                        wp_reset_postdata();
                        ?>
                    <!-- ========================== -->
                    </div>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar('withcontactusform'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();