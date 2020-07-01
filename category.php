<?php get_header(); ?>
<section id="resources" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>Resources</span>
			        	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

						<?php /* If this is a category archive */ if (is_category()) { ?>
							<?php single_cat_title(); ?>
			
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<?php single_tag_title(); ?>
			
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<?php the_time('F jS, Y'); ?>
			
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<?php the_time('F, Y'); ?>
			
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<?php the_time('Y'); ?>
			
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							Author Archive
			
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							Blog Archives
						
						<?php } ?>
		        	</h1>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
		
	<div class="container">
		<div class="row">
			<div class="col">
				<?php get_template_part( 'nav', 'categories' ); ?>	
			</div>
		</div>
		<div class="row">
        	<div class="offset-lg-1 col-lg-10">
	        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        		<?php get_template_part( 'entry', 'blogcontent' ); ?>
	        	<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>	        	
        	</div>
    	</div>
	</div><!--end container-->
</section>
<?php get_footer(); ?>
