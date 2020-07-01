<?php
/**
* Template Name: Philosophy
*/
get_header(); ?>

<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	Philosophy
		        	</h1>
		        	<p><?php the_content();?></p>
		        </div>
		        
		    </div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		<div class="row">
			
		    <div class="offset-md-1 col-md-10 image-card special-section padding-bottom-60">
			    <div class="feather"></div>
				<div class="divider"></div>
				<h2>What We Believe</h2>
		    </div>
		</div>
		<div class="offset-md-1 col-md-10 ">
			<?php if( have_rows('philosophy_repeat') ): while( have_rows('philosophy_repeat') ): the_row(); 

					$icon = get_sub_field('philosophy_icon');
					$title = get_sub_field('philosophy_title');
					$copy = get_sub_field('philosophy_copy');

			?>
			
			<div class="card padding-80 icon-top-card">
				<div class="icon <?php echo $icon;?>"></div>
				<h3><?php echo $title; ?></h3>
				<?php echo $copy; ?>
			</div><!--end card-->
			
			

		
	<?php endwhile; ?>



<?php endif; ?>
			
			
			
			
			
			
					</div>
	</div>
</section>
		


<?php
get_footer();