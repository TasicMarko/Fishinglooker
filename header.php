<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">

<!-- 
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->


	<?php wp_head(); ?>
</head>
<header class="fish-header">

	<!-- Mobile menu -->
	<div class="header-wrapper-mob">
		<div class="container">
			<div class="row">
				<div class="mob-wrap">
					<div class="logo">
						<a href="/">
							<img src="/wp-content/uploads/2022/08/fishinglooker-logo.png" alt="">
						</a>
					</div>
					<nav class="fish-navigation-mob">
						<div class="mobile-menu">
							<ul class="mob-menu">
							<?php
								wp_nav_menu( array(
									'menu'              => 'mob-menu',
									'theme_location'    => 'Top menu',
									'depth'             => 2,
									'container'         => false,
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => false,
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'items_wrap' => '%3$s',
									'walker'            => new wp_bootstrap_navwalkermobile())
								);
								?> 
							</ul>
						</div>
					</nav>
					<div class="burger-menu">
						<!-- <button class="burger"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
						<button class="x"><i class="fa fa-times fa-3x" aria-hidden="true"></i></button> -->
						<div class="bar">
							<span class="bar-1"> </span>
							<span class="bar-2"> </span>
							<span class="bar-3"> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile menu END -->

	<!-- Desktop menu -->
	<div class="header-wrapper">
		<div class="container">
			<div class="row">
				<div class="desk-wrap">
					<div class="logo">
						<a href="#">
							<img src="/wp-content/uploads/2022/08/fishinglooker-logo.png" alt="">
						</a>
					</div>
					<nav class="fish-navigation">
						<div class="desktop-menu">
							<ul class="desk-menu">
							<?php
								wp_nav_menu( array(
									'menu'              => 'main-menu',
									'theme_location'    => 'Primary menu',
									'depth'             => 2,
									'container'         => false,
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => false,
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'items_wrap' => '%3$s',
									'walker'            => new wp_bootstrap_navwalkermobile())
								);
								?>  
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Desktop menu END -->

</header>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

