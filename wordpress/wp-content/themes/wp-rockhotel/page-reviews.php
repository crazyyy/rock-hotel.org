<?php /* Template Name: All Review Page */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<!-- article -->


	<?php 
		query_posts( array(
			'post_type' => reviews,
			'showposts' =>10 )
		); 
	?>
	<?php while ( have_posts() ) : the_post(); ?>





		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

			<h1 class="page-title inner-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>
			


		</article>

	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
	<?php get_template_part('user-reviews'); ?>
	<?php get_template_part('select-rooms'); ?>
<?php get_footer(); ?>