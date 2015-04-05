			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="inner">

					<?php wpeFootNav(); ?>

					<ul class="socialsisi">
						<li class="soc-vk">
							<a href="">VKONTAKTE</a>
						</li>
						<li class="soc-fb">
							<a href="">FACEBOOK</a>
						</li>
						<li class="soc-gp">
							<a href="">GOOGLE+</a>
						</li>
					</ul><!-- socialsisi -->

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
		  Bnovo_Widget.init(function(){
		    Bnovo_Widget.open('_bn_widget_', {
		        type: "horizontal",
		        lcode: "1234567890",
		        lang: "ru",
		        width: "960",
		        background: "#af1f34",
		        bg_alpha: "100",
		        padding: "88",
		        btn_background: "#57a41b",
		        btn_background_over: "#719E5B",
		        btn_textcolor: "#FFFFFF",
		        btn_textover: "#FFFFFF"
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