<?php
	/**
	 * single-dslc_galleries.php
	 * The single galleries post template in Slowave
	 * @author TommusRhodus
	 * @package Slowave
	 * @since 1.0.0
	 */
	get_header(); 
	the_post();
	
	$attachments = get_post_meta( $post->ID, 'dslc_gallery_images', true );
	$attachments = explode(' ', $attachments);
		
	/**
	 * Get Wrapper Start Title - Uses get_template_part for simple child themeing.
	 */
	get_template_part('inc/wrapper','starttitle'); 

    the_title('<h1 class="pull-left entry-title">','</h1>');
    
    get_template_part('loop/content','postnav'); 
      	
    /**
     * Get Wrapper End title - Uses get_template_part for simple child themeing.
     */
    get_template_part('inc/wrapper','endtitle'); 	
?>
  
  <div class="dark-wrapper">
    
       <?php       	
       	if ( is_array( $attachments ) ) : 
       ?>
       
       	<div class="owl-slider-wrapper" style="margin-bottom: 0;">
       	  <div class="owl-portfolio-slider owl-carousel">
       	  		
       	  		<?php 
       	  			foreach ( $attachments as $attachment ){
       	  				if( $attachment == ' ' || !$attachment )
       	  					continue;
       	  					
       	  				echo '<div class="item"><img src="'. wp_get_attachment_url($attachment) .'" alt="'.get_the_title().'"/></div>';
       	  			}
       	  		?>
       	    
       	  </div>
       	  <div class="owl-custom-nav"> <a class="slider-prev"></a> <a class="slider-next"></a> </div>
       	</div>
       
       <?php 
       	endif;
       ?>
 </div>
 
 <div class="light-wrapper">
 <div class="container inner">
       
       <div class="row">
       	
       	<div class="col-sm-12">
       		<?php the_title('<h1 class="post-title entry-title">','</h1>');  the_content(); ?>
       	</div><!--.col-sm-x-->
       
       </div><!-- /.row -->
    
  </div>   
  </div><!-- /.dark-wrapper -->

<?php 
	get_footer(); 