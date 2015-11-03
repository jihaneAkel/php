<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php
     
     $numeroIntr = $_POST['numeroIntr'];
     $contador = $_POST['contador'];
     $suma = $_POST['suma']; 
     $suma += $numeroIntr;
    
      
     
     
        if ($suma >= 10000){
        $media = $suma/$contador;    
        //echo $suma, "<br>";
        echo $media, "<br>";
        //echo $contador, "<br>";
        echo "la pg ";
        }
        
        if (!isset($numeroIntr) || ($numeroIntr  != 10000)){
            $suma = $_POST['suma']; 
            $suma += $numeroIntr;
            $contador++;
            echo"Introduzca num.<br>";
            echo "contador ", $contador, " .<br>";
            echo "suma", $suma;

           ?>



        <form action="index.php" method="post">
            <input type="number" name="numeroIntr" autofocus >
            <input type="hidden" name="suma" value="<?php echo $suma; ?>">
            <input type="hidden" name="contador" value="<?php echo $contador; ?>">
            <input type="submit" value="Continuar">
        </form>

            <?php

   
            
          }
       // }
    
    ?>
    </body>
</html>
