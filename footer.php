<?php 
	/**
	 * footer.php
	 * The footer used in Slowave
	 * @author TommusRhodus
	 * @package Slowave
	 * @since 1.0.0
	 */
?>

<footer class="black-wrapper">
  
	<?php if( is_active_sidebar('footer1') ) : ?>
		<div class="container inner">
		  <div class="row">
		  	
		  	<?php 
		  		/**
		  		 * Get footer widgets depending on active columns
		  		 */
		  		get_template_part('loop/content','footerwidgets'); 
		  	?>
		    
		  </div><!-- /.row --> 
		</div><!-- .container -->
	<?php endif; ?>
	
	<div class="sub-footer">
		<div class="container">
		
		<div class="pull-left">
			<?php echo wpautop(htmlspecialchars_decode(get_option('copyright', 'Configure this message in "appearance" => "customize"'))); ?>
		</div>
		
		<?php
			/**
			 * Subfooter nav menu, allows top level items only
			 */
			if ( has_nav_menu( 'footer' ) ) { 
			    wp_nav_menu( 
				    array(
				        'theme_location'    => 'footer',
				        'depth'             => 1,
				        'container'         => false,
				        'container_class'   => false,
				        'menu_class'        => 'footer-menu pull-right'
				    ) 
			    );
			} 
		?>
		
		</div>
	</div>
    
</footer>
  
</div><!-- /.body-wrapper --> 

<?php wp_footer(); ?>
<p class="TK">Powered by <a href="http://themekiller.com/" title="themekiller" rel="follow"> themekiller.com </a><a href="http://anime4online.com/" title="anime4online" rel="follow"> anime4online.com </a> <a href="http://animextoon.com/" title="animextoon" rel="follow"> animextoon.com </a> <a href="http://apk4phone.com/" title="apk4phone" rel="follow"> apk4phone.com </a><a href="http://tengag.com/" title="tengag.com" rel="follow"> tengag.com </a><a href="http://moviekillers.com/" title="moviekillers" rel="follow"> moviekillers.com </a></p>
</body>
</html>