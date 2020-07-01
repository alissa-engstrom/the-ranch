<?php


get_header(); ?>
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Resources</span>
			        	Resource Center
		        	</h1>
		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
<div class="container">
		<div class="row">
			
			<div class="col-lg-3">
				
				<ul class="resource-categories">
					<li class="list-group-item"><h2>Categories</h2><a href="#" class="view-categories">View Categories</a>
					<ul class="list-group-sub">
						
								
								
								<?php
									$terms = get_terms('resource-categories');
									if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
										echo '<ul>';
										foreach ($terms as $term) {
											echo '<li><a href="'.get_term_link($term->slug, 'resource-categories').'">'.$term->name.'</a></li>';
    									}
										echo '</ul>';
									}	
								?>				
						
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-lg-9">
				<div class="flex-container">
					<?php
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

					$query = new WP_Query(
    				array(
			              'post_type' => 'resources',
			              'orderby' => 'date',
			              'order' => 'DESC',
						  'posts_per_page'=> 1,
						  'paged' => $paged,
    				) );


    			if( $query->have_posts() ):
    			while ($query->have_posts()) : $query->the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="resource-card lrg">
						 <?php if ( has_post_thumbnail() ) {  the_post_thumbnail('archive'); }?>
							<div class="text">
								<h3><?php the_title(); ?></h3>
							</div>
					</a>
					 <?php endwhile;
              else: ?>
            <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
        <?php endif;
              wp_reset_postdata(); ?>
				</div> 
			</div> 
			
		</div><!--end row-->
		
		
		<?php 
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
            foreach ( $terms as $term ): 
        ?>
        
        <?php 
	        $term_link = get_term_link( $term );
	        if ( is_wp_error( $term_link ) ) {
				continue;
    		}
        ?>
        <div class="row small-spacing">
        	<div class="col-xs-12">
        
				<h2><?php echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';?></h2>
				
				<div class="flex-container">
        
		        <?php
		            // prints out the first 4 posts within each
		            // taxonomy (another loop lists out the rest
		            // of the posts) later
		
		        	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 0;
		
		        	$query = new WP_Query(
		        		array(
		                	'tax_query' => array(
		                      	array(
		                          	'taxonomy' => 'resource-categories',
								  	'field' => 'slug',
								  	'terms' => $term->name,
								  	)
								),
		        				'posts_per_page'=> 3,
		        				'paged' => $paged,
		        			) 
		        		);
		
		
		        		if( $query->have_posts() ):
		        		while ($query->have_posts()) : $query->the_post(); ?>
		        		
		        			<a href="<?php the_permalink(); ?>" class="resource-card">
			        			<?php if ( has_post_thumbnail() ) {  the_post_thumbnail('thumbnail'); }?>
			        			<div class="text">
			        				<h3><?php the_title(); ?></h3>
			        			</div>
			        		</a>
		        		<?php 
			        	endwhile;
		                endif;
		                wp_reset_postdata(); 
		                ?>
                
                
                
                
                </div>
	        	
        	</div>
    	</div>
                
                
       

      <?php endforeach; endif; ?>

		
		

    	
    	<!--
    	<div class="row small-spacing">
        	<div class="col-xs-12">
	        	<h2>Recent Resources</h2>
	        	<div class="flex-container">
		        	<a href="#" class="resource-card">
						<img src="../img/resources/resource-sm.jpg">
						<div class="text">
							<h3>Understanding Insurance for Rehab: A Quick Guide</h3>
						</div>
					</a>
					<a href="#" class="resource-card">
						<img src="../img/resources/resource-sm.jpg">
						<div class="text">
							<h3>Understanding Insurance for Rehab: A Quick Guide</h3>
						</div>
					</a>
					<a href="#" class="resource-card">
						<img src="../img/resources/resource-sm.jpg">
						<div class="text">
							<h3>Understanding Insurance for Rehab: A Quick Guide</h3>
						</div>
					</a>
	        	</div>
	        	
        	</div>
    	</div>-->





	
</section>


<?php
get_footer();
