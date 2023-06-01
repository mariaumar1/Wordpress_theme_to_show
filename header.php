<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
$top_logo = get_field( 'top_logo', 'option' );
$footer_logo = get_field('footer_logo');
$footer_logo = get_field('footer_logo');


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <!-- ======================================================== -->
        <div class="top_bar_grey contact__bar">
            <div class="container">
                <nav class="main_menu_nav_grey">
                    <div class="body_overlay_grey"></div>
                    <div class="menu-toggler"></div>
                    <div class="main_menu_div_grey">
                        <div class="menu-header">
                            <a href="#" class="home-icon"><svg class="icons">
                                    <use xlink:href="#homeicon"></use>
                                </svg></a>
                            <span class="close-icon"><svg class="icons">
                                    <use xlink:href="#crossbtn"></use>
                                </svg></span>
                        </div>
                       <?php wp_nav_menu(array(
                        'theme_location' => 'topmost_menu',
                        'menu_id'        => 'topmosts_menu',
                        'container'       => 'false',
                    )); ?>
                        <div class="shopping-cart">
                        <rm-shopping-cart order-page-url="https://alaskaalpineadventures.app.resmarksystems.com/public/order/index/Order/view" class="link" style="color:#ffffff" ></rm-shopping-cart>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ========================================================= -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center no-gutters">
                    <div class="col-9 col-md-2">
                         <?php if( !empty($top_logo) ): ?>
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url("") ); ?>">
                                    <?php echo wp_get_attachment_image( $top_logo, $bsize ); ?>
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url("") ); ?>">
                                    <img src="<?php echo bloginfo('template_url') ?>/images/logo.png"  alt="logo">
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-3 col-md-10">
                        <div class="menu_wrap">
                            <nav class="main-menu-nav">
                                <div class="body-overlay"></div>
                                <div class="menu-toggler"></div>
                                <div class="main-menu-div">
                                    <div class="menu-header">
                                        <a href="#" class="home-icon"><svg class="icons">
                                                <use xlink:href="#homeicon"></use>
                                            </svg></a>
                                        <span class="close-icon"><svg class="icons">
                                                <use xlink:href="#crossbtn"></use>
                                            </svg></span>
                                    </div>
                                   <?php wp_nav_menu(array(
                                        'theme_location' => 'top',
                                        'menu_id'        => 'top-menu',
                                        'container'       => 'false',
                                    )); ?>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php if(is_front_page()): ?>
        <?php /*
        <div class="homeBanner pagebanner">
            <div class="homeBannerSlide">
                <img src="<?php echo bloginfo('template_url') ?>/images/home_banner.jpg" width="1810" height="810" alt="home_banner">
                <div class="hbanABS">
                    <div class="container">
                        <div class="hbanABS_img">
                            <img src="<?php echo bloginfo('template_url') ?>/images/banner_icon.png" alt="banner_icon">
                        </div>
                        <h1>ALASKA BEGINS AND ENDS WITH SPECTACULAR <br> <span>Book the adventure of a lifetime - without the crowds</span></h1>
                        <div class="hbanABS_btn">
                            <a href="https://dev.loebigink.com/alaska/tours/" class="book_now_btn btn btn-secondary ">View Trips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        */ ?>
        <!-- =============== -->
             <!-- =============================== -->
    <?php if( get_field('show_default_banner') == 'yes'): ?> <!-- if show_text_editor is yes -->
        <div class="homeBanner pagebanner">
            <?php if( have_rows('default_banner_slide') ): ?>
                <?php while( have_rows('default_banner_slide') ): the_row();
                    $add_slide_image = get_sub_field('add_slide_image');
                    $add_slide_icon = get_sub_field('add_slide_icon');
                    $add_slide_title = get_sub_field('add_slide_title');
                    $add_slide_button_text = get_sub_field('add_slide_button_text');
                    $add_slide_button_text_url = get_sub_field('add_slide_button_text_url');

                    ?>
        <div class="homeBannerSlide">
                <!-- ============== -->
                <?php if($add_slide_image): ?>
                    <?php echo wp_get_attachment_image( $add_slide_image, 'default_banner_slide_img_size' ); ?>
                 <?php else: ?>
                     <img src="<?php echo bloginfo('template_url') ?>/images/home_banner.jpg" width="1810" height="810" alt="home_banner">
                <?php endif; ?>
                <!-- ============== -->
                <div class="hbanABS">
                    <div class="container">
                         <!-- ============== -->
                        <!-- ============== -->
                        <div class="hbanABS_img">
                            <?php if($add_slide_icon): ?>
                                <?php echo wp_get_attachment_image( $add_slide_icon, 'full' ); ?>
                             <?php else: ?>
                                <img src="<?php echo bloginfo('template_url') ?>/images/banner_icon.png" alt="banner_icon">
                            <?php endif; ?>
                        </div>
                        <!-- ============== -->
                        <!-- ============== -->
                        <?php if($add_slide_title): ?>
                            <h1><?php echo $add_slide_title; ?></h1>
                        <?php else: ?>
                            <h1>ALASKA BEGINS AND ENDS WITH SPECTACULAR</h1>
                        <?php endif; ?>
                        <!-- ============== -->
                        <!-- ============== -->
                        <div class="hbanABS_btn">
                            <?php if($add_slide_button_text): ?>
                                <a href="<?php echo $add_slide_button_text_url; ?>" class="book_now_btn btn btn-secondary "><?php echo $add_slide_button_text; ?></a>
                            <?php else: ?>
                                <a href="#" class="book_now_btn btn btn-secondary ">View Trips</a>
                            <?php endif; ?>
                        </div>
                        <!-- ============== -->
                        <!-- ============== -->
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!-- if show_text_editor is yes -->
        <!-- ================================ -->
        <!-- ==================================================== -->
