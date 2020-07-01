<?php get_template_part( 'nav', 'locationnav' ); ?>	
<section id="locations" class="subpage">
	<div class="page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8 page-header">
		        	<h1>
			        	<span><?php echo get_the_title( $post->post_parent );?></span>
			        	<?php the_title();?>
		        	</h1>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		<div class="row">
        	<div class="offset-lg-2 col-lg-8">
	        	<?php the_content();?>
        	</div>
    	</div>	
	</div><!--end container-->
	
</section>


