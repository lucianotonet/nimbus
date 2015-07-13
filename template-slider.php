<?php // Template Name: Slider ?>
<div id="header_slider" class="carousel slide" data-ride="carousel">
	
	<?php 
		global $section;			
		$args = array(					
			'order' 		=> 'ASC',
			'orderby' 		=> 'menu_order',
			'post_parent' 	=> $section->ID,
			'post_status' 	=> 'publish',
			'post_type' 	=> 'page',
		);

		$subpages = get_posts( $args);	
	?>	
    <div class="carousel-controls">
    	<ol class="carousel-indicators">
        	<?php
    			for ($i = 0; $i < count($subpages); $i++) { 
    				$subpage = $subpages[ $i ];
    		?>
    			<li data-target="#header_slider" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active': ''; ?>"></li>
    		<?php } ?>
    	</ol>
    </div>


	<div class="carousel-inner">
		<?php
			for ($i = 0; $i < count($subpages); $i++) { 
				$subpage = $subpages[ $i ];
		?>
			<div class="item <?php echo ($i == 0) ? 'active': ''; ?>">
				<?php echo get_the_post_thumbnail( $subpage->ID, 'full',array( 'class' => 'img-responsive' ) ); ?>				
				<div class="container">
					<div class="carousel-caption">
						<div class="caption">
							<h1><?php echo $subpage->post_title ?></br><div class="divider1" ></div></h1>
						  	<p><?php echo apply_filters('the_content', $subpage->post_content); ?></p>
						</div>
					</div>				
				</div>
			</div>
		<?php } ?>
	</div>
</div>