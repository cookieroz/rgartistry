<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rachel-makeup
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
  <div class="social-media-squares">
    <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
    <a href="http://linkedin.com/"><i class="fa fa-instagram"></i></a>
    <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
  </div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
