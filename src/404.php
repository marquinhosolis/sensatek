<?php get_header(); ?>
<div class="page404title"></div>
<main class="page404">
	<div class="wrapper404Shadow"></div>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="page404Dots">
	<div class="container">
		<div class="wrapper404">
			<h1>404</h1>
			<p>Sorry, we couldn’t find that page.</p>
			<a href="<?php echo site_url(); ?>">GO BACK TO HOME <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</main>

<?php get_footer(); ?>
