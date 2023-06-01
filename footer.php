<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

$trips_title = get_field( 'trips_title', 'option' );
$company_title = get_field( 'company_title', 'option' );
$more_info_title = get_field( 'more_info_title', 'option' );
$connect_with_us_title = get_field( 'connect_with_us_title', 'option' );
$connect_with_us_content = get_field( 'connect_with_us_content', 'option' );

$twitter_url = get_field( 'twitter_url', 'option' );
$facebook_url = get_field( 'facebook_url', 'option' );
$pinterest_url = get_field( 'pinterest_url', 'option' );
$instagram_url = get_field( 'instagram_url', 'option' );
?>
 <!-- ======================================================================= -->
    <footer class="footer">
        <section class="green_section text-center">
            <div class="container">
                <div class="row">
                    <?php if( have_rows('green_section', 'option') ): ?>
                        <?php while( have_rows('green_section', 'option') ): the_row();
                            $green_section_title = get_sub_field('green_section_title', 'option' , 'option' );
                            $green_section_paragraph = get_sub_field('green_section_paragraph', 'option' );
                            $green_section_button_text = get_sub_field('green_section_button_text', 'option' );
                            $green_section_button_url = get_sub_field('green_section_button_url', 'option' );
                            ?>
                            <div class="col-md-4">
                                <div class="green_section__box">
                                    <h4><?php echo $green_section_title; ?></h4>
                                    <p><?php echo $green_section_paragraph; ?></p>
                                    <a href="<?php echo $green_section_button_url; ?>" class="book_now_btn btn btn-secondary "><?php echo $green_section_button_text; ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <!-- ======================================== -->
        <section class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer_bottom__box">
                        <?php if(  !empty( $trips_title ) ): ?>
                            <h6 class="h4"><?php echo $trips_title; ?></h6>
                        <?php endif; ?>
                            <div class="footer_menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'primarytrips_menu',
                                    'menu_id'        => 'primarytrips_menu',
                                    'container'       => 'false',
                                )); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_bottom__box">
                            <?php if(  !empty( $company_title ) ): ?>
                                <h6 class="h4"><?php echo $company_title; ?></h6>
                            <?php endif; ?>
                            <div class="footer_menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'primarycompany_menu',
                                    'menu_id'        => 'primarycompany_menu',
                                    'container'       => 'false',
                                )); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_bottom__box">
                            <?php if(  !empty( $more_info_title ) ): ?>
                                <h6 class="h4"><?php echo $more_info_title; ?></h6>
                            <?php endif; ?>
                            <div class="footer_menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'primarymoreinfo_menu',
                                    'menu_id'        => 'primarymoreinfo_menu',
                                    'container'       => 'false',
                                )); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_bottom__box">
                            <?php if(  !empty( $connect_with_us_title ) ): ?>
                                <h6 class="h4"><?php echo $connect_with_us_title; ?></h6>
                            <?php endif; ?>
                            <div class="footer_bottom__social">
                                <ul>
                                    <li>
                                        <a href="<?php echo $twitter_url; ?>" target="_blank">
                                            <img src="<?php echo bloginfo('template_url') ?>/images/twittericon.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $facebook_url; ?>" target="_blank">
                                            <img src="<?php echo bloginfo('template_url') ?>/images/facebookicon2.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $pinterest_url; ?>" target="_blank">
                                            <img src="<?php echo bloginfo('template_url') ?>/images/pinteresticon.png" alt="">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $instagram_url; ?>" target="_blank">
                                            <img src="<?php echo bloginfo('template_url') ?>/images/Instagramicon.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer_bottom_info">
                                <?php if(  !empty( $connect_with_us_content ) ): ?>
                                    <?php echo $connect_with_us_content; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- ======================================================================= -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="homeicon" viewBox="0 0 495.398 495.398">
            <title>home-icon-silhouette</title>
            <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z" />
            <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z" />
        </symbol>
        <symbol id="crossbtn" viewBox="0 0 27.965 27.965">
            <title>remove-button</title>
            <path d="M13.98,0C6.259,0,0,6.261,0,13.983c0,7.721,6.259,13.982,13.98,13.982c7.725,0,13.985-6.262,13.985-13.982 C27.965,6.261,21.705,0,13.98,0z M19.992,17.769l-2.227,2.224c0,0-3.523-3.78-3.786-3.78c-0.259,0-3.783,3.78-3.783,3.78 l-2.228-2.224c0,0,3.784-3.472,3.784-3.781c0-0.314-3.784-3.787-3.784-3.787l2.228-2.229c0,0,3.553,3.782,3.783,3.782 c0.232,0,3.786-3.782,3.786-3.782l2.227,2.229c0,0-3.785,3.523-3.785,3.787C16.207,14.239,19.992,17.769,19.992,17.769z" />
        </symbol>
        <symbol id="facebook-app-logo" viewBox="0 0 60.734 60.733">
            <title>facebook-app-logo</title>
            <path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914 v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462 v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z" />
        </symbol>
        <symbol id="twitter-social-logotype" viewBox="0 0 94 94">
            <title>twitter-social-logotype</title>
            <path d="M89,0H5C2.239,0,0,2.239,0,5v84c0,2.761,2.239,5,5,5h84c2.762,0,5-2.239,5-5V5C94,2.239,91.762,0,89,0z M85.874,23.302 c-2.122,3.177-4.752,5.922-7.817,8.164c0.024,0.616,0.036,1.233,0.036,1.855c0,22.315-16.979,45.396-45.396,45.396 c-8.687,0-17.144-2.479-24.458-7.169c-0.152-0.097-0.217-0.286-0.155-0.456c0.061-0.169,0.234-0.273,0.409-0.254 c1.229,0.146,2.482,0.219,3.729,0.219c6.758,0,13.156-2.089,18.567-6.053c-6.487-0.547-12.062-4.938-14.068-11.199 c-0.041-0.131-0.011-0.271,0.08-0.375c0.09-0.103,0.229-0.146,0.362-0.123c1.797,0.342,3.624,0.362,5.387,0.078 c-6.69-2.08-11.393-8.346-11.393-15.481l0.002-0.208c0.003-0.136,0.077-0.26,0.193-0.326c0.118-0.068,0.264-0.069,0.381-0.003 c1.743,0.968,3.677,1.591,5.655,1.828c-3.844-3.064-6.102-7.709-6.102-12.678c0-2.867,0.76-5.686,2.194-8.148 c0.064-0.109,0.178-0.182,0.305-0.19c0.127-0.013,0.25,0.042,0.329,0.142c7.87,9.651,19.444,15.595,31.821,16.358 c-0.208-1.04-0.312-2.11-0.312-3.191c0-8.936,7.271-16.205,16.206-16.205c4.396,0,8.639,1.806,11.681,4.96 c3.432-0.699,6.697-1.96,9.715-3.75c0.139-0.082,0.312-0.069,0.438,0.03c0.125,0.101,0.176,0.268,0.126,0.421 c-1.021,3.199-3.018,5.989-5.696,8.004c2.523-0.439,4.974-1.182,7.302-2.214c0.157-0.072,0.342-0.027,0.453,0.104 C85.959,22.97,85.971,23.158,85.874,23.302z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 512 512">
            <title>instagram</title>
            <path d="m376 91h-240c-24.8125 0-45 20.1875-45 45v240c0 24.8125 20.1875 45 45 45h240c24.8125 0 45-20.1875 45-45v-240c0-24.8125-20.1875-45-45-45zm-120 270c-57.890625 0-105-47.109375-105-105s47.109375-105 105-105 105 47.109375 105 105-47.109375 105-105 105zm105-180c-16.539062 0-30-13.460938-30-30s13.460938-30 30-30 30 13.460938 30 30-13.460938 30-30 30zm0 0" />
            <path d="m256 181c-41.351562 0-75 33.648438-75 75s33.648438 75 75 75 75-33.648438 75-75-33.648438-75-75-75zm0 0" />
            <path d="m436 0h-360c-41.351562 0-76 34.648438-76 76v360c0 41.351562 34.648438 76 76 76h360c41.351562 0 76-34.648438 76-76v-360c0-41.351562-34.648438-76-76-76zm15 376c0 41.351562-33.648438 75-75 75h-240c-41.351562 0-75-33.648438-75-75v-240c0-41.351562 33.648438-75 75-75h240c41.351562 0 75 33.648438 75 75zm0 0" />
        </symbol>
        <symbol id="youtube" viewBox="0 0 512 512">
            <title>youtube</title>
            <path d="m224.113281 303.960938 83.273438-47.960938-83.273438-47.960938zm0 0" />
            <path d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-59.113281 256.261719s0 51.917969-6.585938 76.953125c-3.691406 13.703125-14.496094 24.507812-28.199219 28.195312-25.035156 6.589844-125.175781 6.589844-125.175781 6.589844s-99.878906 0-125.175781-6.851562c-13.703125-3.6875-24.507813-14.496094-28.199219-28.199219-6.589844-24.769531-6.589844-76.949219-6.589844-76.949219s0-51.914062 6.589844-76.949219c3.6875-13.703125 14.757812-24.773437 28.199219-28.460937 25.035156-6.589844 125.175781-6.589844 125.175781-6.589844s100.140625 0 125.175781 6.851562c13.703125 3.6875 24.507813 14.496094 28.199219 28.199219 6.851562 25.035157 6.585938 77.210938 6.585938 77.210938zm0 0" />
        </symbol>
        <symbol id="quote" viewBox="0 0 409.294 409.294"><title>quote</title><path d="m233.882 29.235v175.412h116.941c0 64.48-52.461 116.941-116.941 116.941v58.471c96.728 0 175.412-78.684 175.412-175.412v-175.412z"/><path d="m0 204.647h116.941c0 64.48-52.461 116.941-116.941 116.941v58.471c96.728 0 175.412-78.684 175.412-175.412v-175.412h-175.412z"/></symbol><symbol id="long-right-arrow" viewBox="0 0 16 16"><title>long-right-arrow</title><path d="M1 9v-2h11v-2l3 3-3 3v-2z"/></symbol>

        <symbol id="right-chevron" viewBox="0 0 444.819 444.819">
            <title>right-chevron</title>
            <path d="M352.025,196.712L165.884,10.848C159.029,3.615,150.469,0,140.187,0c-10.282,0-18.842,3.619-25.697,10.848L92.792,32.264 c-7.044,7.043-10.566,15.604-10.566,25.692c0,9.897,3.521,18.56,10.566,25.981l138.753,138.473L92.786,361.168 c-7.042,7.043-10.564,15.604-10.564,25.693c0,9.896,3.521,18.562,10.564,25.98l21.7,21.413 c7.043,7.043,15.612,10.564,25.697,10.564c10.089,0,18.656-3.521,25.697-10.564l186.145-185.864 c7.046-7.423,10.571-16.084,10.571-25.981C362.597,212.321,359.071,203.755,352.025,196.712z" />
            </symbol>


    </svg>
<?php wp_footer(); ?>
<script>
jQuery(document).ready(function() {
    jQuery('script').each(function() {
        var sc = jQuery(this);
        if ( !sc.attr('defer') ) { sc.attr('defer', 'defer'); }
    });
});
</script>
<script async src="https://alaskaalpineadventures.app.resmarksystems.com/javascript/resmark-order.js?entityId=59d2ad4eef3a7375a69a031d&useBrandColors=true"></script>
<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/jqHotspot-plugins-hashe.js"></script>
</body>
</html>
