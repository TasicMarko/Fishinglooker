<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
$s=get_search_query();
$args = array(
    's' =>$s,
    'posts_per_page' => 9
);
?>



<!-- Hero section -->
<section class="hero hero-blog"  style="background:url(/wp-content/uploads/2022/12/man-fishing-scaled.jpeg)">
    <div class="container">
        <div class="row">
            <div class="hero-wrapper">
                <h1>Search results for: <?php echo $s; ?></h1>
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


        <!-- Search query -->
<?php 
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        // _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
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
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
<!-- Search query END -->


            </div>
        </div>
    </section>
    <!-- Blogs section END -->






<?php
get_footer();
