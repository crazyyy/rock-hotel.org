<!-- sidebar -->
<div class="col-lg-4 sidebar">

	<?php if ( is_active_sidebar('widgetarea1') ) : ?>
		<?php dynamic_sidebar( 'widgetarea1' ); ?>
	<?php else : ?>
 
        <div class="widget widget-form">
            
        </div><!-- widget-form -->
        <div class="widget widget-map">
            <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
        </div><!-- widget-map -->
        <div class="widget widget-adress">
            <p>9 этаж, дом 15-А <br>ул. Шериф Химшиашвили <br>Батуми, Грузия<br>тел.: <a href="tel:+380936869846">+38 093 686 98 46</a><br><a href="tel:+995579034716">+99 557 903 47 16</a><br><a href="mailto:rrock.hostel@gmail.com">rrock.hostel@gmail.com</a><br>2 мин. от центра (автобус 10)<br>7 мин. от аэропорта (автобус 10) </p>
        </div><!-- widget-adress -->
        <div class="widget widget-weather">
            
        </div><!-- widget-weather -->
 
	<?php endif; ?>
</div>
<!-- /sidebar -->



