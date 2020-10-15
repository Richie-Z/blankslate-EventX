<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header">
			<div id="branding">
				<div id="site-title">
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
				</div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</div>
			<ul id="menu-nav">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#content">Event</a></li>
				<li><a href="#contact">Sponsor</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<nav id="menu">
				<div id="search"><?php get_search_form(); ?></div>
			</nav>
		</header>
		<section id="home">
		</section>
		<section id="about">
			<div class="heading">
				<h2>About Event-X</h2>
			</div>
			<div id="contentBx">
				<div id="aboutBx">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div id="w50">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/music-fest.jpeg"/>
				</div>
			</div>

		</section>
		<div id="container">