<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-polartank/css/reset.css">
		<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/theme-polartank/css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</head>

<body <?php body_class(); ?> >
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div class="polarBar"><p class="txt txt--polarBar">Go To:</p><a href="http://polarservicecenters.com" class="link link--topLvl" target="_blank">Polar Service Centers</a></div> <!-- END .polarBar -->
			<section class="branding">
				<a href="<?php bloginfo('url'); ?>/"><img class="branding__logo" src="<?php bloginfo('url'); ?>/wp-content/themes/img/polar_logo.svg" alt="Polar Tank Trailer"></a>
			</section>
			
			<nav id="menu" role="navigation">
				<a href="#menu" class="burger" title="Show Navigation">Menu</a>
    		<a href="#" class="burger" title="Hide Navigation">Menu</a>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>