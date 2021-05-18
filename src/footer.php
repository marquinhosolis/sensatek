<footer>
	<div class="container">
		<div class="footerWrapper" data-aos="fade-up">
			<div class="footerSocial">
				<a href="<?php echo site_url(); ?>" class="footerLogo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sensatek-logo-white.svg" alt="Sensatek Logo">
				</a> <br>
				<div>
					<a href="#facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#linkedin" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="#youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
			</div>
			<address>
				<a href="tel:3862816750" class="footerTel">386.281.6750</a>
				<a href="https://goo.gl/maps/oMPFsr8iXNhQYaEq6">
					1 Aerospace Boulevard <br>
					MicaPlex Suite 204 <br>
					Daytona Beach, Florida 32114  <br>
				</a>
			</address>

			<div class="footerSubscribeForm">
				Subscribe for the latest Sensatek news
				<?php echo do_shortcode('[formidable id=2]'); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="logoNSF">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nsf-logo.png" alt="">
			<p>Research and development at Sensatek has been generously funded in part by STTR grants from the National Science Foundation.</p>
		</div>
		<div class="dppaLogo">
			<?php require_once('logo-dppa-footer.php'); ?>
		</div>
	</div>
</footer>

<script src="https://use.fontawesome.com/0464cae7b5.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
<?php wp_footer(); ?> 
<div id="datasheetHiddenFileUrl">
    <?php 
        $datasheetFile = get_field('datasheet_file', 25); 
        echo $datasheetFile;
    ?>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>
</html>
