<?php /* Template Name: RGhome */ ?>

<?php get_header(); ?>

  <div class="homepage">
    <div class="home-left">
      <h1>Get your beauty needs met</h1>
      <p>This layout can be used to create engaging and attractive links to the most important pages on your site. Choose from four predefined sizes and three types of Masonry Gallery boxes.</p>
      <p class="right-align">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="orange-btn">Services</a>
      </p>
    </div>
    <div class="home-right">
      <div class="specials-home">
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" data-content="Our Specials">
          <img src="http://static.wixstatic.com/media/eac58e_6e8df5d582ddcce8205f0f82e18b5a85.jpg_srb_p_600_383_75_22_0.50_1.20_0.00_jpg_srb" alt="Waxing Services" />
        </a>
      </div>
      <div class="waxing-home">
        <a href="<?php echo esc_url( home_url( '/waxing' ) ); ?>" data-content="Waxing Prices">
          <img src="http://i.ytimg.com/vi/cSZRwXjUABI/maxresdefault.jpg" alt="Waxing Services" />
        </a>
      </div>
      <div class="makeup-home">
        <a href="<?php echo esc_url( home_url( '/makeup' ) ); ?>" data-content="Makeup Services">
          <img src="http://static.wixstatic.com/media/eac58e_a4d85aa8f7055f36a044e0f98fbd892e.jpg_srb_p_600_383_75_22_0.50_1.20_0.00_jpg_srb" alt="Makeup Services" />
        </a>
      </div> 
    </div>
  </div><!-- #primary -->
<?php get_footer(); ?>
