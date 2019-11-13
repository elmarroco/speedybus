<?php
require_once("Controller/OPrincipal.php");
require_once("Controller/OViajesNormales.php");
if (!isset($_GET['oyente'])) {
  OPrincipal::DesplegarGUIPrincipalGeneral();
  OPrincipal::StartListening();
} else if ($_GET['oyente'] == 'Principal') {
  if ($_GET['gui'] == 'PrincipalGeneral') {
    OPrincipal::DesplegarGUIPrincipalGeneral();
    OPrincipal::StartListening();
  }
} else if ($_GET['oyente'] == 'ViajesNormales') {
  if ($_GET['gui'] == 'SeleccionVN') {
    OViajesNormales::DesplegarGUISeleccionVN();
    OPrincipal::StartListening();
  }
}
