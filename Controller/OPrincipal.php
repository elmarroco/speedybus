<?php
class OPrincipal
{
  public static function DesplegarGUIPrincipal()
  {
    require_once('View/GUIGenerales/GUIPrincipal.php');
  }
  public static function StartListening()
  {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      if(isset($_POST['origen']) && isset($_POST['destino'])) {
        
      }
    }
  }
}
