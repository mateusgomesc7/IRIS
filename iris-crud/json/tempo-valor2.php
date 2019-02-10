<?php
require_once('../read-iris.php');

//Cabeçário para configurar o arquivo php em json
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

//Transofrma arrya php em json
echo json_encode(tempoValor2());


//Exemplo:
// string(283) "[{"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"848","tempo":"2019-02-20 06:00:00"}]" 