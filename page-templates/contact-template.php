<?php
/**
 * Template Name: Contact template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$fields = get_fields();
?>

<div class="main">

<!-- Hero section -->
<section class="hero-contact">
    <div class="container">
        <div class="row">
            <div class="hero-contact-wrap">
                <p>FEEL FREE TO</p>
                <h1>CONTACT US</h1>
            </div>
        </div>
    </div>
</section>
<!-- Hero section END -->

<!-- Form section -->
<section class="form-section">
    <div class="container">
        <div class="row">
            <div class="form-wrap col-md-10 col-xs-12">
                <p>
If you need to get in touch with us or have any questions you need help answering, you can just fill out the form below and we’ll be in touch!
</p>
            <?php echo do_shortcode('[contact-form-7 id="977" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Form section -->

</div>
	

<?php get_footer(); ?>
