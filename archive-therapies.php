<?php get_header(); ?>
<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	Therapies
		        	</h1>
		        	<?php the_field('therapies_top_copy', 'option'); ?>
		        	
		        </div>
		        
		        <div class="offset-lg-1 col-lg-10 select-container">
			        <h4>Choose A Location</h4>
			        <div class="facetwp-facet facetwp-facet-therapies facetwp-type-radio custom-select" data-name="location" data-type="radio" style="display: none">
						<div class="facetwp-radio modded" data-value="1971bf1f0d9246ba1ab370268f0eeab2"><span class="desktop">Pennsylvania</span><span class="mobile">PA</span></div>
						<div class="facetwp-radio modded" data-value="66e7cc9e2fbabff209731220f7f5930f"><span class="desktop">Tennessee</span><span class="mobile">TN</span></div>
						<div class="facetwp-radio modded checked" data-value="all"><span class="desktop">SHOW ALL</span><span class="mobile">ALL</span></div>
		        	</div>
		        	
		        	<?php echo facetwp_display( 'facet', 'therapies' ); ?>
		        	
		        	<?php //echo facetwp_display( 'therapies' ); ?>

		        	
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->




<div class="therapies">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 therapies-container">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
											
					
						<?php //the_field('therapies_locations'); ?>
						
						
						
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="horz-card ">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('therapies');
				    		}
			    		?>	
						<div class="text">
							<h3><?php the_title(); ?></h3>
							<?php if ( has_excerpt()){?>
								<p><?php echo get_the_excerpt();?></p>
							<?php }else{?>
							
								<?php
							
								$read_more = '...';

								echo wpautop( 
									wp_trim_words(
										get_the_content(), 
										15, 
										$read_more
									)
								);
								}
								?>
							
							<?php //the_excerpt(''); ?>
						</div>
					</a><!--end indiv. therapy-->
					<?php endwhile; endif; ?>
					
			</div>
		</div>
	</div>
</div>




</section>

<?php get_footer(); ?>