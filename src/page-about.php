<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
	<main class="pageAboutUs">
        <section class="homePageCover contactPageCover" style="background-image: url(<?php the_field('cover_background_image');?>)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkHomeCover" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <div class="pageTitle">
                    About us
                </div>
                <h1><?php the_field('cover_title');?></h1>
                <?php the_field('cover_copy');?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="dotsHomeCover">
            </div>
        </section>
        <section class="industriesWeServe">
            <div class="container">
                <h3>The industries we serve</h3>
                <div class="aboutUsIndustries" data-aos="fade-up">
                    <?php if( get_field('industries_we_serve') ): ?>
                        <?php while( the_repeater_field('industries_we_serve') ): ?>
                            <div class="aboutUsIndutry" style="background-image: url(<?php the_sub_field('industry_background_image'); ?>);">
                                <div class="content"><?php the_sub_field('industry_text'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="pageAboutUsMilestones">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-watermark-transparent.png" alt="" class="logoWatermarkAboutUsMilestones" data-aos="fade-up">
            <div class="container">
                <div class="pageAboutUsMilestonesTitle">
                    <h3>Company Milestones</h3>
                </div>
                <div class="milestonesWrapper" data-aos="fade-up">

                    <?php if( get_field('company_milestones') ): ?>
                        <?php while( the_repeater_field('company_milestones') ): ?>

                            <div class="milestone">
                                <div class="milestoneDate">
                                    <?php the_sub_field('milestone_date'); ?>
                                </div>
                                <div class="milestoneBullet">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_<?php the_sub_field('milestone_icon'); ?>.png" alt="">

                                </div>
                                <div class="milestoneDescription">
                                    <?php the_sub_field('milesttone_copy'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="viewMoreMilestones">
                    <a href="#">Show more <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <section class="aboutUsTeam">
            <div class="container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="aboutUsTeamDots">
                <div class="aboutUsTeamTitle">
                    <h3>Meet the Sensatek team</h3>
                    <?php the_field('team_intro_copy'); ?>
                </div>
                <div class="aboutUsTeamWrapper">
                    
                    <?php if( get_field('team_member') ): ?>
                        <?php while( the_repeater_field('team_member') ): ?>
                            <div class="aboutUsTeamMate">
                                <div class="aboutUsTeamCard" data-aos="fade-up">
                                    <div class="aboutUsTeamCardJobTitle">
                                        <?php the_sub_field('team_member_job_title'); ?>
                                    </div>
                                    <div class="aboutUsTeamCardImage" style="background-image: url(<?php the_sub_field('team_member_image'); ?>);">
                                        <div class="content"></div>
                                    </div>
                                    <div class="aboutUsTeamCardName">
                                        <?php the_sub_field('team_member_firstname'); ?><br>
										<?php the_sub_field('team_member_lastname'); ?>
                                    </div>
                                    <a href="#" class="aboutUsTeamCardButton">
                                        +
                                    </a>
                                    
                                </div>
                                <div class="teamMemberModal">
                                    <div class="teamMemberModalMask">
                                        <div class="teamMemberModalBody">
                                            <a href="#" class="closeModal">x</a>
                                            <div class="teamMemberModalName">
                                                <?php the_sub_field('team_member_name'); ?>
                                            </div>
                                            <div class="teamMemberModalTitle">
                                                <?php the_sub_field('team_member_job_title'); ?>    
                                                
												<?php if( get_sub_field('team_member_linkedin') ): ?>
													| <a href="<?php the_sub_field('team_member_linkedin'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_sub_field('team_member_email') ): ?>
													| <a href="<?php the_sub_field('team_member_email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
												<?php endif; ?>
                                                
                                            </div>
                                            <div class="teamMemberModalCopy">
                                                <?php the_sub_field('team_member_description'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="aboutUsTeamTitle">
                    <h3>Our professional affiliations</h3>
                </div>
                <div class="affiliationsLogos" data-aos="fade-up">
                    <?php if( get_field('affiliations') ): ?>
                        <?php while( the_repeater_field('affiliations') ): ?>
                            <img src="<?php the_sub_field('affiliation_logo'); ?>" alt="">
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/watermark-footer-bg-reflected.png" alt="" class="teamMateWatermark">
        </section>
        <section class="homeCta">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="homeCtaDots" data-aos="fade-up">
            <h3 data-aos="fade-up">Ready to learn more about the future of propulsion technology?</h3>
            <a href="#" class="btn-transparent" data-aos="fade-up">Request your Proof of Concept</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-cta-image.png" alt="" class="homeCtaImage">
        </section>
    </main>
	
<?php get_footer(); ?>
