<?php
/**
* Template Name: FAQ
*/
get_header(); ?>

<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	FAQs
		        	</h1>
		        	
		        </div>
		        
		        <div class="offset-lg-1 col-lg-10 select-container">
			        <h4>Choose A Location</h4>
			        <ul class="faqs" data-name="location" data-type="radio">
						
						<li class="faq-option" data-value="ms"><span class="desktop">Pennsylvania</span><span class="mobile">PA</span></li>
						<li class="faq-option" data-value="ms"><span class="desktop">Tennessee</span><span class="mobile">TN</span></li>
		        	</ul>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
	
	
	<div class="container">
		<div class="row">
			 <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 tab-content">
				 <div class="cd-faq-items tabs_item">
					 <ul id="basics" class="cd-faq-group">
						 
						 <?php if( have_rows('faq_pennsylvania_item') ): while ( have_rows('faq_pennsylvania_item') ) : the_row();?>
						 <li>
								<a class="cd-faq-trigger" href="#"><?php the_sub_field('faq_pennsylvania_question');?></a>
								<div class="cd-faq-content">
									<?php the_sub_field('faq_pennsylvania_answer');?>
								</div> <!-- cd-faq-content -->
						</li>
						<?php endwhile; else : endif;?>
							
					 </ul>
				 </div><!--end Tab Item-->
				 <div class="cd-faq-items tabs_item">
					 <ul id="basics" class="cd-faq-group">
						 <?php if( have_rows('faq_tennessee_item') ): while ( have_rows('faq_tennessee_item') ) : the_row();?>
						 <li>
								<a class="cd-faq-trigger" href="#""><?php the_sub_field('faq_tennessee_question');?></a>
								<div class="cd-faq-content">
									<?php the_sub_field('faq_tennessee_answer');?>
								</div> <!-- cd-faq-content -->
						</li>
						<?php endwhile; else : endif;?>
							
					 </ul>
				 </div><!--end Tab Item-->
				 
			 </div>
		</div>
	</div>
	
</section>


<?php
get_footer();
 