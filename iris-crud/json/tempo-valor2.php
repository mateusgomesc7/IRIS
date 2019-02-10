<?php
require_once('../read-iris.php');


//Transofrma arrya php em json
var_dump(json_encode(tempoValor2()));


//Exemplo:
// string(283) "[{"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"250","tempo":"2019-02-10 03:09:48"},
// {"valor2":"848","tempo":"2019-02-20 06:00:00"}]" 