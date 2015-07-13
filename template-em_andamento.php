<?php // Template Name: Empreendimentos em andamento ?>
<!-- Empreendimentos em andamento -->
<section id="emandamento" class="emandamento-section">
	<div id="slider_emandamento" class="carousel slide" data-ride="carousel" data-interval="false">
		<div class="carousel-inner">
			<?php 
			global $section;			
			$args = array(					
				'order' => 'ASC',
				'orderby' => 'menu_order',
				'post_parent' => $section->ID,
				'post_status' => 'publish',
				'post_type' => 'page',
			);

			$subpages = get_posts( $args);			

			for ($i = 0; $i < count($subpages); $i++) { 
				$subpage = $subpages[ $i ];

				?>					
				<!-- slide1-andamento -->
				<div class="item <?php echo ($i == 0) ? 'active': ''; ?>" style="background: <?php echo rwmb_meta( 'nimbus_bgcolor', $args = array(), $subpage->ID ) ?>;">

					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento/alta-citta/fundo-emandamento.jpg" class="img-responsive"> -->

					<div class="container">								
						<div class="row">	
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								&nbsp;
							</div>	
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="content-left">									
									<h1><?php echo $section->post_title ?></br><hr></br>
										<a class="navbar-brand logo" href="#header" style"background:transparent;">
											<?php 
											echo get_the_post_thumbnail( $subpage->ID, 'full' );										
											?>
											<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="img-responsive"> -->
										</a>
									</h1>

									<?php echo apply_filters('the_content', $subpage->post_content); ?>								
								</div>
							</div>						

							<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">							
								<div class="photos">
									<?php echo apply_filters('the_content', rwmb_meta( 'nimbus_images', $args = array(), $subpage->ID ) ); ?>																
								</div>								
							</div>	

							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								&nbsp;
							</div>						
						</div>
					</div>
				</div>


			<?php } ?>

		</div>				


		<!-- Controls -->
		<a class="left carousel-control" href="#slider_emandamento" role="button" data-slide="prev">
			<img src="<?php echo get_template_directory_uri(); ?>/images/prev_button_white.png" alt="" class="">			
		</a>
		<a class="right carousel-control" href="#slider_emandamento" role="button" data-slide="next">
			<img src="<?php echo get_template_directory_uri(); ?>/images/next_button_white.png" alt="" class="">			
		</a>	

	</div>	
</section>
<!-- /Empreendimentos em andamento -->