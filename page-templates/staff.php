<?php
/**
* Template Name: Staff
*/
get_header(); ?>

<section id="about-us" class="subpage">
	<div class="reg-page page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8">
		        	<h1>
			        	<span>About Us</span>
			        	Staff
		        	</h1>
		        	<p><?php the_content();?></p>
		        </div>
		        <div class="offset-lg-1 col-lg-10 select-container"  >
			        <h4>Choose A Location</h4>
			        <ul class="faqs" data-name="location" data-type="radio" style="display: none">
						
						<li class="faq-option" data-value="ms"><span class="desktop">Pennsylvania</span><span class="mobile">PA</span></li>
						<li class="faq-option" data-value="ms"><span class="desktop">Tennessee</span><span class="mobile">TN</span></li>
		        	</ul>
		        	<?php echo do_shortcode('[dvteamfilter max="99" gridstyle="square" offset="20" itemwidth="250" side="center" exclude="" rounded="dvteamgrid-default"]');?>
		        </div>
		        
		    </div>
		</div>
	</div><!--end page header-->
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				
				
				
				<div class="col-xs-12 tab-content" style="display: none">
				 <div class="cd-faq-items tabs_item">
					<h2>Leadership</h2>
					 <?php echo do_shortcode( '[dvteam max="99" categoryid="5438" gridstyle="rectangle" offset="20" itemwidth="250" side="center" rounded="dvteamgrid-default"]' );?>
					 <h2>Clinical &amp; Medical</h2>
					 <?php echo do_shortcode( '[dvteam max="99" categoryid="5439" gridstyle="rectangle" offset="20" itemwidth="250" side="center" rounded="dvteamgrid-default"]' );?>

					 
				 </div><!--end Tab Item-->
				 <div class="cd-faq-items tabs_item">
					 
					 <h2>Leadership</h2>
				 	<?php echo do_shortcode( '[dvteam max="99" categoryid="5436" gridstyle="rectangle" offset="20" itemwidth="250" side="center" rounded="dvteamgrid-default"]' );?>
				 	<h2>Clinical &amp; Medical</h2>
					<?php echo do_shortcode( '[dvteam max="99" categoryid="5437" gridstyle="rectangle" offset="20" itemwidth="250" side="center" rounded="dvteamgrid-default"]' );?> 
					 
					 
				 </div><!--end Tab Item-->
				 
			 </div>
				
			</div>
		</div>
	</div>
</section>
<?php
get_footer();