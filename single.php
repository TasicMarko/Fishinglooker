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

//Grabs the Primary Category of the Post
global $post;
$categories = get_the_category($post->ID);
$cat_link = get_category_link($categories[0]->cat_ID);
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
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><p class="autor-date"><?php echo get_the_author(); ?></p></a><p class="autor-date"><?php the_date('F j, Y') ?></p><a href="<?php  echo $cat_link; ?>"><p class="post-cat"><?php  echo $categories[0]->cat_name; ?></p></a>
                </div>
                <div class="social-div">
                    <p class="share">Share This Post</p>
                    <div class="social-img-box">
                        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php get_permalink() ?>"><span class="social-span"><i class="fa fa-facebook-official"></i></span></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>"><span class="social-span"><i class="fa fa-linkedin-square"></i></span></a>
                        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><span class="social-span"><i class="fa fa-twitter"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section END -->

<!-- Blog content section -->
<section class="blog-content-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-xs-12">
                <div class="blog-content-wrap">


                <!-- Single post content -->
                                <?php
                    // check if the flexible content field has rows of data
                    if( have_rows('content_layout_blog') ):
                        // loop through the rows of data
                        while ( have_rows('content_layout_blog') ) : the_row();
                            if( get_row_layout() == 'intro_text' ): ?>

                                <div class="intro__content">
                                    <?php the_sub_field('intro_content'); ?>
                                </div>
                                <!-- // intro  -->							

                            <?php elseif( get_row_layout() == 'full_width_content' ): ?>
							
                                <div class="main__content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>								

                            <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                <div class="blog-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'blogfull-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                        <?php 
                                        $values = get_sub_field( 'image_alt_text' );
                                        if ( $values ) { ?>
                                            <img class="img-responsive" alt="<?php the_sub_field('image_alt_text'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <?php 
                                        } else { ?>
                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                        <?php } ?>

                                        <?php if( get_sub_field('image_caption') ): ?>
                                        <div class="image__caption">
                                            <span class="photo-lablel"><?php the_sub_field('image_caption'); ?></span>
                                        </div>
                                        <?php endif; ?>

                                </div>
                                <!-- // inner image  -->
                            
                            <?php elseif( get_row_layout() == 'half_width_image' ): ?>

                                <div class="image__half">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'blogfull-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <!-- // inner image  -->

                            <?php elseif( get_row_layout() == 'content_left_stat_right' ): ?>   

                                <div class="row">    
                                    <div class="stat">
                                        <div class="col-lg-7 col-md-7 col-xs-12">
                                            <div class="content-block">
                                                <?php the_sub_field('content_block_left'); ?>
                                            </div>
                                        </div>
                                        <!-- // blokc  -->
                                        <div class="col-lg-5 col-md-5 col-xs-12">
                                            <div class="stat-holder">                                                            
                                                <div class="stat-block">
                                                    <?php the_sub_field('stat_block_right'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // col  -->
                                    </div>
                                </div>

                            <?php elseif( get_row_layout() == 'table_of_contents' ): ?>

                            
                            <div class="blog__toc">
                                <span class="title">Table of Contents</span>
                                <ul>
                                    <?php if( have_rows('table_content') ): ?>
                                        <?php while( have_rows('table_content') ): the_row(); ?>
                                            
                                        <li><a href="#<?php the_sub_field('id_anchor'); ?>"><?php the_sub_field('main_heading'); ?></a>
                                        
                                                <?php if( have_rows('subheadings') ): ?>
                                                    <ul>
                                                <?php while( have_rows('subheadings') ): the_row(); ?>
                                                    <li><a href="#<?php the_sub_field('id_of_section'); ?>"><?php the_sub_field('subheading'); ?></a></li>
                                                <?php endwhile; ?>
                                                </ul>
                                                <?php endif; ?>

                                        </li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                
                                </ul>
                            </div>
                            <!-- // toc  -->		
                            
                            <?php elseif( get_row_layout() == 'video' ): ?>	

                                <div class="video__holder">
                               
                                <!--  Video code -->
                                <?php if(!empty(get_sub_field('internal_video_link'))) {
                                
                                    echo '<video width="320" height="240" controls>
                                            <source src="'.get_sub_field('internal_video_link').'" type="video/mp4"></source>
                                          </video>';
                                    }else{ ?>
                                            <?php the_sub_field('embedded_code_youtube'); } ?>                   
                                </div>	
                                <!--  Video code END -->
                                
                            <?php elseif( get_row_layout() == 'accordion' ): ?>		

                                <div class="accordion-section">
									<?php if( get_sub_field('accordion_title') ): ?>
										<h3><?php the_sub_field('accordion_title'); ?></h3>
									<?php endif; ?>
									<div class="accordion-list">
									<?php if( have_rows('accordion_list') ): ?>
										<?php while( have_rows('accordion_list') ): the_row(); ?>

											<div class="panel">
												<h4><?php the_sub_field('heading'); ?></h4>
												<div class="panel__content">
													<?php the_sub_field('content'); ?>
												</div>
											</div>
											<!-- /.panel -->
										<?php endwhile; ?>
									<?php endif; ?>
									</div>
									<!-- // acc  -->
								</div>
								<!-- // section  -->

                            <?php elseif( get_row_layout() == 'quote' ): ?>	

                            <blockquote>
                                <?php the_sub_field('quotation_content'); ?>
                                <?php if( get_sub_field('source') ): ?>
                                <span class="author">- <?php the_sub_field('source'); ?></span>
                                <?php endif; ?>
                            </blockquote>	

                            <?php elseif( get_row_layout() == 'accordion' ): ?>				

                                <div class="accordion-section">
                                    <?php if( get_sub_field('accordion_title') ): ?>
                                        <h3><?php the_sub_field('accordion_title'); ?></h3>
                                    <?php endif; ?>
                                    <div class="accordion">
                                    <?php if( have_rows('accordion_list') ): ?>
                                        <?php while( have_rows('accordion_list') ): the_row(); ?>
                                            <span class="h4"><?php the_sub_field('heading'); ?></span>
                                            <div class="panel">
                                            <?php the_sub_field('content'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </div>
                                    <!-- // acc  -->
                                </div>
                                <!-- // section  -->

                                <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                    <div class="quote-cta--single">
                                        <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                        <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                    </div>
                                    <!-- // single  -->  
                                    
                                    <?php elseif( get_row_layout() == 'featured_article' ): ?>
                                    <!-- Featured article -->
                                    
                                            
                                        <?php $post_objects = get_sub_field('featured_article_list');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>
                                                        
                                                    <div class="featured-article-box">
                                                        <div class="blog-box">
                                                            <div class="blog-photo">
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank">
                                                                    <?php 
                                                                    $values = get_field( 'featured_image_blog' );
                                                                    if ( $values ) { ?>
                                                                        <?php
                                                                        $imageID = get_field('featured_image_blog');
                                                                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                        ?> 
                                                                        <div class="parent">
                                                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                                        </div>
                                                                    <?php 
                                                                    } else { 
                                                                       // var_dump($post['ID']);
                                                                        //$image = wp_get_attachment_image_src( $post['ID'], 'blog-image' );
                                                                        ?> 
                                                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                                    <?php } ?>
                                                                </a>
                                                            </div>
                                                            <div class="blog-content">
                                                                <h3><a href="<?php echo get_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                                                                <a href="<?php echo get_permalink(); ?>" class="btn-cta" target="_blank">Read More<i class="fas fa-chevron-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Featured article END -->
                                                        
                                                    <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>
                                        
                                        
                                    



                                <?php elseif( get_row_layout() == 'services_module' ): ?>

                                    <section id="services" class="services-blog-module">
                                        <div class="row">

                                        <?php
                                            $post_objects = get_sub_field('services_list_blog_page');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>

                                                    <div class="col-lg-4">
                                                        <div class="service-box">
                                                            <h3><?php the_title(); ?></h3>
                                                            <img src="<?php the_field('service_icon_serv'); ?>" alt="">
                                                            <a href="<?php echo get_permalink(); ?>" target="_blank">Read More</a>
                                                        </div>
                                                    </div>

                                                <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>

                                    
                                        </div>
                                    </section>

                                <?php elseif( get_row_layout() == 'table' ): ?>
                                 
                                <!-- Tables -->    
                                <div class="table-wrapper">
                                <table style="width:100%" class="single-table">
                                    <thead>
                                        <tr role="row">
                                        <?php
                                            // check if the repeater field has rows of data
                                            if(have_rows('table_head_cells')):
                                                // loop through the rows of data
                                                while(have_rows('table_head_cells')) : the_row();
                                                    $hlabel = get_sub_field('table_cell_label_thead');
                                                    ?>  
                                                    <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>
                                                <?php endwhile;
                                            else :
                                                
                                            endif;
                                            ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <?php 
                                        // check for rows (parent repeater)
                                        if( have_rows('table_body_row') ): ?>
                                            <?php 
                                            // loop through rows (parent repeater)
                                            while( have_rows('table_body_row') ): the_row(); ?>
                                                    <?php 
                                                    // check for rows (sub repeater)
                                                    if( have_rows('table_body_cells') ): ?>
                                                        <tr>
                                                            <?php 
                                                            // loop through rows (sub repeater)
                                                            while( have_rows('table_body_cells') ): the_row();
                                                                ?>
                                                                <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                            <?php endwhile; ?>
                                                        </tr>
                                                    <?php endif; //if( get_sub_field('') ): ?>
                                            <?php endwhile; // while( has_sub_field('') ): ?>
                                        <?php endif; // if( get_field('') ): ?>
                                        <?php endwhile; // end of the loop. ?>
                                    </tbody>
                                </table>  
                                </div>
                                <!-- Tables END --> 

                            <?php endif;
                        endwhile;
                    else :
                    endif;
                    ?>
                <!-- Single post content END -->


                </div>


                <!-- Autor info -->
                <section class="user-info-sec">
                    <div class="container">
                        <div class="row">
                            <div class="error-fish">
                                <img src="/wp-content/uploads/2023/08/fish-2.png" alt="fish-logo">
                            </div>
                            <div class="user-info-wrap">
                                <?php
                                $current_user = wp_get_current_user();
                                $all_meta_for_user = get_user_meta( get_the_author_ID() );
                                $user_avatar = get_avatar_data(get_the_author_ID()); ?>
                                
                                <div class="avatar-wrap"><img src="<?php echo $user_avatar['url'] ?>" alt="authors image"></div>
                                <div class="avatar-info">
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><h4><?php echo get_author_name(); ?></h4></a>
                                    <p><?php echo $all_meta_for_user['description'][0]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Autor info END -->



                <!-- Blogs section -->
                <section class="blogs">
                    <div class="container">
                    <h2 class="more-to-explore">More To Explore</h2>
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
                                                    <a class="read-more" href="<?php the_permalink(); ?>">Read More »</a>
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
