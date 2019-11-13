<?php
require_once("Controller/OPrincipal.php");
if (!isset($_GET['oyente'])) {
  OPrincipal::DesplegarGUIPrincipalGeneral();
  OPrincipal::StartListening();
} else if ($_GET['oyente'] == 'principal') {
  if ($_GET['gui'] == 'principal') {
    OPrincipal::DesplegarGUIPrincipalGeneral();
    OPrincipal::StartListening();
  }
}
