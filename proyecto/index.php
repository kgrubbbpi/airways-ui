
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Airways</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="./css/styles.css" rel="stylesheet">
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
        <script type="text/javascript">
               function initialize() {
                       var input = document.getElementById('searchTextField');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
       </script>
    </head>
    <body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="./registrar.php">Registrarme</a>
					<!-- <a class="nav-link " onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Registrarme</a> -->
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./login.php">Acceder a mi cuenta</a>
				</li>
			</ul>
		</div>
    </div>
</nav>

<!--- Banner de ofertas -->
<div id="slides" class="carousel slide carousel-fade" dara-ride="carousel">
	<!-- <ol class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" class="active"></li>
		<li data-target="#slides" data-slide-to="2" class="active"></li>
	</ol> -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/airbus1final.png" height="710" width="100%">
			<div class="carousel-caption">
				<h1 class="display-2"> Paris</h1>
				<h3>Francia</h3>
				<button type="button" class="btn btn-primary btn-lg">Visitar</button>
				<button type="button" class="btn btn-primary btn-lg"> Ver más</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/airbus2.png" height="710" width="100%">
			<div class="carousel-caption">
				<h1 class="display-2"> Roma</h1>
				<h3>Italia</h3>
				<button type="button" class="btn btn-primary btn-lg">Visitar</button>
				<button type="button" class="btn btn-primary btn-lg"> Ver más</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/airbus3.png" height="710" width="100%">
			<div class="carousel-caption">
				<h1 class="display-2"> Tokio</h1>
				<h3>Japón</h3>
				<!-- <button type="button" class="btn btn-outline-light btn-lg">Visitar</button> -->
				<button type="button" class="btn btn-primary btn-lg">Visitar</button>
				<button type="button" class="btn btn-primary btn-lg"> Ver más</button>
			</div>
		</div>
	</div>
</div>

<!--- Selección de Destino -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h2>Encuentra tu próximo destino.</h2>
		</div>
		<hr>
		<div class="col-12">
			<div class="col-12">
				<form>
					<div class="form-row">
					  <div class="form-group col-md-6">
						<label for="inputEmail4">Origen</label>
						<input type="user" class="form-control" placeholder="Lugar de origen">
					  </div>
					  <div class="form-group col-md-6">
						<label for="inputPassword4">Destino</label>
						<input type="text" class="form-control" placeholder="Lugar de destino">
					  </div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Fecha de partida</label>
						  <input type="date" class="form-control" placeholder="Fecha de partido">
						</div>
						<div class="form-group col-md-6">
						  <label for="inputPassword4">Fecha de regreso</label>
						  <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha de regreso">
						</div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputEmail4">Cantidad</label>
						  <input type="number" class="form-control" placeholder="Cantidad">
						</div>
						<!-- <div class="form-group col-md-6">
						  <label for="inputPassword4">Fecha de nacimiento</label>
						  <input type="date" class="form-control" placeholder="Password">
						</div> -->
					  </div>
					<a href="viajes.php" class="btn btn-primary active" >Buscar</a>
				  </form>
			</div>
		</div>
	</div>
</div>



<!--- Footer -->
<footer>

<!--- Redes -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		</div>
	</div>
</div>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="light">
				<h5>Contacto</h5>
				<hr class="light">
				<p>555-555-5555</p>
				<p>soporte@airways.com</p>
				<p>Grove Street</p>
				<p>Los Santos</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Ayuda</h5>
				<hr class="light">
				<p>Servicio al cliente</p>
				<p>Asistencia especial</p>
				<p>Preguntas frecuentes</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Nosotros</h5>
				<hr class="light">
				<p>Historia de la compañía</p>
				<p>Nuestro personal</p>
				<p>Nuestras comunidades</p>
			</div>
			<div class="col-12">
				<hr class="light">
				<h5>&copy; airways.com</h5>
			</div>
		</div>
	</div>
</footer>
    </body>
</html>