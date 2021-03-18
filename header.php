<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header class="site-header header--transparent header--sticky">
        <section class="row site_header__row ">
            <div class="site-header__left">
                <div class="site-branding">
                    <a href="<?php echo site_url(); ?>" class="logo-text">
                        <?php echo bloginfo('name'); ?>
                    </a>
                </div>
            </div>
            <div class="site-header__right">
                <div class="site-search"><i class="fa fa-search" aria-hidden="true"></i></div>
                <!-- <div class="site-mode">Mode</div> -->
                <div class="mobile-menu" id="toogle-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <nav class="site-navigation" id="site-navigation">
                    <?php 
                    /* 
                    * Primary Menu
                    * Document: https://developer.wordpress.org/reference/functions/wp_nav_menu/
                    */
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class' => 'navbar',
                            'container_class' => 'main-navigation'
                        )
                    )
                ?>
                </nav>
                
            </div>
        </section>
    </header>