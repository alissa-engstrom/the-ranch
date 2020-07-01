<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

// vars
$field = get_field_object('page_header_image');
$value = $field['value'];
$label = $field['choices'][ $value ];

?>
<section id="<?php echo $value; ?>" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span><?php if ( $post->post_parent > 0 ) { ?><?php echo get_the_title( $post->post_parent );?><? }else{} ?></span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<?php
			        if(get_field('top_paragraph')){
		        		echo get_field('top_paragraph'); 
		        	}else if( strpos( $post->post_content, '<!--more-->' ) && has_post_thumbnail() ) { 
			        	$parts = get_extended( $post->post_content );
						echo wpautop( do_shortcode( $parts['main'] ) ); 
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
				
	</div><!--end container-->
	
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>