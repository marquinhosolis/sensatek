<?php
/*
Template Name: On Blade Sensors Page
*/
?>

<?php get_header(); ?>
	<main class="homePage pageOneBladeSensors">
        <section class="homePageCover contactPageCover" style="background-image: url(<?php the_field('cover_background_image');?>)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkHomeCover">
            <div class="container">
                <h1 data-aos="fade-up"><?php the_field('cover_title');?></h1>
                <div data-aos="fade-up">
                    <?php the_field('cover_copy');?>
                </div>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsHomeCover" data-aos="fade-bottom">
            </div>
        </section>
        <section class="pageOneBladeSensorsIntro">
            <div class="container">
                <div class="pageOneBladeSensorsIntroTitle">
                    <h3><?php the_field('benefits_title');?> <br>
                    <span><?php the_field('benefit_subtitle');?></span>
                    </h3>
                </div>
                <div class="pageOneBladeSensorsIntroContent">
                    <div class="pageOneBladeSensorsIntroCopy" data-aos="fade-right">
                        <?php the_field('benefits_copy');?>   
                    </div>
                    <div class="pageOneBladeSensorsIntroImage" data-aos="fade-left">
                        <img src="<?php the_field('benefits_image');?>" alt="" class="dotsHomeCover">
                    </div>  
                </div>
            </div>
        </section>
        
        <div class="howItWorks">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoWatermarkHowSensatek.png" alt="" class="logoWatermarkHowWorks" data-aos="fade-up">
            <div class="container" data-aos="fade-right">
                
                <div class="howItWorksTitle">
                    <h3>How it works</h3>
                </div>                
                <div class="howItWorksCopy">
                    <?php the_field('how_it_works_copy');?>
                </div>
            </div>
        </div>
        <div class="howItWorks provenPractice">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoWatermarkHowSensatek.png" alt="" class="logoWatermarkHowWorks" data-aos="fade-up">
            <div class="container" data-aos="fade-left">
                
                <div class="howItWorksTitle">
                    <h3>Proven practice with industry leaders</h3>
                </div>                
                <div class="howItWorksCopy">
                    <?php the_field('proven_practice_copy');?>
                </div>
            </div>
        </div>
        <section class="technicalSpecifications">
            <div class="container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsTechnicalSpecifications" data-aos="fade-bottom">
                <div class="technicalSpecificationsTitle">
                    <h3><?php the_field('technical_specifications_title');?></h3>
                </div>
                <div class="technicalSpecificationsTable" data-aos="fade-up">
                    <?php if( have_rows('technical_specifications_table') ): ?>
                            <table >
                                <tbody>
                                    <?php 
                                        while( have_rows('technical_specifications_table') ): the_row(); 
                                            if( have_rows('technical_specifications_row') ): ?>
                                                <tr>
                                                    <?php 
                                                    while( have_rows('technical_specifications_row') ): the_row();?>
                                                        <td><?php the_sub_field('technical_specifications_column'); ?></td>
                                                    <?php endwhile; ?>
                                                </tr>
                                            <?php endif;  
                                        endwhile;  
                                    ?>
                                </tbody>
                            </table>
                    <?php endif; ?>
                </div>
                <div class="technicalSpecificationsPatents" data-aos="fade-up">
                    <h4>Patents</h4>
                    <ul>
                        <?php if( get_field('patents') ): ?>
                            <?php while( the_repeater_field('patents') ): ?>
                                <li><?php the_sub_field('patent'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="howSensatek">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoWatermarkHowSensatek.png" alt="" class="logoWatermarkHowSensatek" data-aos="fade-up">
            <div class="container">
                <div class="howSensatekTitle" data-aos="fade-right">
                    <h3><?php the_field('how_compares');?></h3>
                </div>
                <div class="howSensatekCopy" data-aos="fade-left">
                    <?php the_field('how_compares_copy');?>
                </div>
            </div>
        </section>
        <?php get_template_part('datasheet-download-part') ?>
        <section class="homeCta">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="homeCtaDots" data-aos="fade-bottom">
            <h3 data-aos="fade-up">Ready to learn more about the future of propulsion technology?</h3>
            <a href="#" class="btn-transparent" data-aos="fade-up">Request your Proof of Concept</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-cta-image.png" alt="" class="homeCtaImage">
        </section>
    </main> 
    
    <?php ?>
<?php get_footer(); ?>
