<!-- Pushy Menu -->
	<nav class="pushy pushy-right">
		<a href="#close" class="menu-btn"><i class="fas fa-times"></i> CLOSE MENU</a>
		<a href="<?php bloginfo( 'url' ); ?>" class="mobile-logo-link" style="display: none">
			<svg id="mobile-logo" class="icon icon-colors-mobile">
	 			<use xlink:href="#logo-svg"></use>
    		</svg>
		</a>
		<?php 
			wp_nav_menu( array(
				'theme_location' => 'primary-nav',
				'menu' => 'Primary',
				'menu_id' => 'primary-menu-mobile',
				'container' => false,
	 		));
		?>
	</nav>