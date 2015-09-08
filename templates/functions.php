<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.8.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');


function HSE_2015_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_script( 'cycle2', get_template_directory_uri() . '/js/cycle2.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/style.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'HSE_2015_resources');

// Get top ancestor
function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Does page have children?
function has_children() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

// Customize excerpt word count length
function custom_excerpt_length() {
    return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function HSE_2015_setup() {
    
    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    
    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('square-thumbnail', 80, 80, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));
    
    // Add post type support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'HSE_2015_setup');

// Add Widget Areas
function ourWidgetsInit() {
    
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
}

add_action('widgets_init', 'ourWidgetsInit');

// Customize Appearance Options
function proscia15_customize_register( $wp_customize ) {

    $wp_customize->add_setting('p15_link_color', array(
        'default' => '#006ec3',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('p15_btn_color', array(
        'default' => '#006ec3',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('p15_btn_hover_color', array(
        'default' => '#004C87',
        'transport' => 'refresh',
    ));

    $wp_customize->add_section('p15_standard_colors', array(
        'title' => __('Standard Colors', 'proscia15'),
        'priority' => 30,
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p15_link_color_control', array(
        'label' => __('Link Color', 'proscia15'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_link_color',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p15_btn_color_control', array(
        'label' => __('Button Color', 'proscia15'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_btn_color',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p15_btn_hover_color_control', array(
        'label' => __('Button Hover Color', 'proscia15'),
        'section' => 'lwp_standard_colors',
        'settings' => 'lwp_btn_hover_color',
    ) ) );

}

add_action('customize_register', 'proscia15_customize_register');



// Output Customize CSS
function proscia15_customize_css() { ?>

    <style type="text/css">

        a:link,
        a:visited {
            color: <?php echo get_theme_mod('p15_link_color'); ?>;
        }

        .site-header nav ul li.current-menu-item a:link,
        .site-header nav ul li.current-menu-item a:visited,
        .site-header nav ul li.current-page-ancestor a:link,
        .site-header nav ul li.current-page-ancestor a:visited {
            background-color: <?php echo get_theme_mod('p15_link_color'); ?>;
        }

        .btn-a,
        .btn-a:link,
        .btn-a:visited,
        div.hd-search #searchsubmit {
            background-color: <?php echo get_theme_mod('p15_btn_color'); ?>;
        }

        .btn-a:hover,
        div.hd-search #searchsubmit:hover {
            background-color: <?php echo get_theme_mod('p15_btn_hover_color'); ?>;
        }

    </style>

<?php }

add_action('wp_head', 'proscia15_customize_css');

function title_format($content) {
return '%s';
}
add_filter('private_title_format', 'title_format');
add_filter('protected_title_format', 'title_format');

function theme_slug_filter_wp_title( $title ) {
    if ( is_404() ) {
        $title = 'Page not found';
    }
    // You can do other filtering here, or
    // just return $title
    return $title;
}
// Hook into wp_title filter hook
add_filter( 'wp_title', 'theme_slug_filter_wp_title', 11 );