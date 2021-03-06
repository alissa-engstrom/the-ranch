<?php
get_header(); ?>
 
 
<section id="locations" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span></span>
			        	Locations
		        	</h1>
		        	<?php the_field('locations_top_copy', 'option'); ?>	
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
		
	
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 image-card special-section padding-bottom-60">
			    <div class="feather"></div>
				<div class="divider"></div>
				<h2>Choose A Location</h2>
		    </div>
		</div>
		<div class="row">
        	<div class="col">
	        	<div class="image-card">
		        	<div class="image-card-container">
			        	
			        	
			        	
					<?php 
					
					$args = array(
						'posts_per_page' => -1,
						'post_type'      => 'ranch_locations',
						'post_parent'    => 0
					);
					$the_query = new WP_Query( $args ); ?>
					
					<?php if ( $the_query->have_posts() ) : ?>
					
						<!-- pagination here -->
					
						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						<div class="thirds">
				        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark" class="content border">
					        	<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('what-we-treat-cards'); ?>
								<?php endif; ?>
					        	<h3><?php the_title(); ?></h3>
					        	<?php the_excerpt();?>
					        	<button class="green-btn">Learn More</button>
				        	</a>
			        	</div>
						
						<?php endwhile; ?>
						<!-- end of the loop -->
					
						<!-- pagination here -->
					
						<?php wp_reset_postdata(); ?>
					
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			        	
			        	
			        	
			        	
			        	
			        	
			        	
		        	</div>
	        	</div>
        	</div>
    	</div>		
	</div><!--end container-->
	
</section>
<?php
get_footer();