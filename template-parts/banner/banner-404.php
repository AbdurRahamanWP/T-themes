<?php 

$show_banner = zafram_options('zafram_404_banner_toggle', 'show');
$banner_title = zafram_options('zafram_404_banner_title', '404');
  
$banner_url = zafram_options('zafram_404_banner_upload');

$how_title = zafram_options('zafram_404_banner_title', 'show');
$show_breadcrumbs = zafram_options('zafram_404_banner_breadcrumb', 'show');

$banner_background_url = ZAFRAM_IMAGES.'/blog/banner/banner.png';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}

if(!class_exists('Redux')){
    $banner_background_url = '';
  }
?>
<?php if($banner_background_url != '') :  ?>
    <div class="blog-breadcrumbs-area-two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
    <div class="overlay_bg"></div>
<?php else: ?>
<div class="blog-breadcrumbs-area-two banner-with-color">
<?php endif; ?>
        <div class="container">
            <div class="breadcrumb_content text-white text-center">
            <?php if($show_banner == 'show') :  ?>    
                <h1 class="page-title page_title"><?php echo  esc_html($banner_title); ?></h1>
                <?php 
             endif;   
                  if($show_breadcrumbs == 'show') {    
                    zafram_breadcrumbs(); 
                    } ?>
            </div>
        </div>
</div>