<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>IRIS</title>
  <script type="text/javascript" src='js/jquery-1.8.3.min.js'></script>
  <script type="text/javascript" src='js/jquery.elevateZoom-3.0.8.min.js'></script>
</head>

<body>

  <div>
    <?php include("navbar.php"); ?>
  </div>

  <div class="padding border border-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">

        <img id="zoom_01" src='img/pequenoIRIS.jpg' width="80%" height="80%" data-zoom-image="img/grandeIRIS.png"/>

        </div>
        <div class="col-sm-6 text-center">
          <h2>Irrigação Residencial Inteligente Sistemática</h2>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis at asperiores beatae doloribus, dolor
            illum sunt nisi consequuntur voluptate velit quia est necessitatibus, maxime perferendis corporis. Beatae,
            culpa earum?
          </p>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis at asperiores beatae doloribus, dolor
            illum sunt nisi consequuntur voluptate velit quia est necessitatibus, maxime perferendis corporis. Beatae,
            culpa earum?
          </p>
          <p>
            Projetos parecidos:
            <a target="blank" href="http://www.nxeco.com">Nxeco</a>
            <a target="blank" href="http://swamp-project.org">SWAMP</a>
          </p>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="card text-center bg-dark rounded-0">
      <div class="row-full bg-black p-2">
        <div class="card-header p-2">
          <h5 class="text-white">IRIS <i class="fas fa-bullseye text-success"></i></h5>
        </div>

        <div class="card-body p-3">
          <div class="row-full p-2">
            <h5 class="text-white btn btn-outline-success my-2 my-sm-0">Entre em Contato</h5>
          </div>
          <p class="card-text text-white">&copy;PROJETO IRIS&trade; 2018, Av. 1º de Maio, Jaguaribe, João Pessoa </p>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $('#zoom_01').elevateZoom({
      zoomType: "window",
      tint: true,
      tintColour: "black",
      borderColour: "#606060",
      cursor: "crosshair"
    }); 
  </script>
</body>

</html>