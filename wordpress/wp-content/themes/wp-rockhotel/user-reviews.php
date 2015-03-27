<aside class="user-reviews">
	<h5>За что нас любят посетители</h5>
	<div class="inner owl-carousel clearfix">

	<?php 
		query_posts( array(
			'post_type' => reviews,
			'showposts' =>10 )
		); 
	?>
	<?php while ( have_posts() ) : the_post(); ?>
	    <div class="item">
			<?php the_content(); ?>
			<p class="user-name"><?php the_title(); ?><span class="user-from user-from-<?php the_field('country'); ?>"><?php 
			$field = get_field_object('country');
			$value = get_field('country');
			$label = $field['choices'][ $value ];
			echo $label; ?></span></p>
	    </div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

	</div><!-- inner clearfix -->
</aside><!-- user-reviews -->