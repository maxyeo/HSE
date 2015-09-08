<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo.png" />
    <meta property="og:title" content="<?php the_title(); ?>"/>
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo4.png"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="Hopkins Student Enterprises (HSE) has been established to provide students from all different disciplines with real-world entrepreneurial and leadership experience; to provide a source of employment and income for students of the University; to deliver valuable products and services that benefit the greater Johns Hopkins community; and to foster student innovation and encourage the development of new business."/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <a href="<?php echo home_url(); ?>" id="logo" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo3.png);"></a>
        <nav>
            <?php 
            $args = array(
                'theme_location' => 'primary',
                'container' => '',
                'items_wrap' => '%3$s'
            );
            ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
        <a class="navicon-button x">
            <div class="navicon"></div>
        </a>
    </header>
