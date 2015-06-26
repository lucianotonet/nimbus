<?php // Template Name: Empreendimentos em andamento ?>
<!-- Empreendimentos em andamento -->
<section id="emandamento" class="emandamento-section">
	<div id="slider_emandamento" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			
			<?php 
				global $post;
				
				$args = array(					
					'order' => 'ASC',
					'orderby' => 'menu_order',
					'post_parent' => $post->ID,
					'post_status' => 'publish',
					'post_type' => 'page',
				);

				$subpages = get_posts( $args);
				
				for ($i = 0; $i < count($subpages); $i++) { 
					$subpage = $subpages[ $i ];
			
					?>					
					<!-- slide1-andamento -->
					<div class="item <?php echo ($i == 0) ? 'active': ''; ?>" style="background: url(<?php echo get_template_directory_uri(); ?>/img/em-andamento/alta-citta/fundo-emandamento.jpg)">
						
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento/alta-citta/fundo-emandamento.jpg" class="img-responsive"> -->
						
						<div class="container">								
							<div class="row">		
								<div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">									
									<h1><?php echo $post->post_title ?></br><hr></br>
										<a class="navbar-brand logo" href="#header" style"background:transparent;">
											<?php 
												echo get_the_post_thumbnail( $subpage->ID, 'full' );										
											?>
											<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="img-responsive"> -->
										</a>
									</h1>
										</br>
									<h3>
										<?php echo $subpage->post_title; ?>
										<br>
										<?php echo apply_filters('the_content', $subpage->post_content); ?>
									</h3>
									</br>

								</div>

								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">									
									<?php echo apply_filters('the_content', rwmb_meta( 'nimbus_wysiwyg', $args = array(), $subpage->ID ) ); ?>																
								</div>								
							</div>
						</div>
						
					</div>			

			<?php } ?>

			<?php /*
			<!-- slide1-andamento -->
			<div class="item active">
				<img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento/alta-citta/fundo-emandamento.jpg" class="img-responsive">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<div class="carousel-caption">
						<h1>EMPREENDIMENTOS</br>EM ANDAMENTO</br><hr></br>
							<a class="navbar-brand logo" href="#header" style"background:transparent;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="img-responsive">
							</a>
						</h1></br>
						<h3>Cidade Alta</br>Bento Gonçalves</h3></br>
						<p>Lorem ipsum dolor sit amet, </br>consectetur adipiscing elit. </br>Donec at maximus mi, </br>quis blandit arcu. </br>Curabitur est lacus, aliquet </br>non lobortis ut, </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<div class="mansory">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:5px;">
							<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\alta-citta\1.jpg" class="img-responsive" />
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding: 5px; ">
							<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\alta-citta\2.jpg" class="img-responsive" style="padding-bottom: 7px;" />
							<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\alta-citta\3.jpg" class="img-responsive" />
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 5px;">
							<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\alta-citta\4.jpg" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
			<!-- slide2-andamento -->
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento/torres/fundo-andamento2.png" class="img-responsive">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<div class="carousel-caption">
						<h1>EMPREENDIMENTOS</br>EM ANDAMENTO</br><hr></br>
							<a class="navbar-brand logo" href="#header" style"background:transparent;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento\torres\logo-torre.png" alt="Logo" class="img-responsive">
							</a>
						</h1></br>
						<h3>São Bento</br>Bento Gonçalves</h3></br>
						<p>02 e 03 dormitórios, 01 suíte,</br>espera para lareira, espaço</br>gourmet, 03 a 05 vagas de </br>garagem, vidros termmo</br>
							acústicos, 02 salões de festas, </br>fitness, playground.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div class="mansory">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\torres\1.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\torres\2.jpg" class="img-responsive" style="padding-bottom: 7px;" />
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\torres\3.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\torres\4.jpg" class="img-responsive" />
							</div>
						</div>
					</div>
				</div>
				<!-- slide3-andamento -->
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento/alta-citta/fundo-emandamento.jpg" class="img-responsive">
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="carousel-caption">
							<h1>EMPREENDIMENTOS</br>EM ANDAMENTO</br><hr></br>
								<a class="navbar-brand logo" href="#header" style"background:transparent;">

									<img src="<?php echo get_template_directory_uri(); ?>/img/em-andamento\porto\logo-porto.png" alt="Logo" class="img-responsive">
								</a>
							</h1></br>
						</br>
						<h3>São Bento</br>Bento Gonçalves</h3></br>
						<p>
							02 apartamentos por andar,</br>217m² de área privativa,</br>03 suítes, closet, banheira,</br>home-office, 04 vagas de</br>garagem, a melhor vista da</br>cidade.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div class="mansory">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\porto\1.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\porto\2.jpg" class="img-responsive" style="padding-bottom: 7px;" />
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\porto\3.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 5px;">
								<img src="<?php echo get_template_directory_uri(); ?>/img\em-andamento\porto\4.jpg" class="img-responsive" />
							</div>
						</div>
					</div>
				</div>
			</div>
			*/ ?>
		</div>
	</section>
	<!-- /Empreendimentos em andamento -->