<?php 

$show_banner = zafram_options('zafram_arcive_banner_toggle', 'show');
  
$banner_url = zafram_options('zafram_archive_banner_upload');

$how_title = zafram_options('zafram_arcive_title', 'show');
$show_breadcrumbs = zafram_options('zafram_archive_banner_breadcrumb', 'show');
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
            <?php if(have_posts() && $how_title == 'show') {
                        the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
                    }
                if($show_breadcrumbs == 'show') {    
                zafram_breadcrumbs(); 
                } ?>
        </div>
    </div>
</div>