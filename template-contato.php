<?php // Template Name: Contato ?>

<?php global $section; ?>

	<!-- Contato -->
	<section id="contato" style="background-color: #566981;" class="contato-section">
		<div class="container">
			<div class="col-md-3">
				<h2 class="text-uppercase"><?php echo $section->post_title ?><br><hr></h2>
				<p><?php echo $section->post_content ?></p>
			</div>
			<!-- form -->
			<div class="col-md-9">
				<div class="form-area">
					<?php echo apply_filters('the_content', rwmb_meta( 'nimbus_images', $args = array(), $section->ID ) ); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /Contato -->