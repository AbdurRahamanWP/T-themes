<?php 
$opt = get_option('zafram');

$zafram_header_layout  = isset( $opt['zafram_header_layout']) ? $opt['zafram_header_layout'] : 'container';
$zafram_menu_layout    = isset( $opt['zafram_menu_layout']) ? $opt['zafram_menu_layout'] : 'center';
$is_topbar    = isset( $opt['is_topbar']) ? $opt['is_topbar'] : 'no';

?>




<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php if($zafram_header_layout == 'container'){echo "container";} else {echo "container-fluid";} ?>">
        <?php zafram_logo(); ?>
        <div class="collapse navbar-collapse <?php if($zafram_menu_layout == 'center'){echo "justify-content-center";}elseif($zafram_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">
            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu ms-lg-auto',
                        'container'  => '',
                        'theme_location' => 'primary',
                        'walker'         => new zafram_Navwalker(),
                        'fallback_cb'     => false,
                ) ); 
            ?>
        </div>
        <?php get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
    </div>
</nav>