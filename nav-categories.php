<ul class="resource-categories blog">
	<li class="list-group-item"><h2>Categories</h2><a href="#" class="view-categories">View Categories</a>
		<ul class="list-group-sub">
			<?php wp_list_categories( array(
					'orderby' 	=> 'name',
					'title_li'	=> ''
					) ); 
			?>
		</ul>
	</li>
</ul>