<?php elseif(is_page_template('page-temp-with-tabs.php')): ?>
        <!-- ====no banner on this temp============ -->
        <!-- ====no banner on this temp============ -->
<?php elseif(is_page_template('page-temp-abouts.php')): ?>
    <!-- ================================ -->
        <div class="homeBanner_with_slider pagebanner">
            <div class="homeBanner_slider">
                <div class="homeBannerSlide">
                    <img src="<?php echo bloginfo('template_url') ?>/images/banner_slide_img1.jpg" width="1920" height="844" alt="home_banner">
                </div>
                <div class="homeBannerSlide">
                    <img src="<?php echo bloginfo('template_url') ?>/images/banner_slide_img1.jpg" width="1920" height="844" alt="home_banner">
                </div>
                <div class="homeBannerSlide">
                    <img src="<?php echo bloginfo('template_url') ?>/images/banner_slide_img1.jpg" width="1920" height="844" alt="home_banner">
                </div>
                <div class="homeBannerSlide">
                    <img src="<?php echo bloginfo('template_url') ?>/images/banner_slide_img1.jpg" width="1920" height="844" alt="home_banner">
                </div>
            </div>
            <div class="hbanABS">
                <div class="container">
                    <div class="hbanABS_img">
                        <img src="<?php echo bloginfo('template_url') ?>/images/bag.png" alt="banner_icon">
                    </div>
                    <div class="hbanABS_content">
                        <h1><small>10 days</small>Backpacking Denali National Park</h1>
                        <p>10-day itinerary for experienced backpackers includes 8-full days of backpacking along massive glaciers, above wild rivers, and through virgin wilderness in this amazing and virtually untraveled park region. Join us in Denali for the adventure of a lifetime.</p>
                    </div>
                    <div class="hbanABS_btn">
                        <a href="#" class="book_now_btn btn btn-secondary text__capitalize">Book Now</a> <a href="#" class="book_now_btn btn btn-primary text__capitalize">See Itinerary</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- =============================== -->
