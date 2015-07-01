<?php // Template Name: Conheça a contrutora ?>
<!-- Conheça a contrutora -->
<?php global $section; ?>
<section id="conheca" class="conheca-section" style="background: <?php echo rwmb_meta( 'nimbus_bgcolor', $args = array(), $section->ID ) ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">			
				<h2 class="text-uppercase"><?php echo $section->post_title ?><br><hr></h2>			
			</div>
			<div class="col-xs-12col-sm-6 col-md-4 col-lg-4">				
				<?php echo $section->post_content ?>	
			</div>
			<div class="col-xs-12col-sm-6 col-md-1 col-lg-1">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php echo apply_filters('the_content', rwmb_meta( 'nimbus_images', $args = array(), $section->ID ) ); ?>
			</div>
		</div>
	</div>
</section>
<!-- /Conheça a contrutora -->