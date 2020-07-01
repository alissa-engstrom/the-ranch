<?php get_template_part( 'nav', 'locationnav' ); ?>	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<section id="locations-home" class="subpage">
	<div class="page-header location-bgs" style="background-image: url(<?php echo $image ?>);">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8 page-header">
		        	<h1>
			        	<span>Welcome To</span>
			        	<?php the_title(); ?>
		        	</h1>
		        	<?php the_content();?>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
	<?php endwhile; endif; ?>
	
	<div id="location-programs" class="<?php the_field('programs_background'); ?>">
		<div class="container">
			<!-- programs -->
		    <div class="row">
			    <div class="col image-card special-section">
				    <div class="feather"></div>
					<div class="divider"></div>
					<h2>Our Programs at <?php the_title(); ?></h2>
				    <div class="image-card-container">
					    <?php $ids = get_field('what_we_treat_at_this_location', false, false);
						      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
					    ?>
					    <?php $the_query = new WP_Query( array( 'post_type' => 'ranch_what_we_treat', 'post__in' => $ids, 'post_parent'    => 0,'orderby' => 'meta_value_num', 
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
		    <!-- end middle locations -->
		</div>
	</div><!--end locations-->
	
	
	<div id="location-images">
		<div class="container">
			<div class="row">
				<div class="offset-lg-1 col-lg-10">
					<?php 
					$images = get_field('gallery_images');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<div class="location-images-slides">
						
						<?php foreach( $images as $image ): ?>
						<div class="slide">
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
						<?php endforeach; ?>
						
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div><!--end location images-->
	
		<div class="reg-section">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<h2><?php the_field('location_cta')?></h2>
					<div class="btn cta-button lrg-btn"><?php echo do_shortcode( '[phone]');?></div>
				</div>
			</div>
		</div>
	</div><!--end middle cta-->
	
	
	<div id="why-choose">
		<div class="container">
			<div class="rough-edge top">
		 		<div class="container">
		 			<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-brown.png">
		 		</div>	 		
	 		</div>
	    	<div class="row">
	        	<div class="col-sm-12">
		        	<div class="feather white"></div>
					<div class="divider"></div>
					<h2>Why Choose The Ranch <?php the_title(); ?>?</h2>
					<?php the_field ('location_why_choose_us_copy');?>
	        	</div>
	        	<div class="col-sm-12 why-choose-container">
		        	
		        	<?php if( have_rows('why_choose_icons') ): ?>
					<?php while( have_rows('why_choose_icons') ): the_row(); 

					// vars
					$icon = get_sub_field('location_why_choose_icons');
					$text1 = get_sub_field('location_why_choose_copy_line_1');
					$text2 = get_sub_field('location_why_choose_copy_line_2');
			
					?>
		
					<div>
			        	<div class="content">
				        	<div class="icon <?php echo $icon; ?>"></div>
			        		<h3><?php echo $text1; ?><span><?php echo $text2; ?></span></h3>
			        	</div>
			        </div><!--end why choose-->
		
					<?php endwhile; ?>
					<?php endif; ?>

			    </div>
	    	</div>
	    	<div class="rough-edge rotate">
		 		<div class="container">
		 			<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-brown.png">
		 		</div>	 		
	 		</div>
	    	
		</div>
	<div class="group"></div>
	</div>
	
	
	
		<div class="reg-section">
		<div class="container">
			<div class="row">
	        	<div class="col-12">
		        	<div class="arrows"></div>
					<div class="divider"></div>
					<h2>What Our Alumni Have To Say</h2>
	        	</div>
			</div>
			<div class="row">
	        	<div class="col-md-8 offset-md-2">
		        	<div class="testimonials">
			        	<?php
			        	$testimonials = get_field('testimonial_location_select');
						if ($testimonials) {
							if (!is_array($testimonials)) {
								$topics = array($topics);
  							}
  							$args = array(
  								'post_type' => 'ranch_testimonials',
  								'posts_per_page' => 5,
  								'orderby' => 'rand',
  								'tax_query' => array(
  								array(
  									'taxonomy' => 'testimonial-locations',
  									'terms' => $testimonials,
  								),
  							),
  						);
  						$quote_query = new WP_Query($args);
  						if ($quote_query->have_posts()) { while($quote_query->have_posts()) { $quote_query->the_post();?>
  						<div class="testimonial">
							<div>
								<div class="card">
								<p><?php the_content();?></p>
								<p class="testimonial-name"><?php the_field('testimonial_by');?></p>
								</div>
								<?php the_post_thumbnail( 'testimonial', array( 'class' => 'testimonial-image' ) );?>
								<div class="group"></div>
							</div>
		        		</div>
						<?php 
								}
							}
							wp_reset_postdata();
						}?>
			        	
			        	
			        	
			        	
			        </div>
	        	</div>
			</div>
		</div>
	</div>
	
	
	<div class="reg-section">
		<div class="container">
			<div class="row">
	        	<div class="col-12">
		        	<div class="arrows"></div>
					<div class="divider"></div>
					<h2>Our Location</h2>
	        	</div>
			</div>
			<div class="row">
	        	<div class="offset-lg-1 col-lg-10">
		        	<?php 

						$location = get_field('location_address');

						if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>
		        	<h3>Address</h3>
		        	<p>
		        	<?php
							$address = explode( "," , $location['address']);
							echo $address[0].'<br>'; //street number
							echo $address[1].','.$address[2]; //city, state + zip
						?>
					</p>

		        	
					

					<h3>Phone</h3>
					<?php $location_number = get_field('location_phone_number');?>
					<p><div class="btn cta-button med-btn"><?php echo $location_number;?></div></p>
	        	</div>
			</div>
		</div>
	</div>


	
	
	
</section>