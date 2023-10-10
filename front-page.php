<?php
/* 
Template Name: Homepage
*/

get_header();

$fields = get_fields();

?>  


<div class="main">


<!-- Hero section -->
<section class="hero">
    <div class="hero-background">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="/wp-content/uploads/2023/07/coverr-waves-crashing-on-the-rocks-as-a-fisherman-tries-to-fish-8277-1080p.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row">
            <div class="hero-wrapper">
                <h1><?php
                if($fields['hero_title']) {
                    echo $fields['hero_title'];
                }else {
                    the_title(); 
                }
                 ?></h1>
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


<!-- About Us section -->
<section class="about">
    <div class="container">
        <div class="row">
                <div class="col-md-9 col-xs-12 about-text-box">
                    <h2><?php echo $fields['about_title']; ?></h2>
                    <p><?php echo $fields['about_text']; ?></p>
                    <a href="<?php echo $fields['about_link']; ?>">Click here</a>
                </div>
                <div class="col-md-6 col-xs-12 about-right">
                    <img src="<?php echo $fields['about_image']['url']; ?>" alt="fisherman">
                </div>
        </div>
    </div>
    <div class="about-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
        <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
        <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
    </svg>
    </div>
</section>
<!-- About Us section END -->

<!-- Blog section -->
<section class="blog">
    <div class="container">
        <div class="row blog-title-row">
            <h2><?php echo $fields['blog_title']; ?></h2>
        </div>
        <div class="row">    
            <?php

                $the_query = new WP_Query(['post_type' => '', 'posts_per_page' => 6]); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <?php while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>


                        <div class="col-md-4 col-xs-12">
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
        </div>
    </div>
</section>
<!-- Blog section END -->

</div>


<?php get_footer(''); ?>

