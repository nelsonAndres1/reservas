@extends('maestra')
@section("titulo", "Inicio")
@section('contenido')
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
<script>
	function habitacion(i) {
    	//document.getElementById(i).style.visibility='visible';
		var c=["img/c1.png","img/c2.png","img/c3.png","img/c4.png"];
		var s=["img/s1.png","img/s2.png","img/s3.png","img/s4.png"];
		var cb=["img/cb1.png","img/cb2.png","img/cb3.png","img/cb4.png"];
		var a=["img/a1.png","img/a2.png","img/a3.png","img/a4.png"];
		if(i==1){/* Chalet */
			var j = parseInt(i);
			document.getElementById("img1").src=c[0];	
			document.getElementById("img2").src=c[1];	
			document.getElementById("img3").src=c[2];	
			document.getElementById("img4").src=c[3];	
			document.getElementById("parrafo").textContent="Chalet vacacional diseñado en una infraestructura de dos niveles, con tres habitaciones, permite el disfrute del paisaje y de las zonas verdes del sector, con tres balcones, con capacidad para albergar 10 personas.";
			document.getElementById("t1").textContent="Chalet";
			document.getElementById("anuncio2").innerHTML="<h2>Primer nivel</h2><br/>* Dos alcobas cada una con baño privado.<br/>* Cama doble, un camarote en cada una de las habitaciones.<br/>* Sala, comedor<br/>* Cocina y utensilios básicos<br/>* TV por cable en cada habitación.<br/>* Nevera<br/>* Patio y zona de asados.<br/>* Closet en cada habitación.<br/><br/><h2>Segundo nivel</h2><br/>* Sala de estar (auxiliar)<br/>* Alcoba principal con cama doble, baño privado,amplio balcón con vista paisajística.<br/>* Agua caliente<br/>* TV por cable.<br/>* Closet<br/>";
		}
		if(i==2){ /* Cabaña Suite */
			var j = parseInt(i);
			document.getElementById("img1").src=s[0];	
			document.getElementById("img2").src=s[1];	
			document.getElementById("img3").src=s[2];	
			document.getElementById("img4").src=s[3];
			document.getElementById("t1").textContent="Suite";
			document.getElementById("parrafo").innerHTML="11 Cabañas suite diseñadas en una Infraestructura de un nivel, permitiendo el disfrute del paisaje y de las zonas verdes del sector, con capacidad para albergar 10 personas.";	
			document.getElementById("anuncio2").innerHTML="* 3 habitaciones<br/>* Habitación principal con cama doble, baño privado y TV por cable.<br/>* Dos habitaciones con dos camarotes cada una.<br>* Sala, comedor, TV por cable.<br/>* Cocina y utensilios básicos.<br>* Nevera<br>* Un baño social.";
 		}
		if(i==3){  /* Cabaña 6 */
			var j = parseInt(i);
			document.getElementById("img1").src=cb[0];	
			document.getElementById("img2").src=cb[1];	
			document.getElementById("img3").src=cb[2];	
			document.getElementById("img4").src=cb[3];
			document.getElementById("t1").textContent="Cabaña";
			document.getElementById("t2").textContent="Vacacional";
			document.getElementById("parrafo").innerHTML="Cuatro cabañas diseñadas en una infraestructura de un nivel, con tres habitaciones, permite el disfrute del paisaje y de las zonas verdes del sector, con capacidad para albergar 10 personas.";	
 		}
		 if(i==4){
			var j = parseInt(i);
			document.getElementById("img1").src=a[0];	
			document.getElementById("img2").src=a[1];	
			document.getElementById("img3").src=a[2];	
			document.getElementById("img4").src=a[3];
			document.getElementById("t1").textContent="Apartamento";
			document.getElementById("t2").textContent="Vacacional";
			document.getElementById("parrafo").innerHTML="Doce apartamentos vacacionales de alojamiento diseñados en una infraestructura de tres niveles, con acceso a balcón que permite el disfrute del paisaje y de las zonas verdes del sector, con capacidad para albergar 5 personas .";	
 		}

		 
	}
