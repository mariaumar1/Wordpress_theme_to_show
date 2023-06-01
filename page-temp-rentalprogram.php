<?php /* Template Name: Rental Program */ ?>

<?php get_header(); ?>
<main class="main page_rental_program">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );
        endwhile;
        ?>
    </div>


    <div class="rental_program">
        <div class="container">

<?php if( have_rows('add_program') ): ?>
    <?php while( have_rows('add_program') ): the_row();
        $program_title = get_sub_field('program_title');
        ?>
<!-- ====================== -->
            <div class="rental_program_box">
                <h5><?php echo $program_title ; ?></h5>
                <div class="rental_program_box_content">
                    <!-- ================================== -->
                    <?php if( have_rows('program_list') ): ?>
                        <?php while( have_rows('program_list') ): the_row();
                            $add_list_item = get_sub_field('add_list_item');
                            ?>
                     <p><?php echo $add_list_item ; ?></p>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- ====================== -->
                    <p class="mg_0">4-Day Trips - $15</p>
                </div>
            </div>
<!-- ====================== -->
    <?php endwhile; ?>
<?php endif; ?>




        </div>
    </div>
</main><!-- #main -->
<?php get_footer();