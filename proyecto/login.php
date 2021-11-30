<?php
  session_start();
  ob_start();
  $message="";
  if(isset($_POST['submit'])) {
    
    require_once "dbacces.php";
    echo 'antes';
    die();
    $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] ."'");
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($row);
    die();
    if(is_array($row)) {
      $_SESSION["id"] = $row['id'];
      $_SESSION["name"] = $row['name'];
    } else {
      $message = "Invalid username or password";
    }
  }
  if(isset($_SESSION["id"])) {
    header("Location:cuenta.php");
  }
  // $user_name="admin";
  // $password="admin";s

  // session_start();

  // if(isset($_SESSION['user_name'])){
  //   echo "<h1> Welcome " .$_SESSION['user_name']."</h1>";
  //   echo "<a href=cuenta.php'> Cuenta</a><br>";
  //   echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
  // }
  // else{
  //   if($_POST['user_name']==$user_name && $_POST['password']==$password) {
  //     $_SESSION['user_name']=$user_name;

  //     echo "<script>location.href='cuenta.php'</script>";
  //   }
  //   else{
  //     echo "<script>alert('user or password incorrect')</script>";
  //     echo "<script>location.href='login.php'</script>";
  //   }
  // }

?>

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
					<a class="nav-link" href="./registrar.php">Registrarme</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Acceder a mi cuenta</a>
				</li>
			</ul>
		</div>
    </div>
</nav>

<!-- Inicio de sesión -->
<!-- Formulario de registro -->
<div class="container-fluid padding">
	<div class="row login text-center">
		<div class="col-12">
			<h2>Acceder a mi cuenta</h2>
		</div>
		<hr>
		<div class="col-12">
            <form method=POST>
                <div class="form-group" align="center">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="user" class="form-control" name="user_name" placeholder="Usuario" value="kyle">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="12345">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary active" name="submit" value="submit" action=>Iniciar sesión</button>
              </form>
		</div>
	</div>
</div>

    </body>
</html>