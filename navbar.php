<?php
  $page = $_GET['page'] ?? 'index';
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <span class="nav-tittle"><strong> <i class="fas fa-bullseye text-success"></i> IRIS </strong> <br>Irrigação
      Residencial</span>

    <div class="container mr-0">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

          <li class="nav-item <?php echo $page === 'index' ? 'active' : '' ?>">
            <a class="nav-link" href="./index.php?page=index"><span>Início</span></a>
          </li>

          <li class="nav-item <?php echo $page == 'equipe' ? 'active' : '' ?>">
            <a class="nav-link" href="./equipe.php?page=equipe"><span>Sobre nós</span></a>
          </li>

          <li class="nav-item <?php echo $page == 'projetos' ? 'active' : '' ?>">
            <a class="nav-link" href="./projetos.php?page=projetos"><span>Projeto</span></a>
          </li>

          <!-- <li class="nav-item <?php //echo $page == 'contato' ? 'active' : '' ?>">
            <a class="nav-link" href="./contato.php?page=contato"><span>Contato</span></a>
          </li>

          <li class="nav-item <?php //echo $page == 'registro' ? 'active' : '' ?>">
            <a class="nav-link" href="./registro.php?page=registro"><span>Registro</span></a>
          </li> -->

          <!-- <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
          </form> -->

          <li class="nav-item">
              <a class="nav-link" href="./dashboard.php"><span>Dashboard</span></a> 
          </li>

        </ul>
      </div>

    </div>
  </nav>