<?php

$nombre = $_POST["nombre"];
$ruc = $_POST["ruc"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$iva = 0;
$subtotal = 0;
$total = 0;


$subtotal = ($cantidad * $precio);
$iva = ($subtotal*12)/100;
$total = ($iva + $subtotal);

echo "Nombre; ".$nombre;
echo '<br />Ruc: '.$ruc;
echo '<br />Cantidad: '.$cantidad;
echo '<br />Precio: '.$precio;
echo '<br />Subtotal: '.$subtotal;
echo '<br />IVA 12%: '.$iva;
echo '<br />Total: '.$total;


?>
