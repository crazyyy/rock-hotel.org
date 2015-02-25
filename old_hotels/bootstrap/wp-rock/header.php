<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
        <!-- icons -->
        <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:css({.tmp,app}) styles/main.css -->
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <!-- endbuild -->

        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
    </head>
<body <?php body_class(); ?>>
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
        <div class="header">
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
            <ul class="lang-selector nav-justified">
                <li class="active ico_ru"><a href="">Рус</a></li>
                <li class="ico_en"><a href="">Англ</a></li>
            </ul>
            <?php wpeHeadNav(); ?>
        </div><!-- header -->
        <div class="row content clearfix">