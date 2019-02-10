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