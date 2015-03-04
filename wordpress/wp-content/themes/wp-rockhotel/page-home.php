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

		<aside class="user-reviews">
			<div class="inner clearfix">
				<ul>
					<li>
						<h5>За что нас любят посетители</h5>
						<p>Море - прямо с балкона!!! Рядом теннистные корты, катались на велосипедах. Каждый номер - под рок-группу! Классная ненапрягающая рок-музыка! Всем рекомендую! </p>
						<p class="user-name">Iryna<span class="user-from user-from-bel">Беларусь</span></p>
					</li>
				</ul>
			</div><!-- inner clearfix -->
		</aside><!-- user-reviews -->
		
		<aside class="home-map">
			<div class="inner">
				<div class="circle">
					<h5>Батуми, Грузия</h5>
					<p>ул. Шериф Химшиашвили 15-А, 9 этаж<br>2 мин. от центра (автобус 10)<br>7 мин. от аэропорта (автобус 10)</p>
					<h5>Нужна помощь?</h5>
					<p><a href="tel:+995422200351">тел.: +995 422 20 03 51</a><br><a href="mailto:batumi.rock@gmail.com">batumi.rock@gmail.com</a></p>
				</div><!-- circle -->
			</div>
		</aside>
		<!-- /.home-map -->

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