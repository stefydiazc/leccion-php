<?php

class Factura
{
    private $id;
    private $descripcion;
    private $total;
    
     function __construct($id, $descripcion, $total) {
       $this->id = $id;
       $this->descripcion = $descripcion;
       $this->total = $total;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
    
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
     
     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
     
}

?> 
