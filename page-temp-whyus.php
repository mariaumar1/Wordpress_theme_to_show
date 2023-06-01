<?php /* Template Name: Why Us */ ?>


<?php
$add_video_link = get_field( 'add_video_link' );

 get_header(); ?>
<style>
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.margn_bottom{margin-bottom: 30px;}
.margn_top{margin-top: 30px;}
</style>
<main class="main why_us">
    <div class="container">
        <?php the_title( '<h1 class="heading_with_bottom_line">', '</h1>' ); ?>
        <!-- ========== -->
        <div class="embed-container margn_bottom margn_top">
            <?php if(  !empty( $add_video_link ) ): ?>
                 <iframe src="<?php  echo  $add_video_link ; ?>" frameborder="0" allowfullscreen=""></iframe>
            <?php else: ?>
                 <iframe src="https://www.youtube.com/embed//9KcyVLdlTEw" frameborder="0" allowfullscreen=""></iframe>
            <?php endif; ?>
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
    </div>
</main><!-- #main -->
<?php get_footer();