<?php


get_header(); ?><section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Resources</span>
			        	<?php 
   $tax = $wp_query->get_queried_object();
   echo ''. $tax->name . '';
   echo "<br>";
   //echo ''. $tax->description .''; 
?>
		        	</h1>
		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	<div class="container">
		<div class="row">
			
			<div class="col">
				
				<ul class="resource-categories blog">
					<li class="list-group-item"><h2>Categories</h2><a href="#" class="view-categories">View Categories</a>
					<?php
									$terms = get_terms('resource-categories');
									if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
										echo '<ul class="list-group-sub">';
										foreach ($terms as $term) {
											echo '<li><a href="'.get_term_link($term->slug, 'resource-categories').'">'.$term->name.'</a></li>';
    									}
										echo '</ul>';
									}	
								?>
					</li>
				</ul>
			</div>
			
			
		</div>
		<div class="row">
        	<div class="offset-lg-1 col-lg-10">
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        		<?php get_template_part( 'entry', 'blogcontent' ); ?>
	        	<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>	        	
        	</div>
    	</div>
	
	
				
	</div><!--end container-->
	
</section>
<?php get_footer();