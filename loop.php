<?php 	
	$args = array(
		'order' 		   => 'ASC', 
		'orderby' 		   => 'menu_order',
		'post_type'        => 'page',		
		'post_status'      => 'publish',
		'post_parent'      => '0',		
	);
	$sections = get_posts( $args );
	
	global $section;

	foreach ($sections as $section) { 		
		$template_slug = get_page_template_slug( $section->ID );						
		get_template_part( basename($template_slug, '.php') );			
	}