<?php else: ?>
     <!-- =============================== -->
    <?php if( get_field('show_default_banner') == 'yes'): ?> <!-- if show_text_editor is yes -->
        <div class="homeBanner pagebanner">
            <?php if( have_rows('default_banner_slide') ): ?>
                <?php while( have_rows('default_banner_slide') ): the_row();
                    $add_slide_image = get_sub_field('add_slide_image');
                    $add_slide_icon = get_sub_field('add_slide_icon');
                    $add_slide_title = get_sub_field('add_slide_title');
                    $add_slide_button_text = get_sub_field('add_slide_button_text');
                    $add_slide_button_text_url = get_sub_field('add_slide_button_text_url');

                    ?>
        <div class="homeBannerSlide">
                <!-- ============== -->
                <?php if($add_slide_image): ?>
                    <?php echo wp_get_attachment_image( $add_slide_image, 'default_banner_slide_img_size' ); ?>
                 <?php else: ?>
                     <img src="<?php echo bloginfo('template_url') ?>/images/home_banner.jpg" width="1810" height="810" alt="home_banner">
                <?php endif; ?>
                <!-- ============== -->
                <div class="hbanABS">
                    <div class="container">
                         <!-- ============== -->
                        <!-- ============== -->
                        <div class="hbanABS_img">
                            <?php if($add_slide_icon): ?>
                                <?php echo wp_get_attachment_image( $add_slide_icon, 'full' ); ?>
                             <?php else: ?>
                                <img src="<?php echo bloginfo('template_url') ?>/images/banner_icon.png" alt="banner_icon">
                            <?php endif; ?>
                        </div>
                        <!-- ============== -->
                        <!-- ============== -->
                        <?php if($add_slide_title): ?>
                            <h1><?php echo $add_slide_title; ?></h1>
                        <?php else: ?>
                            <h1>ALASKA BEGINS AND ENDS WITH SPECTACULAR</h1>
                        <?php endif; ?>
                        <!-- ============== -->
                        <!-- ============== -->
                        <div class="hbanABS_btn">
                            <?php if($add_slide_button_text): ?>
                                <a href="<?php echo $add_slide_button_text_url; ?>" class="book_now_btn btn btn-secondary "><?php echo $add_slide_button_text; ?></a>
                            <?php else: ?>
                                <a href="#" class="book_now_btn btn btn-secondary ">View Trips</a>
                            <?php endif; ?>
                        </div>
                        <!-- ============== -->
                        <!-- ============== -->
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!-- if show_text_editor is yes -->
        <!-- ================================ -->
    <!-- =============================== -->
    <?php if( get_field('show_banner_image_boxes') == 'yes'): ?> <!-- if show_text_editor is yes -->
        <section class="tours_single_banner pagebanner">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 tours_single_col">
                    <div class="tours_single__img img_one" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img1.jpg');">

                    </div>
                </div>
                <div class="col-md-6 tours_single_col">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="tours_single__img img_two" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img2.jpg');">
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tours_single__img img_three" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img3.jpg');">
                            </div>
                        </div>
                    </div>
                     <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="tours_single__img img_four" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img4.jpg');">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tours_single__img img_five" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img5.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <?php endif; ?><!-- if show_text_editor is yes -->
        <!-- ====================================== -->
