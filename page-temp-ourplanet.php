<?php /* Template Name: Our Planet */ ?>
<?php get_header(); ?>
<main class="main our_planet">
    <div class="container">
        <?php the_title( '<h1 class="heading_with_bottom_line">', '</h1>' ); ?>
        <!-- ========== -->
        <div class="before__ontent">
            <?php if( get_field('add_title') ): ?>
                  <div class="our_guides_after">
                    <h4><?php the_field('add_title'); ?></h4>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-sm-1">
                    <?php
                    $add_image = get_field('add_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $add_image ) {
                        echo wp_get_attachment_image( $add_image, $size );
                    }
                    ?>
                </div>
                <div class="col-sm-11">
                    <?php if( get_field('add_content') ): ?>
                          <div class="our_guides_after">
                            <?php the_field('add_content'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- ========== -->
        <div class="content">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/page/contentnotitle', 'page' );
            endwhile;
            ?>
        </div>

        <!-- =================== -->

        <div class="organizations_logos">
            <div class="row">
                   <?php if( have_rows('organizations') ): ?>
                    <?php while( have_rows('organizations') ): the_row();
                        $add_organization = get_sub_field('add_organization');
                        $add_organization_logo = get_sub_field('add_organization_logo');
                        $add_organization_url = get_sub_field('add_organization_url');

                        ?>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="organizations_logos_box">
                        <div class="organizations_logos_img">
                             <a href="<?php echo $add_organization_url; ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo wp_get_attachment_image( $add_organization_logo, 'full' ); ?>
                                </a>
                        </div>

                                <a href="<?php echo $add_organization_url; ?>" target="_blank" rel="noopener noreferrer">
                                    <h6><?php echo $add_organization; ?></h6>
                                </a>
                    </div>
                </div>
                         <?php endwhile; ?>
                <?php endif; ?>
            </div>

<?php /*
            <table border="0" class="table">
                <tbody>
                   <?php if( have_rows('organizations') ): ?>
                    <?php while( have_rows('organizations') ): the_row();
                        $add_organization = get_sub_field('add_organization');
                        $add_organization_logo = get_sub_field('add_organization_logo');
                        $add_organization_url = get_sub_field('add_organization_url');

                        ?>
                        <tr>
                            <td >
                                <a href="<?php echo $add_organization_url; ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo wp_get_attachment_image( $add_organization_logo, 'full' ); ?>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $add_organization_url; ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo $add_organization; ?>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>

                    <tr>
                        <td style="text-align: center;">
                            <a href="http://onepercentfortheplanet.org/" target="_blank" rel="noopener noreferrer">
                                <img src="/images/onepercent/OPP_HORZ_4C.png" alt="" border="0">
                            </a>
                        </td>
                        <td>
                            <a href="http://onepercentfortheplanet.org/" target="_blank" rel="noopener noreferrer">One Percent For The Planet</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            */?>

        </div>
    </div>
</main><!-- #main -->
<?php get_footer();