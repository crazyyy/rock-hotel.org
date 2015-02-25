<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
		<h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	<?php get_sidebar(); ?>
	</section>
	<!-- /section -->
	


<?php get_footer(); ?>