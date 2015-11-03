<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         $numeroIntr = $_POST['numeroIntr'];
         
        if (!isset($numeroIntr)){
            ?> 

           Introduzca un numero :
                       <form action="index.php" method="post">
                       <input type="text" name="numeroIntr">

                       <input type="submit" value="Continuar">
                       </form>

           <?php

        }else{
           $esPrimo = true;
           for ($i = 2; $i < $numeroIntr; $i++) {
               if (($numeroIntr % $i) == 0) {
                    $esPrimo = false;
               }
           }       

           if ($esPrimo) {
               echo "El ", $numeroIntr," es primo.";
           } else {
               echo "El ", $numeroIntr, " no es primo.";
           }
        }
         ?>
     
    </body>
</html>
