<?php
require_once('../Model/ConnectDb.php');
$key = $_POST['key'];

$sql = "SELECT origen FROM itinerario WHERE
    origen LIKE 'ta%'";
    
$result = $instance->query($conn, $sql);
$origenes = $instance->fetchArray($result);

$html = "";
if ($instance->rowCount($result) > 0) {
  foreach ($origenes as $origen ) {
    $html .= "<div>" . $origen->origen . "</div>";
  } 
}
echo $html;
