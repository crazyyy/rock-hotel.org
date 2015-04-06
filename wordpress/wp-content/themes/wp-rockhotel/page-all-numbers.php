<?php /* Template Name: Numbers Main */ get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<!-- article -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('mainer clearfix'); ?>>
			<h1 class="page-title inner-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php $posts = get_field('numbers');
		        if( $posts ): ?>
		        <ul class="numbers-catalog clearfix">
		          <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
		            <li>
						<a href="<?php echo get_permalink( $p->ID ); ?>">
						<?php echo get_the_post_thumbnail( $p->ID  ); ?>
						<h2><?php echo get_the_title( $p->ID ); ?></h2>

						<p><?php echo get_field('description', $p->ID); ?></p>

						<?php if(get_field('price', $p->ID))	{ echo '<span class="price">' . get_field('price', $p->ID) . '</span>';	} ?>
						</a>
		            </li>
		          <?php endforeach; ?>
		        </ul><!-- numbers-catalog -->
		      <?php endif; ?>
		<?php endwhile; else: // If 404 page error ?>
			<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
		<?php endif; ?>
		</div>
		<!-- /article -->
		<?php get_template_part('select-rooms'); ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>