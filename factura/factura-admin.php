<html>
<head>
</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="nuevofactura.php">Nuevo</a></td></tr>
<tr>
<td><strong>Id</strong></td>
<td><strong>Descripcion</strong></td>
<td><strong>Total</strong></td>
</tr>

<?php
foreach ($FacturaCollectorObj->readFacturas() as $c){
 //print_r($c);
  echo "<tr>";
  echo "<td>".$c->getId() ."</td>";
  echo "<td>".$c->getDescripcion()."</td>";
  echo "<td>".$c->getTotal()."</td>";

  echo "</tr>"; 
}
?>

</table>
</div>
</body>
</html>