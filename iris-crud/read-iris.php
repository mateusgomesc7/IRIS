<?php

require_once('database.php');


$connection = connect();

/**
 *  Read coluna de "valor1" com coluna de "tempo"
 */
function tempoValor1() {
  global $connection;
  $sql = "SELECT `valor1`,`tempo` FROM `valores`";
  $pdoStm = $connection->query($sql);
  return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
}


/**
 *  Read coluna de "valor2" com coluna de "tempo"
 */
function tempoValor2() {
    global $connection;
    $sql = "SELECT `valor2`,`tempo` FROM `valores`";
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
  }


  /**
 *  Read coluna de "valor3" com coluna de "tempo"
 */
function tempoValor3() {
    global $connection;
    $sql = "SELECT `valor3`,`tempo` FROM `valores`";
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
  }


  function maxValor3(){
    global $connection;
    $sql = "SELECT max(valor3) FROM `valores`";//Selecionar o maior valor banco
    $pdoStm = $connection->query($sql);
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  function minValor3(){
    global $connection;
    $sql = "SELECT min(valor3) FROM `valores`";//Selecionar o menor valor banco
    $pdoStm = $connection->query($sql);
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  function mediaValor3(){
    global $connection;
    $sql = "SELECT avg(valor3) FROM `valores`";//Selecionar a media dos valores banco
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }