<?php /* Template Name: Home Page */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
		<aside class="home-slider">
			<?php putRevSlider("home-slider") ?>
			<div class="go-bottom">
				<a href="<?php echo home_url(); ?>#scroll"></a>
			</div>
			<!-- /.go-bottom -->

		</aside>
		 <!-- /.home-slider --> 

		<div id="scroll"></div>

		<?php get_template_part('select-rooms'); ?>

		 <aside class="five-slides">
		 	<div class="inner">
		 		<?php putRevSlider("five-slides") ?>
		 	</div>
		 </aside>
		 <!-- /.five-slides -->

		<?php if( have_rows('carousellcont') ): ?>
		<aside class="features-carousell clearfix">
		<?php while( have_rows('carousellcont') ): the_row(); 

			// vars
			$image = get_sub_field('img');
			$content = get_sub_field('description');
			$titles = get_sub_field('title');

			?>
			<div class="carousell-container">
				<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
				<h5><?php echo $titles; ?><span><?php echo $content; ?></span></h5>
			</div>
			<?php endwhile; ?>

		</aside>
		<!-- /.features-carousell -->
		<?php endif; ?>

		<?php get_template_part('user-reviews'); ?>

		<?php get_template_part('home-map'); ?>



		<aside class="block-with-from">
			<h5>Зачем откладывать на позже?</h5>
			<h5>Мы ждем вас уже сейчас!</h5>
			<div id="_bn_widget2_">
			</div>
			<script src="http://widget.bnovo.ru/js/bnovo.js"></script>
			<script type="text/javascript">
			  Bnovo_Widget.init(function(){
			    Bnovo_Widget.open('_bn_widget2_', {
			        type: "vertical",
			        lcode: "1396516137",
			        lang: "ru",
			        width: "230",
			        background: "#F2F2F2",
			        bg_alpha: "75",
			        padding: "18",
			        title_color: "#292929",
			        btn_background: "#57A31B",
			        btn_background_over: "#355C16",
			        btn_textcolor: "#FFFFFF",
			        btn_textover: "#FFFFFF"
			    });
			  });
			</script>

		</aside>
		<!-- /.block-with-from -->
	</section>
	<!-- /section -->

<?php get_footer(); ?>