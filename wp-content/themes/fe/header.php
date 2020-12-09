<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finaedge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://use.typekit.net/ybn4fni.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header -->
<header class="page-header">
			<div class="container">
				<div class="row ">
					<div class="col-12 col-md-5">
						<img src="<?php bloginfo('template_url'); ?>/assets/src/images/finaedge-logo.png" alt="" width="59%">
					</div>
					<div class="align-items-center col-md-7 d-flex fg-contact-row">
						<p class="text-white contact-text">Email : <span class="green-text">info@mail.com</span> &nbsp; | &nbsp; Call Us : <span class="green-text">9876543210</span> &nbsp;&nbsp; <a href="#" class="btn green-btn">contact</a></p>
					</div>
				</div>
				<div class="row fg-menu-row">
					<div class="col-12 col-md-10">
							<?php
							if ( has_nav_menu( 'menu-1' ) ) {
								wp_nav_menu([
									'theme_location' => 'menu-1', 
									'container' => false,
									'menu_class' => 'fe-main-menu'
								]);
							}
							?>
						<!-- <ul>
							<li><a href="#">Start Your Business</a></li>
							<li><a href="#">Corporate Compliance</a></li>
							<li><a href="#">Account &amp; Drafting</a></li>
							<li><a href="#">Protect &amp; Promote</a></li>
							<li><a href="#">Registration &amp; Return</a></li>
							<li><a href="#">Labour Law</a></li>
						</ul> -->
					</div>
				</div>
				<div class="burger-nav">
					<div id="menu-bar">
						<div id="menu" >
							<div id="bar1" class="bar"></div>
							<div id="bar2" class="bar"></div>
							<div id="bar3" class="bar"></div>
						</div>
						<?php
							if ( has_nav_menu( 'menu-1' ) ) {
								wp_nav_menu([
									'theme_location' => 'menu-1',
									'container' => false,
									'menu_class' => 'fe-nav'
								]);
							}
						?>
						<!-- <ul class="nav" id="nav">
							<li><a href="#">Start Your business</a></li>
							<li><a href="#">Corporate Compliance</a></li>
							<li><a href="#">Account and Drafting</a></li>
							<li><a href="#">Protect & Promote</a></li>
							<li><a href="#">Registration & Return</a></li>
						</ul> -->
					</div>
					<div class="menu-bg-container">
						<div class="menu-bg" id="menu-bg"></div>
					</div>
				</div>
			</div>
		</header>
		<!-- End header -->