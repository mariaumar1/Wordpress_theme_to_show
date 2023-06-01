<?php get_header(); ?>
<?php $term = get_queried_object();  ?>
    <!-- ============================================================ -->
       <?php if( get_field('show_banner_slider') == 'yes'): ?> <!-- if show_text_editor is yes -->
        <div class="homeBanner_with_slider ">
             <!-- ========homeBanner_slider=================== -->
            <div class="homeBanner_slider">
                <!-- =========================== -->
                <?php if( have_rows('banner_slider_repeater') ): ?>
                    <?php while( have_rows('banner_slider_repeater') ): the_row();
                        $add_banner_slide_image = get_sub_field('add_banner_slide_image', $term);
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
                        <?php $slide_icon_image = get_field('slide_icon_image',  $term);
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
                        <?php if( get_field('slide_paragraph') ): ?>
                            <p><?php the_field('slide_paragraph'); ?></p>
                        <?php endif; ?>
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
    <section class="tours_single_banner">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 tours_single_col">
                    <!-- =====imgID============================= -->
                    <?php
                        $imgID = get_field('tours_banner_gallery_image_one',  $term);
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
                <div class="col-md-6 tours_single_col">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                        <!-- =====imgID============================= -->
                        <?php
                            $imgID_two = get_field('tours_banner_gallery_image_two',  $term);
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
                        <div class="col-md-6">
                        <!-- =====imgID============================= -->
                        <?php
                            $imgID_three = get_field('tours_banner_gallery_image_three',  $term);
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
                        <div class="col-md-6">
                            <!-- =====imgID============================= -->
                            <?php
                                $imgID_four = get_field('tours_banner_gallery_image_four', $term);
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
                        <div class="col-md-6">
                            <!-- =====imgID============================= -->
                            <?php
                                $imgID_five = get_field('tours_banner_gallery_image_five',  $term);
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

    <?php endif; ?><!-- if show_text_editor is yes -->
<main class="destination">
	<div class="container">
		<div class="row trip-detail">
		<div class="col-lg-8 col-md-8 col-sm-8 trip-detail-col">
				<div class="trip-description">
					<?php $description = get_field('description'); ?>
					<?php if($description) : ?>
					<?php echo $description ?>
					<?php endif; ?>
				</div>	
			</div>
			<?php if( have_rows('key_highlights') ):  ?>
			<div class="col-lg-4 col-md-4 col-sm-4 trip-detail-col">
				<div class="key-highlights">
					<h3><?php the_field('keyword_title'); ?></h3>
					<?php  while( have_rows('key_highlights') ) : the_row(); ?>
					<div class="highlight-title">
							<p>
							<?php $icon = get_sub_field('highlight_icon');
									if( !empty( $icon  ) ): ?>
										<img src="<?php echo esc_url($icon ['url']); ?>" alt="<?php echo esc_attr($icon ['alt']); ?>" />
							<?php endif; ?>
							<?php the_sub_field('highlight_title'); ?>
							</p>
							<?php if( have_rows('keywords') ):  ?>
							<div class="keywords">
								<ul>
									<?php  while( have_rows('keywords') ) : the_row(); ?>
									<li><?php the_sub_field('highlight_keywords') ?></li>
									<?php endwhile; ?>
								</ul>
							</div>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</main>
	 
	












<?php get_footer();?>