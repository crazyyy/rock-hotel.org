<?php /* Template Name: Home Page Template */ get_header(); ?>
	
	<!-- section -->
	<section role="main">

		<aside class="home-slider">
			<?php putRevSlider("home-slider") ?>
			<div class="go-bottom">
				<a href="#"></a>
			</div>
			<!-- /.go-bottom -->
		</aside>
		 <!-- /.home-slider --> 

		 <aside class="select-rooms">
		 	<form action="">
		 		<input type="text">
		 		<input type="text">
		 		<button></button>
		 	</form>
		 </aside>
		 <!-- /.select-rooms -->

		 <aside class="five-slides">
		 	<div class="inner">
		 		<?php putRevSlider("five-slides") ?>
		 	</div>
		 </aside>
		 <!-- /.five-slides -->
	
		<aside class="features-carousell clearfix">

			<div class="carousell-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/caru1.jpg" alt="">
				<h5>Горнолыжный курорт<span>Не далеко от отеля расположен горнолыжный курорт</span></h5>
			</div>
			<div class="carousell-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/caru2.jpg" alt="">
				<h5>Горнолыжный курорт<span>Не далеко от отеля расположен горнолыжный курорт</span></h5>
			</div>
			<div class="carousell-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/caru3.jpg" alt="">
				<h5>Горнолыжный курорт<span>Не далеко от отеля расположен горнолыжный курорт</span></h5>
			</div>
			<div class="carousell-container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/caru4.jpg" alt="">
				<h5>Горнолыжный курорт<span>Не далеко от отеля расположен горнолыжный курорт</span></h5>
			</div>

		</aside>
		<!-- /.features-carousell -->

		<aside class="user-reviews">
			<div class="inner clearfix">
				
			</div><!-- inner clearfix -->
		</aside><!-- user-reviews -->
		
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
<?php get_sidebar(); ?>	
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>