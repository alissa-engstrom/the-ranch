<?php
/**
* Template Name: Resource Sub Page
*/
get_header(); ?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Resources</span>
			        	<?php the_title(); ?>
		        	</h1>
		   		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
		
	
	<div class="container">
		<div class="row">
        	<div class="offset-lg-2 col-lg-8">
	        	<?php the_content(); ?>
        	</div>
    </div>
				
	</div><!--end container-->
	
</section>
<?php endwhile; endif; ?>

<?php
get_footer();