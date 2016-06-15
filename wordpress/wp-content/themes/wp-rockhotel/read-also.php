<div class="see-also">
  <h6>Читайте также</h6>
  <ul class="clearfix">
    <?php query_posts("showposts=4&cat=1"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
      <!-- post thumbnail -->
      <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?></a>
      <!-- /post thumbnail -->
      <!-- post title -->
      <h4>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </4>
      <!-- /post title -->
    </li>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </ul>
</div>
<!-- /.see-also -->