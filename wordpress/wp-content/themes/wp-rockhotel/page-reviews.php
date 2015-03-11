<?php /* Template Name: All Review Page */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<!-- article -->

		<h1 class="lazy-selector">Отзывы о нас</h1>

		<ul class="all-review-page">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$temp = $wp_query;
			$wp_query= null;
			query_posts('post_type=reviews'.'&showposts=10'.'&paged='.$paged);
			while (have_posts()) : the_post();?>

			<li>
				<?php the_content(); ?>
				<p class="user-name"><?php the_title(); ?><span class="user-from user-from-<?php the_field('country'); ?>"><?php 
				$field = get_field_object('country');
				$value = get_field('country');
				$label = $field['choices'][ $value ];
				echo $label; ?></span></p>
			</li>


			<?php endwhile; ?>
		</ul><!-- all-review-page -->
		<div class="paginugets">
			<?php html5wp_pagination(); ?>		
		</div>
		<!-- /.paginugets -->
		<?php $wp_query = null; $wp_query = $temp;?>

	</section>
	<!-- /section -->
	<?php get_template_part('select-rooms'); ?>
<?php get_footer(); ?>