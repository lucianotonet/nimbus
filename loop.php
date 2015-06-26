<?php 
	$args = array(
		'order'            => 'ASC',
		'include'          => '',		
		'post_type'        => 'page',		
		'post_status'      => 'publish',		
	);
	$posts_array = get_posts( $args );
	
	foreach ($posts_array as $post) { 
		$template_slug = get_page_template_slug( $post->ID );
		get_template_part( basename($template_slug, '.php') );		
	}