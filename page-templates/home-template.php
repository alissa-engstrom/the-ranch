<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<section id="hero" style="background-image('<?php the_field('hero_image')?>')">
	<div class="container">
		<div class="row">
        	<div class="col-md-10 col-lg-8">
	        	<h1>
		        	<span><?php the_field('hero_title_small')?></span>
		        	<?php the_field('hero_title_large')?>
	        	</h1>
	        	<?php the_field('hero_copy')?>
        	</div>
    	</div>
	</div>
</section>

<section id="top-form-cta">
	<div class="container">
		<div class="form-cta">
			<p><?php the_field('top_form_text')?></p>
			<?php gravity_form( 10, false, false, false, '', false );?>
		<div class="group"></div>
		</div>
	</div>
	
</section>


<section id="home-programs">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12">
	        	<div class="leaf"></div>
				<div class="divider"></div>
				<h2><?php the_field('programs_title')?></h2>
				<?php the_field('programs_copy')?>
        	</div>
        	<div class="col-sm-12 programs-container">
	        	<?php
					$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				?>
				<?php $the_query = new WP_Query( array( 'post_type' => 'ranch_what_we_treat', 'posts_per_page' => -1,'post_parent'    => 0,'orderby' => 'meta_value_num', 
                                'meta_key' => 'custom_order_type_snv_1', 
                                'order' => 'ASC',  ) );?>
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	        	<div>
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
</section>

<section id="why-choose">
	<div class="container">
		<div class="rough-edge top">
	 		<div class="container">
	 			<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-brown.png" alt="Rustic Edge Image">
	 		</div>	 		
 		</div>
    	<div class="row">
        	<div class="col-sm-12">
	        	<div class="feather white"></div>
				<div class="divider"></div>
				<h2><?php the_field('why_choose_us_title')?></h2>
				<?php the_field('why_choose_us_copy')?>        	</div>
        	<div class="col-sm-12 why-choose-container">
	        	
	        	
	        	<?php if( have_rows('why_choose_us_icons') ): ?>
					<?php while( have_rows('why_choose_us_icons') ): the_row(); 

					// vars
					$icon = get_sub_field('why_choose_us_icons');
					$text1 = get_sub_field('why_choose_us_text_line_1');
					$text2 = get_sub_field('why_choose_us_text_line_2');
			
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
	 			<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-brown.png" alt="Rustic Edge Image">
	 		</div>	 		
 		</div>
    	
	</div>
<div class="group"></div>
</section>


<section class="reg-section">
	<div class="container">
		<div class="row">
        	<div class="col-12">
	        	<div class="arrows"></div>
				<div class="divider"></div>
				<h2><?php the_field('the_cost_of_treatment_title')?></h2>
				<p><?php the_field('the_cost_of_treatment_copy')?></p>
				<a href="<?php the_field('the_cost_of_treatment_url')?>" class="btn green-btn">See if you’re covered</a>
				<div class="accred">
					<h3>You Can Trust The Ranch</h3>
					<div class="accred-logos"></div>
				</div>

        	</div>
    	</div>
	</div>
</section>


<section id="locations-hp">
	<div class="rough-edge top">
	 	<div class="container">
	 		<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-green.png" alt="Rustic Edge Image">
	 	</div>	 		
 	</div>
	<div class="row location-bg">
		<div class="col-12">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="feather white"></div>
						<div class="divider"></div>
						<h2><?php the_field('locations_title')?></h2>
						<?php the_field('locations_copy')?>					
					</div>
					<div class="col-sm-12 location-container">
						<?php
						$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
						?>
						<?php $the_query = new WP_Query( array( 'post_type' => 'ranch_locations', 'post_parent' => 0, 'posts_per_page' => -1 ) );?>
						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div>
				        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="content">
					        	<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'what-we-treat-cards' ); }?>
				        		<h3><?php the_title(); ?></h3>
				        		<?php the_excerpt('');?>
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
		</div>
	</div>
	<div class="rough-edge rotate">
	 	<div class="container">
	 		<img src="<?php bloginfo('template_directory'); ?>/img/rustic-edge-green.png" alt="Rustic Edge Image">
	 	</div>	 		
 	</div>
</section>


<section class="reg-section">
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
$args = array(
	'post_type' => 'ranch_testimonials',
	'posts_per_page' => 5
);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		
		
		
		<div class="testimonial">
							<div>
								<div class="card">
								<p><?php the_content();?></p>
								<p class="testimonial-name"><?php the_field('testimonial_by');?>, <?php $terms = get_the_terms( $post->ID , 'testimonial-locations' );?><?php $terms = get_the_terms( $post->ID , 'testimonial-locations' );?><?php 
								foreach ( $terms as $term ) {
									echo $term->name;
							}?></p>
								</div>
								<?php the_post_thumbnail( 'testimonial', array( 'class' => 'testimonial-image' ) );?>
								<div class="group"></div>
							</div>
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
</section>


<section class="reg-section" id="questions">
	<div class="container">
		<div class="row">
        	<div class="col-12">
	        	<div class="leaf"></div>
				<div class="divider"></div>
				<h2>Have Questions About Your Treatment?</h2>
				<p>We want to help you make sure The Ranch is the right treatment center for your needs. We’ll be your trusted guide, answering all of your questions so that you can feel confident about your next steps in the journey to recovery.</p>
        	</div>
		</div>
		<div class="row">
        	<div class="col-md-8 offset-md-2">
	        	<div class="question-container">
		        	<?php if( have_rows('questions') ): ?>
		        	<ul id="basics" class="cd-faq-group">

					<?php while( have_rows('questions') ): the_row(); 

					// vars
					$image = get_sub_field('image');
					$content = get_sub_field('question_copy');
					$link = get_sub_field('question_url');
			
					?>
					<li class="">
							<a class="cd-faq-trigger" href="<?php echo $link; ?>"><?php echo $content?> </a>
					</li>

		

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
			        	
			        	
			        	
						
				</div>
        	</div>
		</div>
	</div>
</section>


<?php get_footer();?>