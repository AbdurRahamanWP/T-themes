
<?php 
    $opt = get_option('zafram');
    $shop_title     = isset( $opt['zafram_shop_title']) ? $opt['zafram_shop_title'] : 'Shop Pages';
    $banner_background_url  = isset( $opt['zafram_shop_banner_upload']['url'] ) ? $opt['zafram_shop_banner_upload']['url'] : ZAFRAM_IMAGES.'/blog/banner/blog_details_img.jpg';

?>
<div class="blog_breadcrumbs_area_two shop" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="page-title page_title shop_title">
                    <?php
                        if( is_product_category() ) { 
                           the_archive_title();
                        }elseif(is_shop()){
                            echo esc_html($shop_title,'zafram'); 
                        }else { single_post_title(); } ?></h1>
               <?php 
                 if(!is_product_category() & !is_shop() ) {  zafram_breadcrumbs(); }
                ?> 
            </div>
        </div>
</div>
