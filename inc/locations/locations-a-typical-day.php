<?php get_template_part( 'nav', 'locationnav' ); ?>	
<section id="locations-home" class="subpage">
	<div class="page-header">
		<div class="container">
	    	<div class="row">
	        	<div class="offset-lg-2 col-lg-8 page-header">
		        	<h1>
			        	<span><?php echo get_the_title( $post->post_parent );?></span>
			        	Typical Day
			        </h1>
		        </div>
	    	</div>
		</div>
	</div><!--end page header-->
	
	<div class="typical-day-container" id="morning">
		<div class="container">
			<div class="row">
			    <div class="offset-md-2 col-md-8 image-card special-section">
				    <div class="morning-icon"></div>
					<div class="divider"></div>
					<h2>Mornings</h2>
					<?php the_field('morning_copy')?>
					<?php if( have_rows('morning_schedule') ): ?>
					<table>
						<?php while( have_rows('morning_schedule') ): the_row(); 
							$morning_time = get_sub_field('morning_time_range');
							$morning_content = get_sub_field('morning_time_label');
					?>
						<tr>
							<td><?php echo $morning_time; ?></td>
							<td><?php echo $morning_content; ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
					<?php endif; ?>
			    </div>
			</div>
		</div>
		
	</div><!--end typical day container-->
	
	<div class="typical-day-container" id="afternoon">
		<div class="container">
			<div class="row">
			    <div class="offset-md-2 col-md-8 image-card special-section">
				    <div class="afternoon-icon"></div>
					<div class="divider"></div>
					<h2>Afternoons</h2>
					<?php the_field('afternoon_copy')?>
					<?php if( have_rows('afternoon_schedule') ): ?>
					<table>
						<?php while( have_rows('afternoon_schedule') ): the_row(); 
							$afternoon_time = get_sub_field('afternoon_time_range');
							$afternoon_content = get_sub_field('afternoon_time_label');
					?>
						<tr>
							<td><?php echo $afternoon_time; ?></td>
							<td><?php echo $afternoon_content; ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
					<?php endif; ?>
			    </div>
			</div>
		</div>
		
	</div><!--end typical day container-->
	<div class="typical-day-container" id="evening">
		<div class="container">
			<div class="row">
			    <div class="offset-md-2 col-md-8 image-card special-section">
				    <div class="evening-icon"></div>
					<div class="divider"></div>
					<h2>Evenings</h2>
					<?php the_field('evening_copy')?>
					<?php if( have_rows('evening_schedule') ): ?>
					<table>
						<?php while( have_rows('evening_schedule') ): the_row(); 
							$evening_time = get_sub_field('evening_time_range');
							$evening_content = get_sub_field('evening_time_label');
					?>
						<tr>
							<td><?php echo $evening_time; ?></td>
							<td><?php echo $evening_content; ?></td>
						</tr>
						<?php endwhile; ?>
					</table>
					<?php endif; ?>
			    </div>
			</div>
		</div>
		
	</div><!--end typical day container-->
	
	
</section>

