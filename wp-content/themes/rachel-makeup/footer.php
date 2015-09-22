<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rachel-makeup
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <ul class="footer-sections container-90">
      <li class="footer-contact">
        <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
        <ul class="footer-contact-address">
          <li class="footer-address">
          555 Somewhere st. <br/>
          Los Angeles, CA 92101</li>
          <li class="footer-phone"><a href="tel:+18184717492">(818) 471-7492</a></li>
          <li class="footer-email">contact@yourdomain.com</li>
        </ul>
        <div class="social-media-squares">
          <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="http://linkedin.com/"><i class="fa fa-instagram"></i></a>
          <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
        </div>
      </li>
      <li class="latest-blog-posts">
        <h3>Latest News</h3>
        
        <?php
          $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
          foreach ($postslist as $post) :
            setup_postdata($post);
          ?>
          <div class="footer-entry">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php echo substr(get_the_excerpt(), 0,62); ?>
          </div>
        <?php endforeach; ?>
      </li>
      <li class="footer-reservations">
        <h3>Reservations</h3>
        <p>Donec ullamcorper quis nisl ac bibendum. Morbi sit amet risus mattis, tincidunt ex nec, sagittis elit. Nunc velit diam, interdum ac elit at, suscipit dapibus mauris. Aenean pellentesque luctus ex, sed porttitor ipsum pharetra a.</p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="orange-btn">Book now</a>
      </li>
    </ul>
		<div class="site-info">
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
