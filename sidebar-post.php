<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?>

<div class="sidebar__single">


<?php $tags = get_tags(); ?>
    <div class="sidebar__single_tags sidebar_box">
        <h5 class="sidebar_box_heading">Tags</h5>
        <div class="sidebar_box_inner">
            <?php foreach ( $tags as $tag ) { ?>
               <?php /* <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"></a> */?>
                    <span class="tag_box"><?php echo $tag->name; ?></span>
            <?php } ?>
        </div>

    </div>
<!-- ============================= -->
    <div class="sidebar__single_Search sidebar_box">
        <h5 class="sidebar_box_heading">Search Tales from the Tundra</h5>
        <div class="sidebar_box_inner">
            <?php dynamic_sidebar( 'sidebar-single' ); ?>
        </div>
    </div>
<!-- ============================= -->
</div>