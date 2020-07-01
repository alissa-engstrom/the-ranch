<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

// vars
$field = get_field_object('page_header_image');
$value = $field['value'];
$label = $field['choices'][ $value ];

?>
<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Therapies</span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<div class="meta">
			        	<p>Posted on <?php echo get_the_date('F j, Y'); ?><br>
			        	 <?php get_template_part( 'modified-date', get_post_format() );?>	
			        	</p>
		        	</div>
		        	<?php
			        if(get_field('top_paragraph')){
		        		echo get_field('top_paragraph'); 
		        	}?>
		   		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	
	
	
	<div class="container">
		<div class="row">
			<div class="col" id="featured-image">
		    	<?php
			    	if ( has_post_thumbnail() ) {
				    	the_post_thumbnail('archive');
				    }
			    ?>
		    </div>
		</div>
		<div class="row" id="clear-row">
        	<div class="offset-lg-2 col-lg-8 single-therapy-content">
	        	<?php the_content(); ?>
	        	<?php get_template_part( 'content-author', get_post_format() );?>	
        	</div>
    	</div>
				
	</div><!--end container-->
	
</section>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'location' ); ?>	
<?php get_footer(); ?>