<?php get_header();?>

			
				<label class="select">
					<select onchange="if (this.value) window.location.href=this.value">
						<option value=""><?php single_term_title(); ?> Locations</option>
						<?php while ( have_posts() ) : the_post();?>
						<option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
						<?php endwhile;?>
					</select>
				</label>



			<h1><?php single_term_title(); ?> </h1>
			<?php
				$queried_object = get_queried_object(); 
				$taxonomy = $queried_object->taxonomy;
				$term_id = $queried_object->term_id;  
				$GLOBALS['wp_embed']->post_ID = $taxonomy . '_' . $term_id;
				$image = get_field('program_image', $taxonomy . '_' . $term_id);
				$title = $image['title'];
				$alt = $image['alt'];
				$size = 'program';
				$thumb = $image['sizes'][ $size ];
			?>		
			<img src="<?php echo $thumb;?>" alt="<?php echo $alt;?>">
			<?php //echo term_description(); ?>
			
			<?php the_field('first_paragraph'); ?>

			
			<?php
				if( strpos( $post->post_content, '<!--more-->' ) ) {
					echo '<div class="teaser">'. $content_arr['main'].'</div>';
				}
				else {}
	?>
			
			
			
	
		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<div class="hidden-xs"><?php get_template_part( 'entry', 'singletax' );?></div>
				<?php endwhile; endif;wp_reset_query();rewind_posts(); ?>
				
				

	        

        

</div><!--end container-->
</div><!--end push-->
<?php get_footer();?>