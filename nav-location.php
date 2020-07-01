<div id="location-bar-container">
	<div class="container">
		<!--<div id="close-locations"><span class="close-text">Close Locations</span></div>-->
		<div id="location-bar">
			<ul class="location-blocks">
				<li class="program">
					<span>Locations that offer</span>
					<h5><?php the_title(); ?> <i class="fa fa-angle-up"></i></h5>
				</li>
				<li class="locations">
				<?php 
					$posts = get_field('available_at');
					if( $posts ): ?>
						<ul>
						<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
						    <li>
						    	<a href="<?php echo get_permalink( $p->ID ); ?>">
							    <?php echo get_the_post_thumbnail( $p->ID, 'location-bar' ); ?>
			    				<?php echo get_the_title( $p->ID ); ?> <i class="fas fa-angle-right"></i>
			    				</a>
						    </li>
						<?php endforeach; ?>
						</ul>
				<?php endif; ?>
				</li>
		    </ul>
		</div>
	</div>
</div>
