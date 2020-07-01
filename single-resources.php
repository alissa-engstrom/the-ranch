<?php get_header(); ?>
<?php $content_arr = get_extended ( $post->post_content ); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span></span>
			        	<?php the_title();?>
			        	
		        	</h1>
		        	<div class="meta">
			        	<p>Posted in
				        	<?php
					        	$terms = get_the_terms( $post->ID , 'resource-categories' );
								foreach ( $terms as $term ) {
									$term_link = get_term_link( $term, 'resource-categories' );
									echo '<a href="' . $term_link . '">' . $term->name . '</a>';
							}
						?>
						 on <?php echo get_the_date('F j, Y'); ?><br>
			        	 <?php get_template_part( 'modified-date', get_post_format() );?>	
			        	</p>
			        	</p>
		        	</div>

		        	<?php
			        	if( strpos( $post->post_content, '<!--more-->' ) ) { 
			        	$parts = get_extended( $post->post_content );
						echo wpautop( do_shortcode( $parts['main'] ) ); 
						}else{}
					?>
					
	

		        	
		        </div>
		        
		        
	    	</div>
		</div>
	</div><!--end page header-->
	
		
	<div class="container" id="blog-content">
		<div class="row">
        	<div class="col" id="featured-image">
	        	 <?php if ( has_post_thumbnail() ) {  the_post_thumbnail('archive'); }?>
        	</div>
    	</div>
	        	<ul class="social-sharing">
		        	<li>
		        	<a class="fa-stack fa-2x" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>&quote=<?php the_title();?>" title="Share on Facebook" target="_blank">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>		        	
					</li>
		        	<li>
		        	<a class="fa-stack fa-2x" href="https://twitter.com/intent/tweet?source=<?php echo get_permalink();?>&text=<?php the_title();?>%20<?php echo get_permalink();?>" target="_blank" title="Tweet">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>		        	
					</li>
					<li>
		        	<a class="fa-stack fa-2x" href="mailto:?subject=<?php the_title();?>&body=description:%20<?php echo get_permalink();?>" target="_blank" title="Send email">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fas fa-envelope fa-stack-1x"></i>
					</a>		        	
					</li>
	        	</ul>
    	<div class="row" id="main-content" >
        	
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
						        
		        <div id="unstick-here"></div>
		        
		        <div id="mobile-share">
			        Share: <a class="fa-stack fa-2x" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>&quote=<?php the_title();?>" title="Share on Facebook" target="_blank">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>		        	
					
		        	
		        	<a class="fa-stack fa-2x" href="https://twitter.com/intent/tweet?source=<?php echo get_permalink();?>&text=<?php the_title();?>%20<?php echo get_permalink();?>" target="_blank" title="Tweet">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>		        	
					
				
		        	<a class="fa-stack fa-2x"  href="mailto:?subject=<?php the_title();?>&body=description:%20<?php echo get_permalink();?>" target="_blank" title="Send email">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fas fa-envelope fa-stack-1x"></i>
					</a>	
		        </div>
				<?php get_template_part( 'content-author', get_post_format() );?>
		    	<div class="blog-cta">
			    	<?php the_field('blog_cta_text', 'option'); ?>
			    	
			    	<div class="btn cta-button lrg-btn"><?php echo do_shortcode('[phone]');?></div>
		    	</div>
		        
        	</div>
        	<div class="group"></div>
    	</div>
    	
    	
    	
    	    	
    	
    	
    	
	</div>
	
	<div class="container" style="display: none">
		<div class="row" id="related-articles-container">
        	<div class="col">
	        	<h2>Related Articles</h2>
		        <?php rp4wp_children();?>	        	
        	</div>
    	</div>
	</div>
	
	
	
	
</section>
    	
    	
    	
    	    	
    	
    	
    	
	</div>



<?php endwhile; endif; ?>

</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>