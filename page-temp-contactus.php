<?php /* Template Name: Contact us */ ?>

<?php get_header(); ?>
<main class="main page_contact_us">
        <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>
<div class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="contact_us_left">
                    <div class="contact_us_form ">
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
            <div class="col-md-3">
                <div class="contact_us_right">
                    <div class="contact_us_box">
                        <?php if( get_field('mailing_address') ): ?>
                                <h5><?php the_field('mailing_address'); ?></h5>
                        <?php endif; ?>

                        <?php if( get_field('mailing_address_content') ): ?>
                            <div class="contact_us_content">
                                <?php the_field('mailing_address_content'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="contact_us_box">
                        <?php if( get_field('phone_number') ): ?>
                                <h5><?php the_field('phone_number'); ?></h5>
                        <?php endif; ?>

                        <?php if( get_field('phone_number_content') ): ?>
                            <div class="contact_us_content">
                                <?php the_field('phone_number_content'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-section">
        <?php $mapsection = get_field('map_section'); ?>
        <?php if($mapsection) : ?>
        <?php echo $mapsection ?>
        <?php endif; ?>
    </div>
</div>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();