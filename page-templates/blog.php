<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Resources</span>
			        	The Blog test
		        	</h1>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
	<div class="container">
		<div class="row">
			<div class="col">
				<?php get_template_part( 'nav', 'categories' ); ?>			
			</div>
		</div>
		<div class="row">
        	<div class="offset-lg-1 col-lg-10">
	        	<?php //query_posts('post_type=post&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        		<?php get_template_part( 'entry', 'blogcontent' ); ?>	        	
	        	<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
        	</div>
    	</div>
	</div><!--end container-->
</section>
<?php get_footer(); ?>