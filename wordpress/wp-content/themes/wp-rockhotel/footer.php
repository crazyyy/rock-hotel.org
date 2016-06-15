			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="inner">

					<?php wpeFootNav(); ?>

					<ul class="socialsisi">
						<li class="soc-vk">
							<a href="https://vk.com/rock_hotel" target="_blank">VKONTAKTE</a>
						</li>
						<li class="soc-fb">
							<a href="https://www.facebook.com/groups/rock.hotel/" target="_blank">FACEBOOK</a>
						</li>
						<li class="soc-gp">
							<a href="https://plus.google.com/115826201895805500847/posts" target="_blank">GOOGLE+</a>
						</li>
					</ul><!-- socialsisi -->
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

				</div>
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js?ver=1.11.0'></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.new.js"></script>
		<script src="http://widget.bnovo.ru/js/bnovo.js"></script>
		<script type="text/javascript">
            Bnovo_Widget.init(function () {
                Bnovo_Widget.open('_bn_widget_', {
                    type: "horizontal",
                    lcode: "1396516137",
                    lang: "ru",
                    width: "100%",
                    background: "#af1f34",
                    bg_alpha: "100",
                    padding: "88",
                    btn_background: "#57a41b",
                    btn_background_over: "#719E5B",
                    btn_textcolor: "#FFFFFF",
                    btn_textover: "#FFFFFF",
                    url: "http://rock-hotel.org/bronirovanie.htm"
                });
                Bnovo_Widget.open('_bn_widget2_', {
                    type: "horizontal",
                    lcode: "1396516137",
                    lang: "ru",
                    width: "100%",
                    background: "#af1f34",
                    bg_alpha: "100",
                    padding: "88",
                    btn_background: "#57a41b",
                    btn_background_over: "#719E5B",
                    btn_textcolor: "#FFFFFF",
                    btn_textover: "#FFFFFF",
                    url: "http://rock-hotel.org/bronirovanie.htm"
                });
            });
		</script>	
		
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
	
	</body>
</html>