<?php
/**
* Template Name: Why Choose Us
*/
get_header(); ?>

<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	Why Choose Us
		        	</h1>
		        	<p><?php the_content();?></p>
		        </div>
		        
		    </div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 ">
				<?php if( have_rows('why_choose_repeat') ): while( have_rows('why_choose_repeat') ): the_row(); 
	
						$image = get_sub_field('why_choose_image');
						$title = get_sub_field('why_choose_header');
						$copy = get_sub_field('why_choose_copy');
						
						$headeralign = get_sub_field('why_choose_header_align');
						//$headervalue = $headeralign['value'];
						$textalign = get_sub_field('why_choose_text_align');
						//$textvalue = $textalign['value'];

	
				?>
				
				<div class="why-choose-card">
					<?php if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					<div class="<?php echo $headeralign; ?>">
						<h2><?php echo $title; ?></h2>
					</div>
					<div class="<?php echo $textalign; ?>">
						<?php echo $copy; ?>
					</div>
				
				</div><!--end card-->
				
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();