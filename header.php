<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>



<body> 
    <div id="site-container">



        <nav id="top-navi">
            <?php 
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
            ]);
            ?>
        </nav>



        
<header id="site-header">
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            
            <div class="site-description">
                <p><?php bloginfo('description'); ?></p>
            </div>
        </header>

        <main class="site-main">
