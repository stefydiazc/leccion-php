<html>
<head>
</head>

<body>
<div id="main">
<?php

$descripcion = $_POST ['descripcion'];
$total = $_POST ['total'];
//echo $peso."</br>";
//echo $objetivo."</br>";
//$valor="manuel";
echo "<h3>Factura Agregada </h3>";
echo 'Factura :  ' . htmlspecialchars($descripcion)."</br>". htmlspecialchars($total);


include_once("FacturaCollector.php");

$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->createFactura($descripcion, $total);
echo "</br>";
echo "</br>";
?>
<div><a href="factura-admin.php">Volver al Inicio</a></div>
</div>
</body>
</html>
