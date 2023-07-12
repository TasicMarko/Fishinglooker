<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$fields = get_fields();
?>

<div class="main">


<!-- Hero section -->
<section class="hero about-hero" style="background:url(/wp-content/uploads/2023/02/fish-jumping-out-of-water.jpeg)">
    <!-- <div class="hero-background">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="/wp-content/uploads/2023/07/coverr-waves-crashing-on-the-rocks-as-a-fisherman-tries-to-fish-8277-1080p.mp4" type="video/mp4">
        </video>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="hero-wrapper">
				<p class="above-title"><?php echo $fields['hero_above_title']; ?></p>
                <h1><?php
                if($fields['hero_title']) {
                    echo $fields['hero_title'];
                }else {
                    the_title(); 
                }
                 ?></h1>
            </div>
        </div>
	</div>
	</section>
	<div class="about-below-sec">
		<div class="container">
			<div class="row about-below-row">
				<div class="col-md-6 col-xs-12">
					<img src="<?php echo $fields['hero_below_image']['url']; ?>" alt="fish swimming">
				</div>
				<div class="col-md-6 col-xs-12">
					<p><?php echo $fields['hero_below_text']; ?></p>
				</div>
			</div>
		</div>
		<div class="hero-about-shape">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
				<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
				<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
				<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
			</svg>
		</div>
	</div>	
<!-- Hero section END -->

<!-- Content section -->
<section class="about-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<p><?php echo $fields['about_text']; ?></p>
			</div>
			<div class="col-md-6 col-xs-12">
				<img src="<?php echo $fields['about_img']['url']; ?>" alt="fish swiming">
			</div>
		</div>
	</div>
</section>
<!-- Content section END -->


</div>
	

<?php get_footer(); ?>
