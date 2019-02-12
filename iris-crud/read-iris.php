<?php

require_once('database.php');


$connection = connect();

/**
 *  Read coluna de "temperatura" com coluna de "tempo"
 */
function tempoTemperatura() {
  global $connection;
  $sql = "SELECT `temperatura`,`tempo` FROM `valores`";
  $pdoStm = $connection->query($sql);
  return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
}


/**
 *  Read coluna de "umidade" com coluna de "tempo"
 */
function tempoUmidade() {
    global $connection;
    $sql = "SELECT `umidade`,`tempo` FROM `valores`";
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
  }


  /**
 *  Read coluna de "reservatorio" com coluna de "tempo"
 */
function tempoReservatorio() {
    global $connection;
    $sql = "SELECT `reservatorio`,`tempo` FROM `valores`";
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
  }


  function maxTemperatura(){
    global $connection;
    $sql = "SELECT max(temperatura) FROM `valores`";//Selecionar o maior valor banco
    $pdoStm = $connection->query($sql);
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  function minTemperatura(){
    global $connection;
    $sql = "SELECT min(temperatura) FROM `valores`";//Selecionar o menor valor banco
    $pdoStm = $connection->query($sql);
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  function mediaTemperatura(){
    global $connection;
    $sql = "SELECT avg(temperatura) FROM `valores`";//Selecionar a media dos valores banco
    $pdoStm = $connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }