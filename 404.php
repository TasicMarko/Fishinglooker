<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

<!-- 404 Section -->
<section class="error-section">
    <div class="container">
        <div class="row">
            <div class="error-wrap">
                <h1>404</h1>
                <div class="error-content">
                    <p>
    Unfortunately, fish are not biting here. Try a different spot!
                    </p>
                    <div class="error-fish">
                        <i aria-hidden="true" class="fas fa-fish"></i>
                    </div>
                    <p class="search-text">You can navigate through our menu or use this search bar:</p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 Section END -->

<?php
get_footer();
