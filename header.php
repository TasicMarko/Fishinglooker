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
	<meta name="google-site-verification" content="9XapdSk6J_g4ZZmKbKxqVuT-GCWiKKpsiidyp7oo7lQ" />

<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N68DS4L');</script>
<!-- End Google Tag Manager -->
<!--  
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->

	<!-- ad blocking recovery message -->
	<script async src="https://fundingchoicesmessages.google.com/i/pub-5023869212812628?ers=1" nonce="0-V5WFhWQfcVE08hK1eFEw"></script><script nonce="0-V5WFhWQfcVE08hK1eFEw">(function() {function signalGooglefcPresent() {if (!window.frames['googlefcPresent']) {if (document.body) {const iframe = document.createElement('iframe'); iframe.style = 'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;'; iframe.style.display = 'none'; iframe.name = 'googlefcPresent'; document.body.appendChild(iframe);} else {setTimeout(signalGooglefcPresent, 0);}}}signalGooglefcPresent();})();</script>
	<!-- ad blocking recovery message END -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N68DS4L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>

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




