<?php // Template Name: Obras concluídas ?>
<?php global $section; ?>
	<!-- Obras concluídas -->
	<section id="obrasconcluidas" class="obras-section" style="background: <?php echo rwmb_meta( 'nimbus_bgcolor', $args = array(), $section->ID ) ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h2><?php echo $section->post_title ?><hr></h2>
					<br>
					<p><?php echo $section->post_content ?></p>
				</div>
				<!-- carousel -->
				<div class="hidden-xs hidden-sm col-md-8 col-lg-8">
					
					<?php $images = rwmb_meta( 'nimbus_imgadv', 'type=image_advanced&multiple=image_advanced', $section->ID ); ?>					
					<!-- <pre><?php print_r($images) ?></pre> -->
					
					<div id="obras_slider" class="slider">
						<div class="slides">
							<?php foreach ($images as $img) { ?>
								<div class="slideItem">

									
										<img src="<?php echo $img['full_url'] ?>" alt="<?php echo $img['alt'] ?>">
									
									<div class="legend">
										<h4><?php echo $img['title'] ?></h4>										
										<p><?php echo $img['caption'] ?></p>
									</div>

								</div>
							<?php } ?>							
						</div>
					</div>
				</div>

				<!-- carousel -->
				<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
					
					<?php $images = rwmb_meta( 'nimbus_imgadv', 'type=image_advanced&multiple=image_advanced', $section->ID ); ?>					
					<!-- <pre><?php print_r($images) ?></pre> -->
					
					<div id="obras_slider2" class="slider">
						<div class="slides">
							<?php foreach ($images as $img) { ?>
								<div class="slideItem">

									<a href="<?php echo $img['full_url'] ?>">
										<img src="<?php echo $img['full_url'] ?>" alt="<?php echo $img['alt'] ?>">
									</a>
									<div class="legend">
										<h4><?php echo $img['title'] ?></h4>										
										<p><?php echo $img['caption'] ?></p>
									</div>

								</div>
							<?php } ?>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Obras concluídas -->			