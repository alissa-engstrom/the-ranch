<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span></span>
			        	<?php the_title();?>
		        	</h1>
		        	
		        	

	

		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	
		
	<div class="container" id="blog-content">
		<div class="row">
        	<div class="col" id="featured-image">
	        	
	        	<?php 
		        	if ( has_post_thumbnail() ) {
		        		//the_post_thumbnail('archive'); 
		        	
		        	}?>
        	</div>
    	</div>

	        	
    	<div class="row" id="main-content" >
        	
        	<div class="offset-lg-2 col-lg-8">
		        
		        <?php 
		        	if ( has_post_thumbnail() ) {
		        		the_post_thumbnail('dv-team-square', ['class' => 'alignleft']);

		        	
		        	}?>
		        <?php the_content();?>


		        
		        	
		            	
		    	<div class="blog-cta">
			    	<?php the_field('blog_cta_text', 'option'); ?>
			    	
			    	<div class="btn cta-button lrg-btn"><?php echo do_shortcode('[phone]');?></div>
		    	</div>
		        
        	</div>
        	<div class="group"></div>
    	</div>
    	
    	
    	
    	    	
    	
    	
    	
	</div>
	
	
	
	
	
	
</section>
    	
    	
    	
    	    	
    	
    	
    	
	</div>



<?php endwhile; endif; ?>

</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>