<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta name='yandex-verification' content='5d4d8aebcc712c12' />
  <meta name='yandex-verification' content='7215266389a43a8b' />
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- dns prefetch -->
  <link href="//www.google-analytics.com" rel="dns-prefetch">

  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

  <!-- css + javascript -->
  <?php wp_head(); ?>

  <!-- FB Всі хто заходив на rock-hotel.org і не бронював -->
  <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
      _fbq.loaded = true;
    }
    _fbq.push(['addPixelId', '518229014961549']);
  })();
  window._fbq = window._fbq || [];
  window._fbq.push(['track', 'PixelInitialized', {}]);
  </script>

  <link href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<body <?php body_class(); ?>>

  <!-- wrapper -->
  <div class="wrapper">

    <!-- header -->
    <header class="header clearfix" role="banner">
      <!-- nav -->
      <div id="Wrapp">
            <nav class="nav" role="navigation">

                                            <?php wpeHeadNav(); ?>


            </nav>
      </div>
      <div class="sea_botton_wrap"><a class="sea_botton" href="#" onclick="openbox('Wrapp');return false;">Меню<i class="fa fa-bars fa-2x"></i></a></div>
<script>
    function openbox(id,tt) {
  var div = document.getElementById(id);
  var tt_div = document.getElementById(tt);
  if(div.style.display == 'block') {
    div.style.display = 'none';
  }
  else {
    div.style.display = 'block';
  }
  }
</script>

      <!-- /nav -->

      <!-- logo -->
      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
        <a href="<?php echo home_url(); ?>">
        <?php  } ?>
        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
        <?php if ( is_front_page() && is_home() ){
        } else { ?>
        </a>
        <?php } ?>
      </div>
      <!-- /logo -->

      <ul class="lang-selector">
        <li><a href="">Rus</a></li>
        <li><a href="">Eng</a></li>
        <li><a href="">Geo</a></li>
      </ul>

      <ul class="phone-block">
        <li class="phone phone_top"><a href="tel:+995422200351">+995422200351</a></li>
        <li class="phone phone_bottom"><a href="tel:+380667797502">+380667797502</a></li>
      </ul><!-- /.phone-block -->

    </header><!-- /header -->
