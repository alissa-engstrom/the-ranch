<?php get_header(); ?>
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Search Results For</span>
			        	<?php echo get_search_query(); ?>
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
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        		<?php get_template_part( 'entry', 'blogcontent' ); ?>
	        	<?php endwhile;?>
	        	<?php else : ?>

<p>Sorry, nothing matched your search. Please try again.</p>
<?php endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>	        	
        	</div>
    	</div>
	</div><!--end container-->
</section>
<?php get_footer(); ?>
