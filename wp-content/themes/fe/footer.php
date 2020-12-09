<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finaedge
 */

?>
<!-- footer -->
<footer class="footer pb-5 pt-5">
	<div class="container">
		<div class="row justify-content-between">
		<?php dynamic_sidebar( 'footer-sidebar-1' ) ?>
		<?php dynamic_sidebar( 'footer-sidebar-2' ) ?>
		<?php dynamic_sidebar( 'footer-sidebar-3' ) ?>
		<?php dynamic_sidebar( 'footer-sidebar-4' ) ?>
		</div>
	</div>
</footer>
<!-- End footer -->
<?php wp_footer(); ?>

</body>
</html>
