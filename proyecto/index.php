<?php
require_once "dbacces.php";
session_start();
ob_start();


define('HTTP_HOST', isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'CLI');
define('SERVER_PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');
define('__ROOT_DIR__', str_replace('\\', '/', dirname(dirname(__FILE__))) . '/'); // /home/user/public_html/
define('__RELATIVE_ROOT__', (!empty($_SERVER['SCRIPT_NAME'])) ? str_ireplace(rtrim(str_replace('\\', '/', realpath(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['SCRIPT_FILENAME']))), '/'), '', __ROOT_DIR__) : '/'); // /
define('__BASE_URL__', SERVER_PROTOCOL . HTTP_HOST . __RELATIVE_ROOT__); // http(s)://www.mysite.com/
?>

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
						<a class="nav-link" href="<?php echo __BASE_URL__; ?>/proyecto2">Inicio</a>
					</li>
					<?php if (!isset($_SESSION['name'])) { ?>
						<li class="nav-item">
							<a class="nav-link " href="?page=registrar.php">Registrarme</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=login.php">Acceder a mi cuenta</a>
						</li>
					<?php } else { ?>
						<li class="nav-item">
							<span class="nav-link">Hola, <?php echo $_SESSION['name']; ?>!</span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?page=logout.php">Cerrar sesión</a>
						</li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</nav>

	<?php
	if (!isset($_GET['page'])) {
		include("./views/principal.php");
	} else {
		include('./views/' . $_GET['page']);
	}
	?>

	<?php if (!isset($_GET['page']) || ($_GET['page'] !== 'login.php' && $_GET['page'] !== 'registrar.php')) { ?>
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
	<?php } ?>
</body>

</html>