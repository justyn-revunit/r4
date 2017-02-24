<?php  if (!is_numeric($post->ID) or get_post_meta($post->ID,'bbe_hide_footer',TRUE)!=1): ?>
<div id="bbe-footer-wrap">
  <footer class="container site-footer">
	<hr/>
	<div class="row">
	  <?php dynamic_sidebar('footer-widget-area'); ?>
	</div>
	<hr/>
	<div class="row">
	  <div class="col-lg-12 site-sub-footer">
		<?php bbe_footer() ?>
	  </div>
	</div>
  </footer>
</div> <!-- /bbe-footer-wrap -->
<?php endif ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/modals/js/classie.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/modals/js/modalEffects.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/modals/js/cssParser.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/modals/js/css-filters-polyfill.js"></script>
<?php wp_footer(); ?>
</body>
</html>
