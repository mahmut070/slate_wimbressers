<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol2">

				<?php include_once('boxes.php'); ?>	

				<div>
					
				</div>
				<?php get_sidebar(); ?>
			</div>

			<div class="u-gridCol10">
				<div class="Header">
					<div class="Slider-img">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image7.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image1.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image2.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image6.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image5.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image4.jpg">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/image3.jpg">
					</div>

					<div class="Slide-one-text">
						<a href="/aanmelden">
							<p>OCCASIONS</p>
							<span class="slider-regel-twee">Kom eens binnen en kijk vrijblijvend <br> naar ons geweldig assortiment!</span>
						</a>
					</div>
				</div>


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>

				<img src="<?php echo get_stylesheet_directory_uri();?>/img/collage.png">

			</div>

		</div>
	</div>

<?php get_footer(); ?>
