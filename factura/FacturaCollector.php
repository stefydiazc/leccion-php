<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  

  function createFactura($descripcion, $total) {    
    $insertrow = self::$db->insertRow("INSERT INTO php.factura (id, descripcion, total)
                                      VALUES (?, ?, ?)", array(null,"{$descripcion}", "{$total}"));

  }  

  function readFacturas() {
    $rows = self::$db->getRows("SELECT * FROM factura ");        
    $arrayFactura= array();        
    foreach ($rows as $c){
      //print_r($c);
      $aux = new Factura($c{'id'}, $c{'descripcion'}, $c{'total'});
      array_push($arrayFactura, $aux);
    }
      //print_r($arrayUsuario);
    
    return $arrayFactura;        
  }
  


}
?>

