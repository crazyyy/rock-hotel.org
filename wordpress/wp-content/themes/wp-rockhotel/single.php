<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

			<h1 class="single-title inner-title"><?php the_title(); ?></h1>

			<p class="post-details"><span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span><span class="categorised"><?php _e( 'Categorised in: ', 'wpeasy' ); the_category(', '); // Separated by commas ?></span><span class="date"><?php the_time('d F Y'); ?></span></p>
			
			<?php the_content(); ?>
			
			<?php get_template_part('read-also'); ?>

			<?php comments_template(); ?>
			
		
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->

	<?php get_template_part('select-rooms'); ?>

<?php get_footer(); ?>