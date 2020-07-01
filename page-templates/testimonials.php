<?php
/**
* Template Name: Testimonials
*/
get_header(); ?>

<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<p><?php the_field('top_testimonial_text', 'option'); ?></p>
		        </div>
		        
		    </div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		
		<div class="offset-md-1 col-md-10 ">
			
						
			<?php 
			$args = array(
				'post_type'	 		=>  'ranch_testimonials',
				'posts_per_page' 	=> -1
			);
			// the query
			$the_query = new WP_Query( $args ); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>
			
				<!-- pagination here -->
			
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<div class="card padding-50 testimonial-card">
						<?php the_content();?>
						
						<p class="testimonial-name"><?php the_field('testimonial_by');?>, <?php $terms = get_the_terms( $post->ID , 'testimonial-locations' );?><?php $terms = get_the_terms( $post->ID , 'testimonial-locations' );?><?php 
								foreach ( $terms as $term ) {
									echo $term->name;
							}?></p>
						<?php the_post_thumbnail( 'testimonial', array( 'class' => 'testimonial-image' ) );?>
					</div><!--end card-->

					
				<?php endwhile; ?>
				<!-- end of the loop -->
			
				<!-- pagination here -->
			
				<?php wp_reset_postdata(); ?>
			
			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
						
			
						
		</div>
	</div>
	
		
</section>

<?php
get_footer();
 