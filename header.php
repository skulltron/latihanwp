<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body <?php body_class(); ?>>
   
    <div id="page">

        <a href="#content" class="skip-link screen-reader-text">
            <?php esc_html__( 'Skip to Content', 'wphierarchy' )?>
        </a>

        <header id="masthead" class="site-header" role="banner">

            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) );?>" rel="home">
                    <p class="site-title"><?php bloginfo( 'name' ); ?></p>
                </a>
                <p class="site-description"><?php bloginfo( 'description' )?></p>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                    $args = [
                        'theme-location' => 'main-menu'
                    ];
                    wp_nav_menu( $args )
                ?>
            </nav>

        </header>
        
        <div id="content">