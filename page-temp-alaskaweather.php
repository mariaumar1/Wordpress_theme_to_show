<?php /* Template Name: Alaska Weather */ ?>

<?php get_header(); ?>
<main class="main page_alaska_weather">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>
    <!-- ========================== -->
    <div class="alaska_weather">
         <div class="container">
            <?php if( have_rows('current_weather_forecast') ): ?>
                <?php while( have_rows('current_weather_forecast') ): the_row();
                        $add_forecast_title = get_sub_field('title');
                        $add_forecast_image = get_sub_field('add_forecast_image');
                        $current_weather_forecast_url = get_sub_field('current_weather_forecast_url');
                        $add_forecast_table = get_sub_field('add_table');
                    ?>
                    <div class="alaska_weather_box">
                        <h2><?php echo $add_forecast_title; ?></h2>
                        <div class="alaska_weather_img">
                           <a href="<?php echo $current_weather_forecast_url; ?>" target="_blank"><?php echo wp_get_attachment_image( $add_forecast_image, 'full' ); ?></a>
                        </div>
                        <div class="alaska_weather_table">
                            <div class="table-responsive">
                                <?php echo $add_forecast_table; ?>
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