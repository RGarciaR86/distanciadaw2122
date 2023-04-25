<?php
/**
* Función que recibe dos números enteros como parámetros y los suma, devolviendo el resultado de la operación.
*
* @author Raúl García Rivas.
* 
* @version 04/2023-1.
* 
* @internal Función que suma dos números pasados como parámetros.
*
* @param int $num1 Primer sumando de la operación de suma.
* 
* @param int $num2 Segundo sumando de la operación de suma.
*
* @return int El resultado de la suma de ambos números.
*/


   function sumar($num1, $num2){
      $resultado = $num1 + $num2;
      return $resultado;
   }


/**
* Función que recibe un nombre como parámetros y lo concatena con texto para devolver un saludo.
*
* @author Raúl García Rivas.
* 
* @version 04/2023-1.
* 
* @internal Función que recibe un nombre como parámetro y lo concatena en un texto para devolver un saludo.
*
* @param string $nombre Nombre de la persona que va a saludar.
*
* @return string Cadena con el saludo incluyendo el nombre del parámetro.
*/

   function saludar($nombre){
      $saludo = 'Hola, me llamo ' . $nombre . '. Te saludo atentamente.';
      return $saludo;
   }
   
?>