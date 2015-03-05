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

		<?php get_template_part('select-rooms'); ?>

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
		<?php get_template_part('user-reviews'); ?>
		
		<!-- <?php get_template_part('home-map'); ?> -->

		<aside class="block-with-from">
			<h5>Зачем откладывать на позже?</h5>
			<h5>Мы ждем вас уже сейчас!</h5>
			<form action="">
				<input type="text" value="20.09.2015">
				<input type="text" placeholrder="20.09.2015">
				<button>Выбрать номер</button>
			</form>
		</aside>
		<!-- /.block-with-from -->
	</section>
	<!-- /section -->

<?php get_footer(); ?>