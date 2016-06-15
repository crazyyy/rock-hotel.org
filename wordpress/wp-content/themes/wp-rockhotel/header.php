<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name='yandex-verification' content='5d4d8aebcc712c12' />

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
	<script>
	!function(){
		conditionizr()
	}()
	</script>

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
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=518229014961549&amp;ev=PixelInitialized" /></noscript>

<meta name='yandex-verification' content='7215266389a43a8b' />
<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MHPFNF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHPFNF');</script>
<!-- End Google Tag Manager -->

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clearfix" role="banner">

			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php wpeHeadNav(); ?>
			</nav>
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
			
			<a href="tel:+995422200351" class="phone">+995422200351 +380667797502</a>

		</header>
		<!-- /header -->
