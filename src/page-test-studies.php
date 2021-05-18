<?php
/*
Template Name: Test Studies Page
*/
?>

<?php
    $limit = 6;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>

<?php get_header(); ?>
    <div class="pageNewsTitle">
        <h1>Test Studies</h1>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dots.png" alt="" class="pageNewsDots"> 
    <div class="pageNewsSearch">
        <div class="container">
            <form action="" method="get">
                <input type="search" name="search" placeholder="Search">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <div class="selectWrapper">
                <form action="" method="get">
                    <?php
                        wp_dropdown_categories( array(
                            'show_option_all'    => 'Filter by Category',
                            'orderby'            => 'name', 
                            'hierarchical'       => 1, 
                            'depth'              => 1,
                        ) );
                    ?>
                </form>
            </div>
        </div>
    </div>
    <main class="pageNews">
        
        <section class="homeLastNews">
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => 'test-studies-cpt',
                        'posts_per_page' => $posts,
                        'cat'            => $cat,
                        's'              => $search
                    );

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>

                            <div class="homePost homePostStudyTest" data-aos="fade-up">
                                <a href="<?php the_permalink( ); ?>">
                                    <div class="homePostImage" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
                                        <div class="content">
                                            <div>
                                                <h4><?php the_title(); ?></h4>
                                                <p>READ TEST STUDY <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                    } else{ ?>
                        <div class="noPosts">
                            <p>Sorry, no posts found!</p>
                        </div>
                    <?php }
                    
                    wp_reset_postdata();
                ?>
                
            </div>
                
                <?php 
                    if($query->found_posts > $limit){ ?>
                        <div class="viewMorePosts">
                            <a href="<?php the_permalink(); ?>?all=1">View more news<i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    <?php }
                ?>
        </section>
    </main>

<?php get_footer(); ?>

