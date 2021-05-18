<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
	<main class="contactPage">
        <section class="homePageCover contactPageCover" style="background-image: url(<?php the_field('cover_background_image');?>)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkHomeCover" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <h1><?php the_field('cover_title');?></h1>
                <address class="contactPageCoverAddress">
                    <ul>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:discovering@sensatek.com">discovering@sensatek.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:386.281.6750">386.281.6750</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <a href="https://goo.gl/maps/oMPFsr8iXNhQYaEq6">
                                1 Aerospace Boulevard <br>
                                MicaPlex Suite 204 <br>
                                Daytona Beach, Florida 32114  <br>
                            </a>
                        </li>
                    </ul>
                </address>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsHomeCover">
            </div>
        </section>
        <div class="contactPageContent">
            <div class="container" data-aos="fade-up">
                <h3><?php the_field('contact_page_title');?></h3>
                <div class="contactPageContentCopy">
                    <?php the_field('contact_page_copy');?>
                    <?php echo do_shortcode('[formidable id=1]'); ?>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsContactPage">
            </div>
        </div>
    </main> 
    
    <?php ?>
<?php get_footer(); ?>
