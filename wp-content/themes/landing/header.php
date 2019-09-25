<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8N3SG2');</script>
<!-- End Google Tag Manager -->
	
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8N3SG2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-outer">	
	<div class="header wow fadeIn" id="header">
    	<div class="container-fluid">
        	<div class="content">
           	 <div class="header-inner">
                <div class="header-side header-side-left">
                    <div class="header-logo-container">
                    	<?php
							the_custom_logo();
						?>
                        <!-- <a href="#">
                            <div class="header-logo"></div>
                        </a> -->
                    </div>
                </div>
                    <ul class="header-nav">
                        <li class="header-nav-item d-none d-md-block">
                            <a class="anchor-link header-nav-link" href="#section-features">Features</a>
                        </li>
                        <li class="header-nav-item d-none d-md-block">
                            <a class="anchor-link header-nav-link" href="#section-workflow">How It Works</a>
                    
                        </li>
                        <li class="header-nav-item d-none d-md-block">
                            <a class="anchor-link header-nav-link" href="#introduction-video-block">Introduction</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#section-subscribe" class="anchor-link button button-small button-secondary">
                                <span class="button-inner">Get Early Access</span>
                            </a>
                        </li>
                    </ul>
                    <!-- <?php
                    						wp_nav_menu( array(
                    							'theme_location' => 'headermenu',
                    							'menu_id'        => 'Header-menu',
                    							'menu_class'	=>  'header-nav',
                    
                    					) );
                    					?> -->
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
