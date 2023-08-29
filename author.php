<?php
/**
 * Template: Author
 *
 * 
 *
 * 
 */

get_header();
$backgroundImg = get_the_post_thumbnail_url($post->ID, 'full');
?>




<div class="main">

<!-- Hero section -->
<section class="hero-single author-single"  style="background: url(<?php echo $backgroundImg; ?>)no-repeat center;background-size:cover;">
    <div class="single-back-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="author-single-wrap">
                
            <?php
                $current_user = wp_get_current_user();
                $all_meta_for_user = get_user_meta( get_the_author_ID() );
                $user_avatar = get_avatar_data(get_the_author_ID()); ?>

                <div class="avatar-wrap"><img src="<?php echo $user_avatar['url'] ?>" alt="authors image"></div>
                <div class="author-div">
                    <h1 class="autor-name-author"><?php echo get_the_author(); ?></h1>
                        <p class="autor-description"><?php echo $all_meta_for_user['description'][0]; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section END -->

 <!-- Blogs section -->
 <section class="blogs">
                    <div class="container">
                        <div class="row blogs-row">
                            
                            
                            <?php

                                $the_query = new WP_Query(['post_type' => '', 'posts_per_page' => 6, 'paged' => get_query_var( 'paged' )]); ?>

                                <?php if ( $the_query->have_posts() ) : ?>

                                    <?php while ( $the_query->have_posts() ) :
                                        $the_query->the_post(); ?>


                                        <div class="col-lg-4 col-md-6 col-xs-12 post-wrapper">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-wrap">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ); ?>
                                                <div class="text-wrap">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p class="autor-date"><?php echo get_the_author(); ?> / <?php the_date('F j,Y') ?></p>
                                                    <a href="<?php the_permalink(); ?>">Read More »</a>
                                                </div>
                                            </div>
                                            </a>
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


            </div>
        </div>
    </div>
</section>
<!-- Blog content section END -->


</div>

<?php
get_footer();