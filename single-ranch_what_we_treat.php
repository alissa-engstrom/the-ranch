<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
?>
<section id="what-we-treat" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>What We Treat</span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<div class="meta">
			        	<p>Posted on <?php echo get_the_date('F j, Y'); ?><br>
			        	 <?php get_template_part( 'modified-date', get_post_format() );?>	
			        	</p>
		        	</div>
		        	<?php
			        	if( strpos( $post->post_content, '<!--more-->' ) && has_post_thumbnail() ) { 
			        	$parts = get_extended( $post->post_content );
						echo wpautop( do_shortcode( $parts['main'] ) ); 
						}else if ( !has_post_thumbnail() ) {
							
						}
					?>
		        			   		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
		
	
	<div class="container">
		<div class="row">
			<div class="col" id="featured-image-page">
		    	<?php
			    	if ( has_post_thumbnail() ) {
				    	the_post_thumbnail('archive');
				    }
			    ?>
		    </div>
		</div>
		<div class="row" id="clear-row">
        	<div class="offset-lg-2 col-lg-8">
	        	<?php if( strpos( $post->post_content, '<!--more-->' ) && has_post_thumbnail() ) {
	        	
		        	if ( ! empty( $parts['extended'] ) ) : 
						echo apply_filters( 'the_content', $parts['extended'] ); 
					endif; 
				?>
				
				<?php 
					}else { 
					the_content();
					}?>
        	</div>
    	</div>
		<?php $ids = get_field('disorders_we_treat', false, false);
						      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
					    ?>
					    <?php if ($ids) {?>
		<div class="row">
			    <div class="col image-card special-section">
				    <div class="feather"></div>
					<div class="divider"></div>
					<h2>Disorders We Treat</h2>
				    <div class="image-card-container">
					    
					    <?php $the_query = new WP_Query( array( 'post_type' => 'ranch_what_we_treat', 'post__in' => $ids, 'orderby' => 'meta_value_num', 
                                'meta_key' => 'custom_order_type_snv_1' ) );?>
					    <?php if ( $the_query->have_posts() ) : ?>
				 		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    <div class="fourths">
				        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="content">
					        	<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'what-we-treat-cards' ); }?>
				        		<h3><?php the_title(); ?></h3>
								<button class="green-btn">Read More</button>
				        	</a>
			        	</div><!--end program-->
			        	<?php endwhile; ?>
				 	<?php wp_reset_postdata(); ?>

				 	<?php else : ?>
				 		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				 	<?php endif; ?>
				    
				    </div>
				    
			    </div>
		    </div>
		   <?php } else {}?>
		   <div class="row" id="clear-row">
        	   		<div class="offset-lg-2 col-lg-8">
	        	   	
			   		<?php get_template_part( 'content-author', get_post_format() );?>	
			   		
        	   		</div>
		   </div>
				
	</div><!--end container-->
	
</section>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'location' ); ?>	
<?php get_footer(); ?>