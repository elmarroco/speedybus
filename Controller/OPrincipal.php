<?php
class OPrincipal
{
  public static function DesplegarGUIPrincipalGeneral()
  {
    require_once('View/GUIGenerales/GUIPrincipalGeneral.php');
  }
  public static function StartListening()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      if(isset($_POST['origen']) && isset($_POST['destino'])) {
        
      }
    }
  }
}
