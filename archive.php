<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Symbiotica_Starter_Theme
 */

 //Geting the page name from url

// $obj_id = get_queried_object_id();
//$current_url = get_permalink( $obj_id );
//$page = preg_split("#/#", $current_url);

//$current_page = $page[1];


$obj_id = get_queried_object_id();
$current_url = get_term_link( $obj_id );
$page = preg_split("#/#", $current_url);
$current_page = $page[4];


get_header();
?>


<!-- Hero section -->
<section class="hero hero-blog"  style="background:url(/wp-content/uploads/2022/12/man-fishing-scaled.jpeg)">
    <div class="container">
        <div class="row">
            <div class="hero-wrapper">
                <h1>Category: <?php echo $current_page; ?></h1>
                <div class="hero-categories">

                <!-- Listing all the categories -->
                    <?php 
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        $name = explode(" ", trim($category->name));
                        ?> <a href="<?php echo get_category_link($category->term_id); ?>"><span><?php echo $name[0]; ?></span></a> <?php
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section END -->


<!-- Blogs form -->
<section class="blogs-form">
    <div class="container">
        <div class="row">
            <div class="blogs-form-wrap col-md-10 col-xs-12">
            <p>Here you can search all of our blogs, or you can select a category above.</p>
            <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Blogs form END -->


<!-- Blogs section -->
<section class="blogs">
    <div class="container">
        <div class="row blogs-row">
            
            <?php

                $the_query = new WP_Query(['post_type' => '', 'posts_per_page' => 9, 'category_name' => $current_page]); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>


                        <div class="col-md-4 col-xs-12 post-wrapper">
                            <div class="post-wrap">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ); ?>
                                <div class="text-wrap">
                                    <h4><?php the_title(); ?></h4>
                                    <p class="autor-date"><?php echo get_the_author(); ?> / <?php the_date('F j,Y') ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More »</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                <div class="page-navigation">
                <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                </div>
            
        </div>
    </div>
</section>
<!-- Blogs section END -->


<?php
get_footer();
