<?php
    //Add Theme Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
    add_theme_support( 'html5' );
    add_theme_support( 'automated-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter_content' );

    //Load CSSS
    function wphierarchy_enqueue_style() {
    
        wp_enqueue_style( 'main-css', get_stylesheet_directory_uri(), '/style.css', [], time(), 'all' );

    }

    add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_style' );

    //Register Menu Locations
    register_nav_menus( [
        'main-menu' => esc_html__( 'Main Menu Lele', 'wp-hierarchy' ),
    ]);

    //Setup Widget Areas
    function wphierarchy_widgets_init(){
        register_sidebar( [
            'name'          => esc_html( 'Main Sidebar', 'wphierarchy' ),
            'id'            => 'main-sidebar',
            'description'   => esc_html( 'Add widgets for main sidebar here', 'wphierarchy' ),
            'before-widget' => '<section class="widget">',
            'after-widget'  => '</section>',
            'before-title'  => '<h2 class="widget-title">',
            'after-title'   => '</h2>'

        ] );
    }
    add_action( 'widgets_init', 'wphierarchy_widgets_init' );

?>