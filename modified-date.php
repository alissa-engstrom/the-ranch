<?php
	$u_time = get_the_time('U'); 
	$u_modified_time = get_the_modified_time('U'); 
	if ($u_modified_time >= $u_time + 86400) { 
		echo "Last modified on "; 
		the_modified_time('F jS, Y'); 
 	}
?>