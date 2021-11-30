<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sky High</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="./css/styles.css" rel="stylesheet">
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
					<a class="nav-link" href="./index.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Registrarme</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./login.php">Acceder a mi cuenta</a>
				</li>
			</ul>
		</div>
    </div>
</nav>

<!-- Formulario de registro -->
<div class="container-fluid padding">
	<div class="row sign text-center">
		<div class="col-12">
			<h2>Registrarse</h2>
		</div>
		<hr>
		<div class="col-12">
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="user" class="form-control" id="inputuser" placeholder="Usuario">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre</label>
                      <input type="name" class="form-control" id="inputuser" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellidos</label>
                      <input type="name" class="form-control" id="inputPassword4" placeholder="Apellidos">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">E-Mail</label>
                      <input type="mail" class="form-control" id="inputuser" placeholder="E-Mail">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Fecha de nacimiento</label>
                      <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Teléfono de trabajo</label>
                      <input type="tel" class="form-control" id="inputuser" placeholder="Teléfono">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Celular</label>
                      <input type="tel" class="form-control" id="inputPassword4" placeholder="Celular">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputAddress">Dirección</label>
                  <div class="form-group"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=San%20Jos%C3%A9,%20Costa%20Rica&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br>
                    <style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;}</style></div></div>
                </div>
                <br>
                <!-- <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div> -->
                <button type="submit" class="btn btn-primary active" href="./cuenta.php">Registrarme</button>
              </form>
		</div>
	</div>
</div>
    </body>
</html>