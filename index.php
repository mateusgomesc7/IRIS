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
</head>

<body>
  <!--                    Menu principal                      -->
  
  <div>
    <?php include("navbar.php"); ?>
  </div>

  <!--                    Carosel Slide                      -->
  <div id="carouselSlide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5> IRIS</h5>
          <p>Isso que é iris, tamo junto</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/slide2.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5> IRISneu</h5>
          <p>Nome do grupo do whats</p>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block img-fluid" src="img/slide3.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h5> Projeto IRIS</h5>
          <p>Grupo do whats com o professor</p>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselSlide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSlide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--                    Textos e imagens descritivas                      -->
  <div class="padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h4>Como nasceu o IRIS?</h4>
          <p>
            Nasceu do desejos da equipe de criar um produto que, aplicando os conhecimentos adquiridos nas disciplinas
            do curso, ajudaria as pessoas a cuidarem das suas plantas, bem como economizaria água, um dos bens mais
            preciosos da natureza.
          </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <!-- Modificar o tamanho da imagem no PHotoshop depois -->
          <img src=".\img\folha1.jpg" alt="Gomes" class="img-responsive" width="200" height="200">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h4>IRIS é IRIS</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate distinctio voluptatem obcaecati deserunt
            similique accusamus enim temporibus ab tenetur minima hic aliquid debitis maxime praesentium quos odio,
            beatae placeat quae.
          </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <!-- Modificar o tamanho da imagem no PHotoshop depois -->
          <img src=".\img\folha1.jpg" alt="Gomes" class="img-responsive" width="200" height="200">
        </div>
      </div>
    </div>
  </div>
  <!--                    Imagem Fixa                      -->
  <div id="fixed">
    <div class="card-header p-2">
      <p>Conheça mais sobre o IRIS</p>
      <div class="card-body text-center p-3">
        <div class="row-full p-2">
            <a class="nav-link" href="./projetos.php?page=projetos"><h5 class="text-white btn btn-outline-success my-2 my-sm-0">IRIS <i class="fas fa-bullseye text-success"></i></h5></a>
        </div>
      </div>
    </div>
  </div>
  <!--                    Rodapé                      -->
  <footer>
    <div class="card text-center bg-dark rounded-0">
      <div class="row-full bg-black p-2">
        <div class="card-body p-3">
          <div class="row-full p-2">
            <h5 class="text-white btn btn-outline-success my-2 my-sm-0">Entre em Contato</h5>
          </div>
          <p class="card-text text-white">&copy;PROJETO IRIS&trade; 2018, Av. 1º de Maio, Jaguaribe, João Pessoa </p>
          <div class="social-links">
            <ul>
              <li>
                <a href="https://www.facebook.com/evernote/">
                  <i class="fab fa-facebook"></i>
                  <span>Facebook</span>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/evernote">
                  <i class="fab fa-instagram"></i>
                  <span>Instagram</span>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCr_JcNR6slxFcTtDZ8t6F0A">
                  <i class="fab fa-youtube"></i>
                  <span>YouTube</span>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/evernote">
                  <i class="fab fa-linkedin"></i>
                  <span>Linkedin</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>