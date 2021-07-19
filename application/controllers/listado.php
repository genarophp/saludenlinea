<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Listado extends CI_Controller { 
   //Acá va el código.

   private $lista = array(
    array('id' => 1, 'nombre' => 'Guitarra', 'descripcion' => 'Instrumento de cuerda.'),
    array('id' => 2, 'nombre' => 'Bajo', 'descripcion' => 'Instrumento de cuerda.'),
    array('id' => 3, 'nombre' => 'Batería', 'descripcion' => 'Instrumento de percusión.'),
 );

 public function ver_lista(){
    echo '<ul>';
    foreach($this->lista as $item){
       echo '<li> '.$item['nombre'].' </li>';
    }
    echo '</ul>';
 }

}