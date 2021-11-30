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
					<a class="nav-link" href="index.php">Inicio</a>
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

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Pago de tiquetes.</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead"> En esta sección se imprimen los viajes basados en la busqueda del usuario y se puede proceder a comprar una vez seleccionado el viaje.
            </p>
		</div>
        <div class="col-12">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
            <input type="hidden" name="cmd" value="_s-xclick" >
            <input type="hidden" name="hosted_button_id" value="DFMMQMKLPFRS2">
            <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
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