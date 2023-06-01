<?php /* Template Name: Links */ ?>

<?php get_header(); ?>
<main class="main page_links">
    <div class="links">
        <div class="container">
            <h1 class="heading_with_bottom_line"><?php the_title(); ?></h1>
            <h4><?php the_field('helpfulllink');?></h4>
            <?php if( have_rows('links') ): ?>

                
                    <?php while( have_rows('links') ) : the_row(); ?>
                         <div class="links_box_head">
                        <div class="row links-row">
                            <div class="col-md-12">
                                <div class="partners">
                                    <h5><?php the_sub_field('partner_name');?><span>(<?php the_sub_field('num_link');?>)</span></h5>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php if( have_rows('link_details') ): ?>
                        <?php while( have_rows('link_details') ) : the_row(); ?>
                            <div class="links_box">
                             <div class="row links-row">
                                <div class="col-md-2">
                                    <div class="link-image">
                                        <?php $linkimage = get_sub_field('link_image');
                                            if( !empty( $linkimage ) ): ?>
                                                <img src="<?php echo esc_url($linkimage['url']); ?>" alt="<?php echo esc_attr($linkimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="link-detail">
                                        <div class="link-name">
                                        <?php $linkname = get_sub_field('link_name');
                                            if( $linkname ):
                                                $link_url = $linkname['url'];
                                                $link_title = $linkname['title'];
                                                $link_target = $linkname['target'] ? $linkname['target'] : '_self';
                                                ?>
                                               <h5> <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h5>
                                        <?php endif; ?>
                                        </div>
                                        <div class="link-description">
                                            <p><?php the_sub_field('link_description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php  endwhile; ?>
            <?php  endif; ?>
            <?php  endwhile; ?>
            <?php  endif; ?>
        </div>
    </div>
    <!-- ========================== -->
</main><!-- #main -->
<?php get_footer();