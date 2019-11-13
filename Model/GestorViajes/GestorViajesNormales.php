<?php
require_once('../ConnectDb.php');
class GestorViajesNormales extends ConnectDb
{
  function __construct()
  {
    parent::__construct();
  }
  public function ObtenerViajes($id_origen, $id_destino, $fecha) {
    $sql = "SELECT * FROM viajes ";
    $instance = $this::getInstance();
    $result = query($sql);
    $origenes = $instance->fetchArray($result);
  }
}
