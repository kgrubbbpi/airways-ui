<!--- Banner de ofertas -->
<div id="slides" class="carousel slide carousel-fade" dara-ride="carousel">
  <ol class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" class="active"></li>
		<li data-target="#slides" data-slide-to="2" class="active"></li>
	</ol>
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
          </div>
          <a href="?page=viajes.php" class="btn btn-primary active">Buscar</a>
        </form>
      </div>
    </div>
  </div>
</div>