<?php endif; ?>
<!-- =====tours_single_banner==================================== -->
<!-- =====tours_single_banner==================================== -->
<!-- =====tours_single_banner==================================== -->
<?php if (is_singular('tours')): ?>

    <!-- ============================================================ -->
       <?php if( get_field('show_banner_slider') == 'yes'): ?> <!-- if show_text_editor is yes -->
        <div class="homeBanner_with_slider pagebanner ">
             <!-- ========homeBanner_slider=================== -->
            <div class="homeBanner_slider">
                <!-- =========================== -->
                <?php if( have_rows('banner_slider_repeater') ): ?>
                    <?php while( have_rows('banner_slider_repeater') ): the_row();
                        $add_banner_slide_image = get_sub_field('add_banner_slide_image');
                        ?>
                                <div class="homeBannerSlide">
                                    <?php if($add_banner_slide_image): ?>
                                        <?php echo wp_get_attachment_image( $add_banner_slide_image, 'homeBanner_with_slider_img_size' ); ?>
                                     <?php else: ?>
                                         <img src="<?php echo bloginfo('template_url') ?>/images/banner_slide_img1.jpg" width="1920" height="844" alt="home_banner">
                                    <?php endif; ?>
                                </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- =========================== -->
            </div>
             <!-- ======homeBanner_slider===================== -->
            <div class="hbanABS">
                <div class="container">
                    <!-- ============= -->
                        <?php $slide_icon_image = get_field('slide_icon_image');
                        if( !empty( $slide_icon_image ) ): ?>
                            <div class="hbanABS_img">
                                <?php echo wp_get_attachment_image( $slide_icon_image, 'full' ); ?>
                            </div>
                        <?php endif; ?>
                    <!-- ============= -->
                    <div class="hbanABS_content">
                        <!-- ======<h1>======== -->
                        <h1>
                            <!-- ============== -->
                            <?php if( get_field('slide_title_small') ): ?>
                                <small><?php the_field('slide_title_small'); ?></small>
                            <?php endif; ?>
                            <!-- ============== -->
                            <!-- ============== -->
                            <?php if( get_field('slide_title') ): ?>
                              <?php the_field('slide_title'); ?>
                            <?php endif; ?>
                            <!-- ============== -->
                        </h1>
                        <!-- =====<h1>========= -->
                        <!-- =================== -->
                        <!-- ======<p>======== -->
                            <div class="hbanABS_content_paragraph">
                                <?php if( get_field('slide_paragraph') ): ?>
                                    <p><?php the_field('slide_paragraph'); ?></p>
                                <?php endif; ?>
                            </div>

                        <!-- ====<p>========== -->
                    </div>
                    <!-- =======hbanABS_btn================================ -->
                    <div class="hbanABS_btn">
                        <?php if( have_rows('slide_buttons') ): ?>
                            <?php while( have_rows('slide_buttons') ): the_row();
                                $button_text = get_sub_field('button_text');
                                $button_url = get_sub_field('button_url');
                                $button_backgroung_color = get_sub_field('button_backgroung_color');
                                $button_text_color = get_sub_field('button_text_color');
                                ?>
                                 <a href="<?php echo $button_url; ?>" class="book_now_btn btn btn-secondary text__capitalize" style="background-color: <?php echo $button_backgroung_color; ?> ; color: <?php echo $button_text_color; ?>;"><?php echo $button_text; ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                      <!-- ===hbanABS_btn==================================== -->
                </div>
            </div>
        </div>
    <?php endif; ?><!-- if show_text_editor is yes -->
    <!-- ============================================================ -->
    <?php if( get_field('show_tours_banner_gallery') == 'yes'): ?> <!-- if show_text_editor is yes -->
    <section class="tours_single_banner pagebanner">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-6 col-md-6 tours_single_col">
                    <!-- =====imgID============================= -->
                    <?php
                        $imgID = get_field('tours_banner_gallery_image_one');
                        $imgSize = "tours_banner_gallery_img1_size";
                        $imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
                    ?>
                    <?php
                    if( !empty($imgArr) ): ?>
                        <div class="tours_single__img img_one" style="background-image: url(<?php echo $imgArr[0]; ?>">
                        </div>
                    <?php else: ?>
                        <div class="tours_single__img img_one" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img1.jpg');">
                        </div>
                    <?php endif; ?>
                    <!-- =====imgID============================= -->
                </div>
                <div class="col-6 col-md-6 tours_single_col">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-6">
                        <!-- =====imgID============================= -->
                        <?php
                            $imgID_two = get_field('tours_banner_gallery_image_two');
                            $imgSize_two = "tours_banner_gallery_img2_size";
                            $imgArr_two = wp_get_attachment_image_src( $imgID_two, $imgSize_two );
                        ?>
                        <?php
                        if( !empty($imgArr_two) ): ?>
                            <div class="tours_single__img img_two" style="background-image: url(<?php echo $imgArr_two[0]; ?> ">
                             </div>
                        <?php else: ?>
                            <div class="tours_single__img img_two" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img2.jpg');">
                             </div>
                        <?php endif; ?>
                        <!-- =====imgID============================= -->
                        </div>
                        <div class="col-6 col-md-6">
                        <!-- =====imgID============================= -->
                        <?php
                            $imgID_three = get_field('tours_banner_gallery_image_three');
                            $imgSize_three = "tours_banner_gallery_img2_size";
                            $imgArr_three = wp_get_attachment_image_src( $imgID_three, $imgSize_three );
                        ?>
                        <?php
                        if( !empty($imgArr_three) ): ?>
                            <div class="tours_single__img img_three" style="background-image: url(<?php echo $imgArr_three[0]; ?> ">
                        </div>
                        <?php else: ?>
                        <div class="tours_single__img img_three" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img3.jpg');">
                        </div>
                        <?php endif; ?>
                        <!-- =====imgID============================= -->
                        </div>
                    </div>
                     <div class="row no-gutters">
                        <div class="col-6 col-md-6">
                            <!-- =====imgID============================= -->
                            <?php
                                $imgID_four = get_field('tours_banner_gallery_image_four');
                                $imgSize_four = "tours_banner_gallery_img2_size";
                                $imgArr_four = wp_get_attachment_image_src( $imgID_four, $imgSize_four );
                            ?>
                            <?php
                            if( !empty($imgArr_four) ): ?>
                                <div class="tours_single__img img_four" style="background-image: url(<?php echo $imgArr_four[0]; ?> ">
                                </div>

                            <?php else: ?>
                               <div class="tours_single__img img_four" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img4.jpg');">
                                </div>
                            <?php endif; ?>
                            <!-- =====imgID============================= -->
                        </div>
                        <div class="col-6 col-md-6">
                            <!-- =====imgID============================= -->
                            <?php
                                $imgID_five = get_field('tours_banner_gallery_image_five');
                                $imgSize_five = "tours_banner_gallery_img2_size";
                                $imgArr_five = wp_get_attachment_image_src( $imgID_five, $imgSize_five );
                            ?>
                            <?php
                            if( !empty($imgArr_five) ): ?>
                                <div class="tours_single__img img_five" style="background-image: url(<?php echo $imgArr_five[0]; ?> ">
                                </div>
                            <?php else: ?>
                               <div class="tours_single__img img_five cccc" style="background-image: url('<?php echo bloginfo('template_url') ?>/images/img5.jpg');">
                                </div>
                            <?php endif; ?>
                            <!-- =====imgID============================= -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========gallery_images===================================== -->
        <div class="show_all_images">
            <a href="javascript:;" class="btn btn-white" data-fancybox-trigger="preview" ><img src="<?php echo bloginfo('template_url') ?>/images/gallery_icon.png" alt=""> Show All Photos</a>
            <div class="div" style="display:none;">
                <?php
                $gallery_images = get_field('gallery_images');
                if( $gallery_images ): ?>
                    <?php foreach( $gallery_images as $image_id ): ?>
                        <a href="<?php echo esc_url($image_id['url']); ?>" data-fancybox="preview"   data-width="1500" data-height="1000">
                            <img src="<?php echo esc_url($image_id['url']); ?>" alt="<?php echo esc_attr($image_id['alt']); ?>" />
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
         <!-- =========gallery_images==================================== -->
    </section>
    <!-- ============================================= -->
    <?php endif; ?><!-- if show_text_editor is yes -->
<?php endif; ?>
<!-- =====tours_single_banner==========end========================== -->
<!-- =====tours_single_banner==========end========================== -->
<!-- =====tours_single_banner==========end========================== -->
<!-- ================================= -->
</header>