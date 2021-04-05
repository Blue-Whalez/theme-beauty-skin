<header class="site-header header--transparent header--sticky">
    
    <section class="row site_header__row ">
        <div class="site-header__left">

            <div class="site-branding">
                <?php display_site_branding(); ?>
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