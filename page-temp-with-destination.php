<?php /* Template Name: Destination Tab */ ?>
<?php get_header(); ?>
<main class="main page_with_Tabs">
     <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/contentnotitle', 'page' );
        endwhile;
        ?>
    </div>
<!-- ================================== -->
<!-- ================================== -->
<!-- ================================== -->
    <div id="hotspotImg" class="hotspotImg hotspotImg_map responsive-hotspot-wrap row" style="display:none;">
        <img src="<?php echo bloginfo('template_url') ?>/images/google map_image.jpg" class="img-responsive" alt="map_image"  width="1920" height="1170">
        <!-- =============================== -->
        <?php if( have_rows('adventures_add_point_on_map') ): ?>
            <?php while( have_rows('adventures_add_point_on_map') ): the_row();
                $point_icon = get_sub_field('point_icon');
                $point_on_map_xaxis = get_sub_field('point_on_map_xaxis');
                $point_on_map_yaxis = get_sub_field('point_on_map_yaxis');
                $name_of_point = get_sub_field('name_of_point');
                $tooltip_image = get_sub_field('tooltip_image');
                ?>
                <div class="hot-spot" x="<?php echo $point_on_map_xaxis; ?>" y="<?php echo $point_on_map_yaxis; ?>">
                    <div class="circle innerCrucial">
                        <span class="place_bag">
                            <?php echo wp_get_attachment_image( $point_icon, 'full' ); ?>
                        </span>
                    </div>
                    <span class="place_name">
                        <?php echo $name_of_point; ?>
                    </span>
                    <div class="tooltip">
                        <div class="text-row">
                            <?php echo wp_get_attachment_image( $tooltip_image, 'full' ); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- =============================== -->
    </div>
<!-- ================================== -->
<!-- ================================== -->
<!-- ================================== -->
    <section class="page_tabs">
        <div class="container">
            <h1 class="heading_with_bottom_line">Select a Park to Visit</h1>
            <ul id="tabs" class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link" data-toggle="tab" role="tab">Adventures</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link active" data-toggle="tab" role="tab">Destinations</a>
                </li>
            </ul>
        </div>
<!-- ======tab-content===========start=============== -->
<!-- ======tab-content===========start=============== -->
<!-- ======tab-content===========start=============== -->
            <div id="content" class="tab-content" role="tablist">
<!-- ======pane-A===========start=============== -->
<!-- ======pane-A===========start=============== -->
<!-- ======pane-A===========start=============== -->
                <div id="pane-A" class="card tab-pane fade show" role="tabpanel" aria-labelledby="tab-A">
                    <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                        <div class="container">
                            <div class="tab-slider--nav mg_top_50">
                            <?php $taxonomy = 'advantures';
                                      $args = array('taxonomy' => $taxonomy,'orderby' => 'name','order'   => 'ASC','hide_empty' => 0);
                                      $cats = get_categories($args); ?>
                                        <select name="adv-cat" id="adv-cat-1" data-base-url='<?php echo site_url(); ?>'>
                                            <?php foreach($cats as $cat) { ?>
                                                <?php  $taxonomy = $cat->taxonomy;
                                                    $term_id = $cat->term_id; 
                                                    $slug =  $taxonomy . '_' . $term_id; ?>
                                                <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
                                            <?php } ?>
                                        </select>
                            <?php $taxonomy = 'locations';
                                      $args = array('taxonomy' => $taxonomy,'orderby' => 'name','order'   => 'ASC','hide_empty' => 0);
                                      $cats = get_categories($args); ?>
                                        <select name="loc-cat" id="loc-cat-1" data-base-url='<?php echo site_url(); ?>'>
                                            <?php foreach($cats as $cat) { ?>
                                                <?php  $taxonomy = $cat->taxonomy;
                                                    $term_id = $cat->term_id; 
                                                    $slug =  $taxonomy . '_' . $term_id; ?>
                                                <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
                                            <?php } ?>
                                        </select>
                                <ul class="tab-slider--tabs inline_tabs">
                                    <li class="tab-slider--trigger active tabs_on" rel="tab1"></li>
                                    <li class="tab-slider--trigger tabs_off" rel="tab2"></li>
                                    
                                </ul>
                                
                                <span class="switch_title inline_tabs">Map View</span>
                            </div>
                        </div>
                        <div class="tab-slider--container">
                            <div id="tab1" class="tab-slider--body">
                                <div class="container">
                                    <div class="card-body">
                                        <?php echo do_shortcode('[advanture]'); ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-slider--body">
                                <div class="container-fluid featured__map">
                                    <?php echo do_shortcode('[tour_with_maps]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- ======pane-A===========ends=============== -->
<!-- ======pane-A===========ends=============== -->
<!-- ======pane-A===========ends=============== -->
<!-- ============================================================================= -->
<!-- ======pane-B===========start=============== -->
<!-- ======pane-B===========start=============== -->
<!-- ======pane-B===========start=============== -->

                <div id="pane-B" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-B">
                    <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                        <!-- ===================================================== -->
                        <!-- ====================================================== -->
                        <div class="container">
                            <div class="tab-slider--navs tab-slider--nav mg_top_50">
                                <ul class="tab-slider--tabss inline_tabs">
                                    <li class="tab-slider--trigger active tabs_on" rel="tabs1"></li>
                                    <li class="tab-slider--trigger tabs_off" rel="tabs2"></li>
                                </ul>
                                <span class="switch_title inline_tabs">Map View</span>
                            </div>
                        </div>
                        <div class="tab-slider--container">
                            <div id="tabs1" class="tab-slider--bodys">
                                <div class="container">
                                    <div class="card-body">
                                         <?php echo do_shortcode('[destination]'); ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs2" class="tab-slider--bodys">
                                <div class="container-fluid featured__map">
                                    <?php echo do_shortcode('[tour_with_maps_loc]'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- ======================================================= -->
                        <!-- ======================================================= -->
                    </div>
                </div>
<!-- ======pane-B===========ends=============== -->
<!-- ======pane-B===========ends=============== -->
<!-- ======pane-B===========ends=============== -->
            </div>
<!-- ======tab-content===========start=============== -->
<!-- ======tab-content===========start=============== -->
<!-- ======tab-content===========start=============== -->
        </div>
    </section>
</main><!-- #main -->

<?php get_footer();?>