<?php get_header(); ?>

<!-- Header -->
<section id="header" class="intro-section">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			
			<div class="navbar-header">
				<!-- menu responsivo-->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- logo-->
				<a class="navbar-brand logo page-scroll" href="#header">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="img-responsive">
				</a>
			</div>
			<!-- fim logo-->

			<!-- menu -->			
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
					<li class="separator hidden-xs">
						<a>|</a>
					</li>
					<li class="hidden-xs">
						<a href="https://www.facebook.com/pages/Construtora-Nimbus/744735355538392" target="_new">
							<div class="face"><i class="icon-facebook icon-2x"></i></div>
						</a>
					</li>
				</ul>
			</div>
			
			<!-- fim menu-->
		</div>
		<!-- /.container-->
	</nav>
</section>
<!-- /Header -->

<?php get_template_part('loop'); ?>


<!-- Mapa -->
<section id="mapa"></section>
<section class="mapa-bottom">
	<div class="container">
		<a href="https://www.google.com.br/maps/place/R.+Bar%C3%A3o+do+Rio+Branco,+71+-+Centro,+Bento+Gon%C3%A7alves+-+RS,+95700-000/@-29.1645527,-51.5188588,17z/data=!3m1!4b1!4m2!3m1!1s0x951c3cac406bb13f:0xa3c07f71f6e94145" target="_new" class="pull-right btn btn-primary btn-lg">MAPA AMPLIADO</a>		
	</div>
</section>
<!-- /Mapa -->

<!-- rodapé -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-xs-12">
				<p>Nimbus Empreendimentos Imobiliários . &copy;<?php echo date('Y'); ?>. Todos os Direitos Reservados </p>
			</div>
			<div class="col-md-2 col-xs-12 text-right">
				<p><a href="http://www.s72.com.br">S72</a></p>
			</div>
		</div>
	</div>
</footer>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
	var geocoder;
	var map;

	function initialize_map() {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(-34.397, 150.644);
		var mapOptions = {
			zoom: 17,
			center: latlng,
			disableDefaultUI: true,
			scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false,
		    draggable: true,
		}
		map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
		codeAddress();
	}

	function codeAddress() {
		var address     = 'Rua Barão do Rio Branco, 71 Centro. Bento Gonçalves - RS';
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var templateUrl = '<?php echo bloginfo("template_directory"); ?>';
				var image       = templateUrl+'/images/map-marker.png';
				var marker 		= new google.maps.Marker({
					map: map,
					icon: image,
					position: results[0].geometry.location
				});
			} else {
				alert('Geocode was not successful for the following reason: ' + status);
			}
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize_map);
</script>

<?php get_footer(); ?>			