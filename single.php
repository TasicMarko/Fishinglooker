<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
$backgroundImg = get_the_post_thumbnail_url($post->ID, 'full');
?>

<div class="main">

<!-- Hero section -->
<section class="hero-single"  style="background: url(<?php echo $backgroundImg; ?>)no-repeat center;background-size:cover;">
    <div class="single-back-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="hero-single-wrap">
                <h1><?php the_title(); ?></h1>
                <div class="author-div">
                <p class="autor-date"><?php echo get_the_author(); ?></p><p class="autor-date"><?php the_date('F j,Y') ?></p>
                </div>
                <div class="social-div">
                    <p class="share">Share This Post</p>
                    <div class="social-img-box">
                        <span class="social-span"><i class="fa fa-facebook-official"></i></span>
                        <span class="social-span"><i class="fa fa-linkedin-square"></i></span>
                        <span class="social-span"><i class="fa fa-twitter"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section END -->

</div>

<?php
get_footer();
