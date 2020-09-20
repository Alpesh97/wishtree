<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon/favicon-16x16.png">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<header class="site-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-logo-section">
                <a href="<?php echo get_site_url(); ?>" class="site-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wt-wishtree_white.png" alt="Site logo"/></a>
            </div>
            <div class="header-menu-section">
                <nav class="main-navigation">
                    
                    <div id="mega-menu-wrap-header-menu" class="mega-menu-wrap">
                        <div class="mega-menu-toggle">
                            <span class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                        <?php 
                            wp_nav_menu( array( 'menu' => 'main-menu' ,
                                'container'  => '',
                                'container_class' => '',                                
                                'menu_id' => 'main-menu', 
                                'menu_class'        => 'mega-menu max-mega-menu', //nav navbar-nav                                 
                                //'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                //'walker'            => new wp_bootstrap_navwalker()
                            ));
                        ?>
                        <!-- <ul class="mega-menu max-mega-menu">
                            <li class="submenu">
                                <a href="#">About</a>
                                <div class="submenu-wrapper">
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Solution</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul> -->
                    </div>
                </nav>
                <div class="search-contact-box">
                    <div class="search-box">
                        <i class="search-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.svg" alt="Search icon"/></i>
                        <div class="search-wrapper">
                            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <div>
                                    <label class="screen-reader-text" for="s">Search for:</label>
                                    <input type="text" value="" name="s" id="s" autocomplete="off" placeholder="Search">
                                    <input type="submit" id="searchsubmit" value="Go">
                                </div>
                            </form>
                        </div>
                    </div>    
                    <a class="contact-link white-fill-btn" href="<?php echo get_permalink(1103); ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>
</header>
<body <?php body_class(); ?>>
<main>