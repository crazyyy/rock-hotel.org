         </div><!-- content -->
            <div class="footer">
                <div class="row mainfooter">
                    <div class="foot-widget default-widget col-lg-2">
                     	<?php if ( is_active_sidebar('widgetarea2') ) : ?>
						<?php dynamic_sidebar( 'widgetarea2' ); ?>
						<?php else : ?>
						<?php endif; ?>
                    </div>
                    <div class="foot-widget default-widget col-lg-2">
                     	<?php if ( is_active_sidebar('widgetarea3') ) : ?>
						<?php dynamic_sidebar( 'widgetarea3' ); ?>
						<?php else : ?>
						<?php endif; ?> 
                    </div>
                    <div class="foot-widget foot-widget-copy col-lg-4">
                        <p>тел.: <a href="tel:+30936869846">+3 (093) 68 69 846</a> <br>e-mail: <a href="mailto:rrock.hostel@gmail.com">rrock.hostel@gmail.com</a> </p>
                        <span class="footer-logo"></span>
                    </div><!-- foot-widget-copy -->
                    <div class="foot-widget foot-widget-social col-lg-3">
                        <ul class="soc-list clearfix">
                            <li class="soc1"><a href=""></a></li>
                            <li class="soc2"><a href=""></a></li>
                            <li class="soc3"><a href=""></a></li>
                        </ul>
                    </div><!-- foot-widget-social -->
                </div><!-- mainfooter -->
            </div><!-- footer -->
        </div>
    
        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <?php wp_footer(); ?>
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/affix.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/alert.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/dropdown.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/tooltip.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/modal.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/transition.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/button.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/popover.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/carousel.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/scrollspy.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/collapse.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap-sass-official/vendor/assets/javascripts/bootstrap/tab.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>