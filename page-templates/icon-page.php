<?php
/**
* Template Name: Icon Card Page
*/ get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

// vars
// vars
$field = get_field_object('page_header_image');
$value = $field['value'];
$label = $field['choices'][ $value ];

?>
<section id="<?php echo $value; ?>" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span><?php if ( $post->post_parent > 0 ) { ?><?php echo get_the_title( $post->post_parent );?><? }else{} ?></span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<?php the_content(); ?>
		   		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 image-card special-section padding-bottom-60">
			    <div class="feather"></div>
				<div class="divider"></div>
				<h2><?php the_field('icon_header'); ?></h2>
		    </div>
		</div>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>