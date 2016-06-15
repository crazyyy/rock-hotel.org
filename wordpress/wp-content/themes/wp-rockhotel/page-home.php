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
      <!-- /.go-bottom -->

      <div class="heading-rocker">
        <h4>Рок-отель в центре Батуми</h4>
        <h5>Живи в 50 метрах от моря за 27$ в сутки</h5>
        <div class="mick-jagger"></div>
      </div>
      <!-- /.heading-rocker -->
    </aside>
     <!-- /.home-slider -->

    <div id="scroll"></div>
    <?php get_template_part('select-rooms'); ?>

     <aside class="five-slides">
       <div class="inner">
         <?php
        $lang = get_bloginfo("language");
        if('pl-PL' == $lang) {
          putRevSlider("five-pl");
        } else {
          putRevSlider("five-slides");
        }
        ?>
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
      $link = get_sub_field('link');

      ?>
      <div class="carousell-container"> <!-- TODO -->
        <a href="<?php echo $link; ?>">
          <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
          <h5><?php echo $titles; ?><span><?php echo $content; ?></span></h5>
        </a>
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

    </aside>
    <!-- /.block-with-from -->
  </section>
  <!-- /section -->

<?php get_footer(); ?>
