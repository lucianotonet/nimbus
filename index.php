<?php get_header(); ?>

<!-- Header -->
<section id="header" class="intro-section">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- logo-->
			<div class="navbar-header">
				<a class="navbar-brand logo page-scroll" href="#header">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="img-responsive">
				</a>
			</div>
			<!-- fim logo-->
			<!-- menu -->
			<div class="col-md-9 col-lg-9">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a class="page-scroll" href="#header"></a>
						</li>
						<li>
							<a class="page-scroll" href="#conheca">CONHEÇA A </br>CONSTRUTORA</a>
						</li>
						<li>
							<a class="page-scroll" href="#emandamento">EMPREENDIMENTOS</br>EM ANDAMENTO</a>
						</li>
						<li>
							<a class="page-scroll" href="#obrasconcluidas">OBRAS </br>CONCLUÍDAS</a>
						</li>
						<li>
							<a class="page-scroll" href="#contato">FALE </br>CONOSCO</a>
						</li>
						<li class="separator">
							<a>|</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="img-responsive">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- fim menu-->
		</div>
		<!-- /.container-->
	</nav>
</section>
<!-- /Header -->
<!-- slide-->
<div id="header_slider" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#header_slider" data-slide-to="0" class=""></li>
		<li data-target="#header_slider" data-slide-to="1" class=""></li>
		<li data-target="#header_slider" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<!-- slide1-->
		<div class="item active">
			<img src="<?php echo get_template_directory_uri(); ?>/img/slides/slide1.png" class="img-responsive">
			<div class="container">
				<div class="carousel-caption">
					<h1>PORTO</br>MAIORI</br><hr></br></h1>
					<p>sofisticação e</br>conforto para</br>uma vida TOP.</p>
				</div>
			</div>
		</div>
		<!-- slide2-->
		<div class="item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/slides/slide2.jpg" class="img-responsive">
			<div class="container">
				<div class="carousel-caption">
					<h1>TORRES</br>SEVILHA</br><hr></br></h1>
					<p>monumental e </br>impressionante pela </br>infraestrutura e</br> e valorização do viver</br>com satisfação.</p>
				</div>
			</div>
		</div>
		<!-- slide3-->
		<div class="item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/slides/slide3.jpg" class="img-responsive">
			<div class="container">
				<div class="carousel-caption">
					<h1>ALTA</br>CITTÁ</br><hr></br></h1>
					<p>alto padrão e</br>conforto para</br>seu dia a dia.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_template_part('loop'); ?>

<!-- Mapa -->
<section id="mapa">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-9 col-sm-3 col-xs-12">
				<a href="#" class="btn btn-primary btn-block">MAPA AMPLIADO</a>
			</div>
		</div>
	</div>
</section>
<!-- /Mapa -->
<!-- rodapé -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-xs-12">
				<p>Nimbus Empreendimentos Imobiliários . ©<?php echo date('Y'); ?>. Todos os Direitos Reservados </p>
			</div>
			<div class="col-md-2 col-xs-12 text-right">
				<p><a href="http://www.s72.com.br">S72</a></p>
			</div>
		</div>
	</div>
</footer>

<?php get_footer(); ?>			