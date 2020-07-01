<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
?>
<section id="programs" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Programs</span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<div class="meta">
			        	<p>Posted on <?php echo get_the_date('F j, Y'); ?><br>
			        	 <?php get_template_part( 'modified-date', get_post_format() );?>	
			        	</p>
		        	</div>
		        	<?php
			        	if( strpos( $post->post_content, '<!--more-->' ) && has_post_thumbnail() ) { 
			        	$parts = get_extended( $post->post_content );
						echo wpautop( do_shortcode( $parts['main'] ) ); 
						}else if ( !has_post_thumbnail() ) {
							
						}
					?>
		   		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->	
	
	<div class="container">
		<div class="row">
			<div class="col" id="featured-image-page">
		    	<?php
			    	if ( has_post_thumbnail() ) {
				    	the_post_thumbnail('archive');
				    }
			    ?>
		    </div>
		</div>
		<div class="row" id="clear-row">
        	<div class="offset-lg-2 col-lg-8">
	        	 <?php if( strpos( $post->post_content, '<!--more-->' ) && has_post_thumbnail() ) {
	        	
		        	if ( ! empty( $parts['extended'] ) ) : 
						echo apply_filters( 'the_content', $parts['extended'] ); 
					endif; 
				?>
				
				<?php 
					}else { 
					the_content();
					}?>
        	</div>
    	</div>
    	<div class="row" id="clear-row">
        	   		<div class="offset-lg-2 col-lg-8">
	        	   	
			   		<?php get_template_part( 'content-author', get_post_format() );?>	
			   		
        	   		</div>
		   </div>
				
	</div><!--end container-->
	
</section>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'location' ); ?>	
<?php get_footer(); ?>