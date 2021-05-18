<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="en-us">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://use.typekit.net/qzm1mvc.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/hamburgers.min.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
		
		
		<?php wp_head(); ?> 
	</head>

	<body>
	<header>
		<div class="container">
			<div class="headerLogo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sensatek-logo-white.svg" alt="Sensatek Logo">
				</a>
			</div>
			<div class="hamburgerIcon">
				<div class="hamburger hamburger--spring">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
			<nav class="menuWrapper desktopNav">
				<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
			</nav>
		</div>

	</header>
	<nav class="menuWrapper mobileNav">
		<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
	</nav>

