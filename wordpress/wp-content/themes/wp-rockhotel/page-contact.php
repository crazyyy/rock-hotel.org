<?php /* Template Name: Contact Page */ get_header(); ?>
	
	<!-- section -->
	<section role="main">

	<div class="contact-page">
		<div class="inner clearfix">
			<div class="cont-container">
				<?php the_content(); ?>
			</div>
			<!-- /.cont-container -->
			<?php echo do_shortcode('[contact-form-7 id="119" title="Контактная форма"]'); ?>
		</div>
		<!-- /.inner -->
	</div>
	<!-- /.contact-page -->

	<?php get_template_part('home-map'); ?>

	</section>
	<!-- /section -->

<?php get_footer(); ?>