<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>

<main class="singleNews">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>     
        <section class="singleTitle">
            <div class="container">
                <h1><?php the_title( ); ?></h1>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="singleTitleDots">
                <div class="singleTitleMask">
                    <div class="content"></div>
                </div>
            </div>
        </section>
        <section class="singleContent">
            <div class="container">
                <div class="singleContentWrapper">
                    <div class="singleImage" style="background-image: url(<?php the_post_thumbnail_url( ); ?>);">
                        <div class="content"></div>
                    </div>
                    <div class="singleText">
                        <div class="singleTextData">
                            <?php the_date(); ?>  |  <?php $category = get_the_category( );  print_r($category[0] -> name) ; ?>
                        </div> 
                        <?php the_content();?>
                    </div>
                </div>
                <div class="afterPost">
                    <div class="shareLinks">
                        Share this post &nbsp;
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_post_thumbnail_url('full'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="mailto:?subject=I%20think%20this%20post%20is%20for%20you!&body=Look at this post I found in Sensatek site. It is exactly what you need: <?php the_permalink(); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </div>
                    <div class="postNav">
                        <div class="previous_post_link">
                            <?php
                                $prevPost = get_previous_post();
                                $prevThumbnail = get_the_post_thumbnail_url( $prevPost->ID );
                                previous_post_link( "%link", "<div class='postLinkImage' style='background-image: url(".$prevThumbnail.");'>
                                    <div class='content'><i class='fa fa-long-arrow-left' aria-hidden='true'></i> Previous News</div>
                                </div>");
                            ?>
                        </div>
                        <div class="next_post_link">
                            <?php
                                $nextPost = get_next_post();
                                $nextThumbnail = get_the_post_thumbnail_url( $nextPost->ID );
                                next_post_link( "%link", "<div class='postLinkImage' style='background-image: url(".$nextThumbnail.");'>
                                    <div class='content'>Next News <i class='fa fa-long-arrow-right' aria-hidden='true'></i></div>
                                </div>");
                            ?>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
