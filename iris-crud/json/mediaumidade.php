<?php
require_once('../read-iris.php');

//Cabeçário para configurar o arquivo php em json
header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

//Transofrma arrya php em json e imprime json_encode(maxtemperatura()));
echo json_encode(mediaumidade());
?>