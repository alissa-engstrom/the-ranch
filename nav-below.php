<div class="row">
<div class="offset-sm-2 col-sm-8">
<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation" role="navigation">
<div class="nav-previous"><?php next_posts_link( 'Older Posts', 0 ); ?></div>
<div class="nav-next"><?php previous_posts_link('Newer Posts', 0 ) ?></div>
</nav>
<?php } ?>
</div>
</div>