<div class="archive-article">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail('archive'); ?></a>
		<div class="text">
	 	
		<p class="meta">Posted in <?php the_category( ', ' ); ?> 
		
		<?php if ( is_tax('resource-categories') ) {?>
		<?php
					        	$terms = get_the_terms( $post->ID , 'resource-categories' );
								foreach ( $terms as $term ) {
									$term_link = get_term_link( $term, 'resource-categories' );
									echo '<a href="' . $term_link . '">' . $term->name . '</a>';
							}
						?>
						<?php } ?>
						</p>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		
			<?php
			     if( strpos( $post->post_content, '<!--more-->' ) ) {
        the_content('');
    }
    else {
        the_excerpt('');
    }			?>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"class="green-btn">Read More</a>
	 	
	</div>
</div>
