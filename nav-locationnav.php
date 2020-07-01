<nav id="location-nav" class="push">
	<?php if( get_field('pick_a_location_nav') == 'tnnav' ): ?>
		<?php
		wp_nav_menu( array(
			'menu'  => 'TN Nav', // Do not fall back to first non-empty menu.
		) );
	?>
	<?php endif; ?>
	<?php if( get_field('pick_a_location_nav') == 'panav' ): ?>
		<?php
		wp_nav_menu( array(
			'menu'  => 'PA Nav', // Do not fall back to first non-empty menu.
		) );
	?>
	<?php endif; ?>
</nav>
