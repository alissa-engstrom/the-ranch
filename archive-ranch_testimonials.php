<?php get_header(); ?>
<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	Testimonials
		        	</h1>
		        	<p><?php the_field('top_testimonial_text', 'option'); ?></p>
		        </div>
		        
		    </div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		
		<div class="offset-md-1 col-md-10 ">
			<div class="card padding-50 testimonial-card">
				<p>Instead of just addressing the symptoms of substance abuse and mental health disorders, we help you dig deeper and explore what it is that propels self-protective actions that are no longer working for you. Within a nurturing and non-judgmental space, you’ll develop healthy behaviors that promote self-care, honesty, integrity and joy so that you can stand strong in recovery.</p>
				<p class="testimonial-name">Kathryn Johnson</p>
				<img src="../img/users/woman1.jpg">
			</div><!--end card-->
						
		</div>
	</div>
	
		
</section>

<?php
get_footer();