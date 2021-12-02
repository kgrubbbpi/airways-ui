<?php
try {

  $message = "";
  if (isset($_POST['submit'])) {


    $result = mysqli_query($con, "SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "'");
    $row = $result->fetch_assoc();
    if (is_array($row)) {
      if ($_POST['password'] !== $row['password']) {
        throw new Exception("Usuario o contraseña inválidos");
      }

      $_SESSION["id"] = $row['user_name'];
      $_SESSION["name"] = $row['nombre'];
    } else {
      throw new Exception("Usuario no existe");
    }
  }
  if (isset($_SESSION["id"])) {
    header("Location: ?page=cuenta.php");
  }
} catch (Exception $ex) {
  echo $ex->getMessage();
}

?>
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
              <input type="user" class="form-control" name="user_name" placeholder="Usuario">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
          </div>
          <button type="submit" class="btn btn-primary active" name="submit" value="submit" action=>Iniciar sesión</button>
        </form>
      </div>
    </div>
  </div>
