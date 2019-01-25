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


    <div>
        <?php include("navbar.php"); ?>
    </div>

<div class="container m-5 bordered">
    <form>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputname">Nome</label>
                <input type="text" class="form-control" id="inputname" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
                <label for="inputsobrenome">Sobrenome</label>
                <input type="password" class="form-control" id="inputsobrenome" placeholder="Sobrenome">
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputPassword">Senha</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
        </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control">
                    <option selected>PB</option>
                    <option>PE</option>
                    <option>RN</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputcep">CEP</label>
                <input type="text" class="form-control" id="inputcep">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Concordo com os <a href="#">termos de serviço</a>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
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
                <p class="card-text text-white">&copy;PROJETO IRIS&trade; 2018, Av. 1º de Maio, Jaguaribe, João Pessoa
                </p>
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