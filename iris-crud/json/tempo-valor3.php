<?php
require_once('../read-iris.php');

//Cabeçário para configurar o arquivo php em json
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

//Transofrma arrya php em json
var_dump(json_encode(tempoValor3()));


//Exemplo:
// string(283) "[{"valor3":"350","tempo":"2019-02-10 03:09:48"},
// {"valor3":"350","tempo":"2019-02-10 03:09:48"},
// {"valor3":"350","tempo":"2019-02-10 03:09:48"},
// {"valor3":"350","tempo":"2019-02-10 03:09:48"},
// {"valor3":"350","tempo":"2019-02-10 03:09:48"},
// {"valor3":"946","tempo":"2019-02-20 06:00:00"}]" 
