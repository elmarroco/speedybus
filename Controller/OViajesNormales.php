<?php
class OViajesNormales
{
  public static function DesplegarGUISeleccionVN()
  {
    require_once('View/GUIViajesNormales/GUISeleccionVN.php');
  }
  public static function StartListening()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      if(isset($_POST['origen']) && isset($_POST['destino'])) {
        
      }
    }
  }
}
