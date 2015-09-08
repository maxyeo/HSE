<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hopkins Student Enterprises</title>
        <link href="./wp-content/themes/hse_theme/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./wp-content/themes/hse_theme/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="./wp-content/themes/hse_theme/images/hse_logo.png">

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="./wp-content/themes/hse_theme/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <!-- This is the HSE Header. Add businesses here. -->
        <div id="hse-header" class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="navbar-inner container">
                    <ul class="nav">
                        <li>
                            <a class="brand" href="#">
                                <img id="hse-logo" src="./wp-content/themes/hse_theme/images/hse_logo.png" />
                            </a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li><a href="http://web1.johnshopkins.edu/bluejaycleaners/bjc/">Blue Jay Cleaners</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="http://web1.johnshopkins.edu/~bluejayboxes/">Blue Jay Boxes</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="http://www.hopkinsstudentmovers.com/">Hopkins Student Movers</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="http://web1.johnshopkins.edu/~hse/hcs/">Hopkins Creative Design</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="http://web1.johnshopkins.edu/bluejaycleaners/cdr/">Complete Dorm Room</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="navbar-inner container">
            		<?php wp_nav_menu( array( 'menu' => 'menu', 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav',
                        'after' => '<li class="divider-vertical"></li>') ); ?>
                </div>
        	</div>
        </div>
