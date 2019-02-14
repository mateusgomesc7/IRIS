<!doctype html>
<html lang="br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
     
    <title>IRIS</title>
</head>

<body onload="animar()">
    <div class="container">

        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">

            <span class="nav-tittle"><strong> <i class="fas fa-bullseye text-success"></i> IRIS </strong> <br>Irrigação
                Residencial</span>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php"><span>Início</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./equipe.php"><span>Sobre nós</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./projetos.php"><span>Projeto</span></a>
                    </li>
                    <li class="nav-item">   
                        <a class="nav-link" href="./index.php">Sair</a>
                    </li>    
                </ul>
            </div>
        </nav>


        <div class="container-fluid mt-4">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar bg-dark">
                <!-- Menu do lado ESQUERDO -->
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Usuário</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="./dashboard.php">
                                <span data-feather="home">
                                    Home</span></a>
                        <li class="nav-item">
                            <a class="nav-link" href="./user-prototipo.html">
                                <span data-feather="bar-chart-2">
                                    Protótipo
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Plantas</span>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="./html/planta1.html">
                                <span data-feather="edit-2"></span>
                                Planta 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./html/planta2.html">
                                <span data-feather="download-cloud"></span>
                                Planta 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./html/planta3.html">
                                <span data-feather="rotate-cw"></span>
                                Planta 3
                            </a>
                        </li>
                    </ul> -->

                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span> Configurações</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="sliders"></span>
                                Automática
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="send"></span>
                                Manual
                            </a>
                        </li>
                    </ul> -->
                </div>
            </nav>


            <main role=" main" class="col-md-9 ml-sm-auto col-lg-20 p-4 m-4  mt-4">
                <div class="row">
                    <div class="card border-success mb-3 mt-4 text-center" id="testecard" style="width: 700px;">
                        <div class="card-body text-success ">
                            <div class="row">
                                <div class="col mt-4">
                                    <div class="card d-flex flex-row doughnut">
                                        <!-- Gráfico de Doughnut  -  Reservatório -->
                                        <div class="chart">
                                            <canvas class="canvasDoughnut" id="canvasDoughnut"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-4">
                                    <div class="row">
                                        <div class="card text-white bg-warning mb-3 h-25 placas" style="max-width: 7rem;">
                                            <div class="card-header">Energia (KW)</div>
                                            <div class="card-body">
                                                <h5 class="card-title" id="potencia">0</h5>

                                                        <button type="button" class="btn btn-secondary" onclick="potenciaUP()">↑</button>

                                                        <button type="button" class="btn btn-secondary" onclick="potenciaDOWN()">↓</button>
                                                
                                            </div>
                                        </div>

                                        <div class="card text-white bg-primary mb-3 h-25 placas" style="max-width: 6rem;">
                                            <div class="card-header">Água (L)</div>
                                            <div class="card-body">
                                                <h5 class="card-title" id="agua">0</h5>

                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary" onclick="aguaUP()">↑</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary" onclick="aguaDOWN()">↓</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card text-white bg-success mb-3 h-25 w-75 placas" style="max-width: 7rem;">
                                            <div class="card-header">Gasto mensal</div>
                                            <div class="card-body w-auto">
                                                <h5 class="card-title" id="valorTotal">R$ 0,00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card border-success mb-3 mt-4 text-center" id="testecard" style="width: 700px;">
                        <div class="card-body text-success ">
                            <div class="card-header">Gasto de energia e água por mês</div>
                            <div class="col mt-4">
                                <div class="row mt-4">
                                    <div class="card d-flex flex-row">
                                        <!-- Gráfico de Barra  -  Gasto de água por mês -->
                                        <div class="chart">
                                            <canvas id="barChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card border-success mb-3 mt-4 text-center" id="testecard" style="width: 700px;">
                        <div class="card-body text-success ">
                            <div class="card-header">Temperatura</div>
                            <div class="col mt-4">
                                <div class="row mt-4">
                                    <div class="card d-flex flex-row">
                                        <!-- Gráfico de Linha  -  Temperatura -->
                                        <div class="chart">
                                            <canvas id="lineGraph1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row">

                                    <div class="card text-white bg-primary mb-4 ml-2 h-25 placas" style="max-width: 8rem;">
                                        <div class="card-header">Média</div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row align-items-center">
                                                    <div class="my-1">
                                                            <h5 class="card-title" id="mediatemperatura"></h5><!--id para função em js-->
                                                    </div>
                                                    <div class="form-group">
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Mês</option>
                                                            <option>Dia</option>
                                                            <option>Ano</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Período -->
                                    <div id="periodo" class="card text-white bg-primary mb-3 placas" style="max-width: 9rem;">
                                        <div class="card-header">Período</div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="inputEmail4">início</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="inputPassword4">fim</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Máximo e Mínimo -->
                                    <!-- <div class="row"> -->
                                    <!-- <div class="col"> -->
                                    <div class="card text-white bg-primary h-25 placas" style="max-width: 7rem;">
                                        <div class="card-header">Máximo</div>
                                        <div class="card-body">
                                            <h5 class="card-title" id="maxtemperatura"></h5><!--id para função em js-->
                                        </div>
                                    </div>
                                    <!-- </div>
                                    <div class="col"> -->
                                    <div class="card text-white bg-primary h-25 placas" style="max-width: 7rem;">
                                        <div class="card-header">Mínimo</div>
                                        <div class="card-body">
                                            <h5 class="card-title" id="mintemperatura"></h5><!--id para função em js-->
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card border-success mb-3 mt-4 text-center" id="testecard" style="width: 700px;">
                        <div class="card-body text-success ">
                            <div class="card-header">Umidade</div>
                            <div class="col mt-4">
                                <div class="row mt-4">
                                    <div class="card d-flex flex-row">
                                        <!-- Gráfico de Linha  -  umidade -->
                                        <div class="chart">
                                            <canvas id="lineGraph2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row">

                                    <div class="card text-white bg-primary mb-4 ml-2 h-25 placas" style="max-width: 8rem;">
                                        <div class="card-header">Média</div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row align-items-center">
                                                    <div class="my-1">
                                                        <h5 class="card-title" id="mediaumidade"></h5><!--id para função em js-->
                                                    </div>
                                                    <div class="form-group">
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Mês</option>
                                                            <option>Dia</option>
                                                            <option>Ano</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Período -->
                                    <div id="periodo" class="card text-white bg-primary mb-3 placas" style="max-width: 9rem;">
                                        <div class="card-header">Período</div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="inputEmail4">início</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                                <div class="form-group col">
                                                    <label for="inputPassword4">fim</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Máximo e Mínimo -->
                                    
                                            <div class="card text-white bg-primary mb-3 h-25 placas" style="max-width: 7rem;">
                                                <div class="card-header">Máximo</div>
                                                <div class="card-body">
                                                    <h5 class="card-title"id="maxumidade">0</h5><!--id para função em js-->
                                                </div>
                                            </div>
                            
                                            <div class="card text-white bg-primary mb-3 h-25 placas" style="max-width: 7rem;">
                                                <div class="card-header" >Mínimo</div><!--id para função em js-->
                                                <div class="card-body">
                                                    <h5 class="card-title"id="minumidade">0</h5>
                                                </div>
                                            </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <footer>

        <div class="card text-center bg-dark rounded-0">
            <div class="row-full bg-black p-2">
                <div class="card-header p-2">
                    <!-- O ícone deve ficar dentro de h5 ? -->
                    <h5 class="text-white">IRIS <i class="fas fa-bullseye text-success"></i></h5>
                </div>
                <div class="card-body p-3">
                    <p class="card-text text-white">&copy;PROJETO IRIS&trade; </p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/feather.js"></script>
    <script src="js/maxmin.js"></script>
    <script src="js/calculoGasto.js"></script>
</body>

</html>