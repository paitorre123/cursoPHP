<?php
    class OperacionesMatematicos{

        function __construct($value_1, $value_2){
          $this->value_1 = $value_1;
          $this->value_2 = $value_2;
        }
  
        function suma(){
          return $this->value_1 + $this->value_2;
        }
        function resta(){
          return $this->value_1 - $this->value_2;
        }
        function multiplicar(){
            return $this->value_1 * $this->value_2;
        }
        function dividir(){
          return $this->value_1 / $this->value_2;
        }
        function modulo(){
          return $this->value_1 % $this->value_2;
        }
      }
?>