<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<main class="homePage">
        <section class="homePageCover" style="background-image: url(<?php the_field('cover_background_image'); ?>)">
            <?php if( get_field('cover_background_video') ): ?>
                <video class="videoBg" autoplay muted playsinline loop id="myVideo">
                    <source src="<?php the_field('cover_background_video'); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkHomeCover" data-aos="fade-up">
            <div class="container" >
                <h1 data-aos="fade-up"><?php the_field('cover_title'); ?></h1>
                <h2 data-aos="fade-up"><?php the_field('coversubtitle'); ?></h2>
                <a href="<?php echo site_url('/contact-us/');?>" class="btn-transparent" data-aos="fade-up">Request your Proof of Concept</a>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsHomeCover" data-aos="fade-down">
            </div>
        </section>
        <section class="homeIntro">
            <div class="homeIntroImage">
                <img src="<?php the_field('intro_text_image'); ?>" alt="">
            </div>
            <div class="homeIntroCopy" data-aos="fade-down">
                <h3><?php the_field('intro_text_title'); ?></h3>
                <div class="homeIntroCopyText">
                    <?php the_field('intro_text_copy'); ?>
                </div>
                <a href="<?php echo site_url( '/on-blade-sensors/'); ?>" class="btn-transparent btn-sweep">Explore more benefits</a>
            </div>
        </section>
        <section class="homeIntro2" >
            <div class="container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsHomeIntro2" data-aos="fade-up">
                <div class="homeIntro2Image" data-aos="fade-up">
                    <img src="<?php the_field('intro_text_image_2'); ?>" alt="">
                </div>
                <div class="homeIntro2Copy" data-aos="fade-down">
                    <h3><?php the_field('intro_text_title_2'); ?></h3>
                    <div class="homeIntro2CopyText">
                        <?php the_field('intro_text_copy_2'); ?>
                    </div>
                    <a href="<?php echo site_url( '/on-blade-sensors/'); ?>" class="btn-transparent">learn more</a>
                </div>
            </div>
        </section>
        <section class="homeAbout">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkHomeAbout" data-aos="fade-up">
            <div class="container">
                <div class="homeAboutImage" data-aos="zoom-in">
                    <img src="<?php the_field('about_senatek_image'); ?>" alt="">
                    <div class="homeAboutImageShadow"></div>
                </div>
                <div class="homeAboutCopy" data-aos="fade-left">
                    <h3>About Sensatek</h3>
                    <?php the_field('about_sensatek_copy'); ?>
                    <div class="awards">
                        <?php if( get_field('about_sensatek_awards') ): ?>
                            <?php while( the_repeater_field('about_sensatek_awards') ): ?>
                                <div class="award">
                                    <?php the_sub_field('about_sensatek_award'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="homeTestimonials" >
            <div class="container" data-aos="fade-up">
                <div class="flexslider">
                    <ul class="slides">
                        <?php if( get_field('testimonials') ): ?>
                            <?php while( the_repeater_field('testimonials') ): ?>
                                <li>
                                    <div class="homeTestimonialWrapper">
                                        <div class="homeTestimonialCopy">
                                            <p>“<?php the_sub_field('testimonial_copy'); ?>”</p>
                                            <div class="testimonialName">
                                                <span><?php the_sub_field('testimonial_name'); ?>,</span>
                                                <?php the_sub_field('testimonials_job_title'); ?>
                                            </div>
                                        </div>
                                        <div class="homeTestimonialImage">
                                            <img src="<?php the_sub_field('testimonial_image'); ?>" alt="" class="homeTestimonialImageMain">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="homeTestimonialImageDots">
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php get_template_part('datasheet-download-part') ?>
        <section class="homeFeaturedOn">
            <div class="container">
                <h3>Featured on</h3>
                <?php if( get_field('featured_on') ): ?>
                    <?php while( the_repeater_field('featured_on') ): ?>
                        <div class="award">
                            <?php 
                            if(get_sub_field('featured_link')){?>
                                <a href="<?php the_sub_field('featured_link'); ?>" target="_blank">
                                    <img src="<?php the_sub_field('featured_logo'); ?>" alt="">
                                </a>
                            <?php } else{ ?>
                                <img src="<?php the_sub_field('featured_logo'); ?>" alt="">
                            <?php }

                        ?>
                            
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <section class="homeLastNews">
            <div class="container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="homeLastNewsDots">
                <h3>Latest news</h3>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>

                            <div class="homePost" data-aos="flip-left">
                                <a href="<?php the_permalink( ); ?>">
                                    <div class="homePostImage" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
                                        <div class="content"></div>
                                    </div>
                                    <div class="homePostText">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_excerpt(); ?></p>
                                        <div>READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                    } 
                    
                    wp_reset_postdata();
                ?>
            </div> 
        </section>
        <section class="homeCta">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="homeCtaDots" data-aos="fade-up">
            <h3 data-aos="fade-up">Ready to learn more about the future of propulsion technology?</h3>
            <a href="<?php echo site_url('/contact-us/');?>" class="btn-transparent" data-aos="fade-up">Request your Proof of Concept</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-cta-image.png" alt="" class="homeCtaImage">
        </section>
    </main> 
    
    <?php ?>
<?php get_footer(); ?>

<script>
    function videoSize(){
        var screenWidth  = $(window).width();
        var screenHeight  = $(window).height();
        if(screenWidth > screenHeight){
            $('.videoBg').css({
                'width':'100%',
                'min-height':'100%'
            })
        }else{
            $('.videoBg').css({
                'min-width':'100%',
                'width':'auto',

            })
        }
    }
    $(document).ready(function(){
        videoSize();
    })
    $(window).resize(function(){
        videoSize();
    })
</script>