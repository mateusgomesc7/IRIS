<?php
require_once('../read-iris.php');

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

//Transofrma arrya php em json e imprime
echo json_encode(tempoValor1());


//Exemplo: 
// "[
//     {
//         "valor1":"784",
//         "tempo":"03:09:48"
//     },
//     {
//         "valor1":"150",
//         "tempo":"03:09:48"
//     },
//     {
//         "valor1":"150",
//         "tempo":"03:09:48"
//     },
//     {
//         "valor1":"150",
//         "tempo":"03:09:48"
//     },
//     {
//         "valor1":"150",
//         "tempo":"03:09:48"
//     },
//     {
//         "valor1":"850",
//         "tempo":"06:00:00"
//     }
// ]" 
