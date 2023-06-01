<?php /* Template Name: Reservation Policy */ ?>

<?php get_header(); ?>
<main class="main page_reservation_policy">
    <div class="reservation-policy">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="heading_with_bottom_line"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                    <div class="contact_us_left">
                        <div class="contact_us_form">
                            <div class="contact_us_form_title">
                                <div class="row">
                                    <div class="col-6">
                                        <?php if( get_field('form_title') ): ?>
                                            <h5><?php the_field('form_title'); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-6 text-right">
                                        <?php if( get_field('required') ): ?>
                                            <span><?php the_field('required'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_us_form_content">
                                <?php if( get_field('form_short_code') ): ?>
                                    <div class="contact_us_content">
                                        <?php the_field('form_short_code'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();