</script>
<br>
<br>
<br>
<div id="availability-agileits">
	<div class="col-md-12 book-form-left-w3layouts">
		<a href="admin/reservation.php"><h2>RESERVA DE HABITACIÓN</h2></a>
	</div>
	@if(session("productos") !== null)
		@foreach(session("tiposaloja") as $tipos)
			<h4 class="cbp-ig-title">{{$tipos->detalle}}</h4>
		@endforeach
	@endif		
	<div class="w3ls_banner_bottom_grids">
					<ul class="cbp-ig-grid">
						<li>
							<div class='w3_grid_effect' onclick="habitacion('1')">
							<i class="fa fa-bed" aria-hidden="true"></i>
								<h4 class="cbp-ig-title">CABAÑA CHALET</h4>
							</div>
						</li>
						<li>
							<div class='w3_grid_effect' onclick="habitacion('2')">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<h4 class="cbp-ig-title">CABAÑA SUITE</h4>
							</div>
						</li>
						<li>
							<div class="w3_grid_effect" onclick="habitacion('3')">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<h4 class="cbp-ig-title">CABAÑA</h4>
							</div>
						</li>
						<li>
							<div class="w3_grid_effect" onclick="habitacion('4')">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<h4 class="cbp-ig-title">APARTAMENTO</h4>
							</div>
						</li>
						
					</ul>
	</div>
	<div class="clearfix"> </div>
		<br>
	</div>	
	<!-- rooms & rates -->
	<div class="container">
			<div class="row align-items-start">
					<div class="price-block agile">
									<div class="price-gd-top">
									<img id="img1" src="img/r1.jpg" alt=" " class="img-responsive" width="100" height="100" />
										<h4>Habitación de lujo</h4>
									</div>
									<div class="price-gd-bottom">
										<div class="price-list">
												<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												
												</ul>
											</div>
											<div class="price-selet">	
												<h3><span>$</span>320</h3>						
												<a href="admin/reservation.php" >Reservar ahora</a>
											</div>
									</div>
					</div>
					<div class="price-block agile">
									<div class="price-gd-top">
									<img id="img2" src="img/r2.jpg" alt=" " class="img-responsive" width="100" height="100"  />
										<h4>Habitación de lujo</h4>
									</div>
									<div class="price-gd-bottom">
										<div class="price-list">
												<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												
												</ul>
											</div>
											<div class="price-selet">	
												<h3><span>$</span>320</h3>						
												<a href="admin/reservation.php" >Reservar ahora</a>
											</div>
									</div>
					</div>
					<div class="price-block agile">
									<div class="price-gd-top">
									<img id="img3" src="img/r3.jpg" alt=" " class="img-responsive" width="100" height="100"  />
										<h4>Habitación de lujo</h4>
									</div>
									<div class="price-gd-bottom">
										<div class="price-list">
												<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												
												</ul>
											</div>
											<div class="price-selet">	
												<h3><span>$</span>320</h3>						
												<a href="admin/reservation.php" >Reservar ahora</a>
											</div>
									</div>
					</div>
					<div class="price-block agile">
									<div class="price-gd-top">
									<img id="img4" src="img/r4.jpg" alt=" " class="img-responsive" width="100" height="100" />
										<h4>Habitación de lujo</h4>
									</div>
									<div class="price-gd-bottom">
										<div class="price-list">
												<ul>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star" aria-hidden="true"></i></li>
														<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												
												</ul>
											</div>
											<div class="price-selet">	
												<h3><span>$</span>320</h3>						
												<a href="admin/reservation.php" >Reservar ahora</a>
											</div>
									</div>
					</div>
			</div>	
		</div>  
		<div class="container">
			<div class="col-md-12 team-Info-agileits">
								<h4 id="t1">Chalet</h4>
								<span id="t2">Cabaña</span>
								<p id="parrafo">Chalet vacacional diseñado en una infraestructura de dos niveles, con tres habitaciones, permite el disfrute
del paisaje y de las zonas verdes del sector, con tres balcones, con capacidad para albergar 10 personas.</p>
							<p id="anuncio2">Primer nivel<br>
								* Dos alcobas cada una con baño privado.
								* Cama doble, un camarote en cada una de las
								habitaciones.
								* Sala, comedor
								* Cocina y utensilios básicos
								* TV por cable en cada habitación.
								* Nevera
								* Patio y zona de asados.
								* Closet en cada habitación.
								<br>Segundo nivel<br>
								* Sala de estar (auxiliar)
								* Alcoba principal con cama doble, baño privado,
								amplio balcón con vista paisajística.
								* Agua caliente
								* TV por cable.
								* Closet
							</p>	
								<div class="resp-tabs-list">
									<img id="img1" src="img/r1.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="social-bnr-agileits footer-icons-agileinfo">
									<ul class="social-icons3">
										<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
										<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
										<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
										<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
									</ul>
								</div>							
			</div>
		</div>

		<div class="plans-section" id="rooms">
		</div>	
 </div>
 <!-- /contact -->
 <div class="copy">
		        <p>© 2023  <a href="index.php">Comfamiliar de Nariño</a> </p>
 </div>

@endsection
    <!-- //banner-bottom -->
    <!--
    <div class="col-12 text-center">
        <h1>Bienvenido, {{Auth::user()->name}}</h1>
    </div>
    @foreach([
    ["productos", "ventas", "vender", "clientes"],
    ["usuarios", "acerca_de", "soporte"]
    ] as $modulos)
        <div class="col-12 pb-2">
            <div class="row">
                @foreach($modulos as $modulo)
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{url("/img/$modulo.png")}}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                </h5>
                                <a href="{{route("$modulo.index")}}" class="btn btn-success">
                                    Ir a&nbsp;{{$modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)}}
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    -->

