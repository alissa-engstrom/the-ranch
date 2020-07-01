<?php get_header(); ?>


<section id="programs" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span></span>
			        	Programs
		        	</h1>
		        	<?php the_field('programs_top_copy', 'option'); ?>
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 image-card special-section padding-bottom-60">
			    <div class="feather"></div>
				<div class="divider"></div>
				<h2>The Programs</h2>
		    </div>
		</div>
		<div class="row">
        	<div class="col">
	        	<div class="icon-card">
		        	
		        	<div class="icon-card-container">
			       	
					<?php 
					
					$args = array(
						'posts_per_page' => -1,
						'post_type'      => 'ranch_programs',
						'post_parent'    => 0,
						'orderby' => 'meta_value_num', 
                        'meta_key' => 'custom_order_type_snv_1', 
                        'order' => 'ASC', 
					);
					$the_query = new WP_Query( $args ); ?>
					
					<?php if ( $the_query->have_posts() ) : ?>
					
						<!-- pagination here -->
					
						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			        	<?php //$icon = get_the_field('program_icons'); ?>
					
					
					<div class="special-box">
						
			        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="content">
				        	<!--make icon option for these pages-->
				        	<div class="icon <?php the_field('program_icons'); ?>"></div>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<button class="green-btn">Learn More</button>
			        	</a>
						
	        		</div><!--end box-->
		

			        	
			        			
					

			      	<?php endwhile; ?>
						<!-- end of the loop -->
					
						<!-- pagination here -->
					
						<?php wp_reset_postdata(); ?>
					
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
       	
					</div><!--end icon card container-->
						
	        	</div><!--end icon card-->
	             	
	        	
        	</div>
		</div>
				
	</div><!--end container-->


</section>




<?php get_footer(); ?>