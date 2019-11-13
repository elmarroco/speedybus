<?php
require_once("View/includes/head.php");
?>

<body>
  <?php
  require_once("View/includes/navbar.php");
  ?>

  <div class="hero-image">
    <div class="hero-text">
      <h1>Busca tu viaje!!!</h1>
      <form class="p-5">
        <div class="form-group row">
          <div class="col-6">
            <label for="origenInput"><i class="fas fa-bus"></i> Origen</label>
            <input type="text" class="form-control" id="origenInput" aria-describedby="emailHelp" placeholder="Ingresa el origen">
          </div>
          <div class="col-6">
            <label for="destinoInput"><i class="fas fa-bus"></i> Destino</label>
            <input type="text" class="form-control" id="destinoInput" aria-describedby="emailHelp" placeholder="Ingresa el destino">
          </div>
        </div>
        <div class="form-group">
          <label for="fechaInput"><i class="fas fa-calendar-alt"></i> Fecha de viaje:</label>
          <input type="date" class="form-control" id="fechaInput">
        </div>
        <button type="submit" class="btn btn-block btn-success">Buscar</button>
      </form>
      <div id="suggestions"></div>
      <div id="suggestions2"></div>
    </div>
  </div>

  <div class="noticias-terminal bg-custom-2">
    <h3 class="text-center text-white pt-5 mb-5">Últimas Noticias</h3>
    <div class="row text-center d-flex justify-content-center">
      <div class="col-lg-3 col-sm-10 mt-2 mr-4">
        <h4 class="text-white">Titulo Noticia</h4>
        <img src="https://picsum.photos/200/200" alt="Imagen noticia"> <br>
        <small class="text-white text-right">01/02/2019</small>
        <p class="text-justify text-white ml-2 mr-2">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam fugit asperiores earum obcaecati neque molestiae omnis suscipit veritatis tempora nesciunt nostrum error voluptas, consequuntur explicabo dolor maxime officia cumque illum!
        </p>
      </div>
      <div class="col-lg-3 col-sm-10 mt-2 mr-4">
        <h4 class="text-white">Titulo Noticia</h4>
        <img src="https://picsum.photos/200/200" alt="Imagen noticia"> <br>
        <small class="text-white text-right">01/02/2019</small>
        <p class="text-justify text-white ml-2 mr-2">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam fugit asperiores earum obcaecati neque molestiae omnis suscipit veritatis tempora nesciunt nostrum error voluptas, consequuntur explicabo dolor maxime officia cumque illum!
        </p>
      </div>
      <div class="col-lg-3 col-sm-10 mt-2">
        <h4 class="text-white">Titulo Noticia</h4>
        <img src="https://picsum.photos/200/200" alt="Imagen noticia"> <br>
        <small class="text-white text-right">01/02/2019</small>
        <p class="text-justify text-white ml-2 mr-2">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam fugit asperiores earum obcaecati neque molestiae omnis suscipit veritatis tempora nesciunt nostrum error voluptas, consequuntur explicabo dolor maxime officia cumque illum!
        </p>
      </div>
    </div>
  </div>
  <?php
  require_once("View/includes/footer.php");
  ?>

  <?php
  require_once("View/includes/scripts.php");
  ?>
</body>