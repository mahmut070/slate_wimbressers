	<div class="Footer">
		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				 <div class="u-gridCol2">
				 <img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
                </div>
                <div class="u-gridCol10 u-cf">
                	<?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>
			</div>
			<?php endif; ?>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

 
  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>  
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shoppingcart-collapse.js"></script>  
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js"></script>  

  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
