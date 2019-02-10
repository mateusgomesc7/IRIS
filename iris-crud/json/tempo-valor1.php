<?php
require_once('../read-iris.php');


//Transofrma arrya php em json e imprime
var_dump(json_encode(tempoValor1()));


//Exemplo:
// string(283) "[{"valor1":"784","tempo":"2019-02-10 03:09:48"},
// {"valor1":"150","tempo":"2019-02-10 03:09:48"},
// {"valor1":"150","tempo":"2019-02-10 03:09:48"},
// {"valor1":"150","tempo":"2019-02-10 03:09:48"},
// {"valor1":"150","tempo":"2019-02-10 03:09:48"},
// {"valor1":"850","tempo":"2019-02-20 06:00:00"}]" 
