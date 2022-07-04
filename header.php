<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('');?> <?php if( wp_title('',false) ){ echo '|'; }; ?> <?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <div class="page">
        <header id="musthead" role="banner" class="site-header">
            <div class="primary-headre container clear">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="site logo">
                    </a>
                </div>
                <div class="menu-area">
                    <?php 
                        $args = array(
                            'theme_location'    => 'primary_menu',
                            'container'         => 'nav',
                            'container_class'   => 'site-menu'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </header>