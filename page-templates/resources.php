<?php
/**
* Template Name: Resources
*/
get_header(); ?>
 
 
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span><?php global $post; $parent_title = get_the_title( $post->post_parent ); ?></span>
			        	Resources
		        	</h1> 
		        	<?php the_content();?>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
		
	
	<div class="container">
		<div class="row">
        	<div class="col">
	        	<div class="icon-card">
		        	
		        	<div class="icon-card-container">
			        	
			        	
			        <?php if( have_rows('icon_boxes') ): ?>
					<?php while( have_rows('icon_boxes') ): the_row(); 

					// vars
					$link = get_sub_field('icon_boxes_link');
					$icon = get_sub_field('icon_boxes_icon');
					$title = get_sub_field('icon_boxes_title');
					$text = get_sub_field('icon_boxes_copy');
			
					?>
					
					
					<div class="special-box">
						<?php
							if( $link ): 
								$link_url = $link['url'];
								$link_target = $link['target'] ? $link['target'] : '_self';
						?>
			        	<a href="<?php echo esc_url($link_url); ?>" class="content"  target="<?php echo esc_attr($link_target); ?>">
				        	<div class="icon <?php echo $icon; ?>"></div>
							<h3><?php echo $title; ?></h3>
							<p><?php echo $text; ?></p>
							<button class="green-btn">Learn More</button>
			        	</a>
						<?php endif; ?>
	        		</div><!--end box-->
		

			        	
			        			
					<?php endwhile; ?>
					<?php endif; ?>

			      			        	
					</div><!--end icon card container-->
						
	        	</div><!--end icon card-->
	             	
	        	
        	</div>
    </div>
				
	</div><!--end container-->
	
</section>

<?php
get_footer();