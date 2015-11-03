<!DOCTYPE html>
<!--


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
    
      
     
     
        if (!isset($numeroIntr) && ($suma == 10000)){
        $media = $suma/$contador;    
       // echo $suma, "<br>";
        echo "La media :", $media, "<br>";
        //echo $contador, "<br>";
    
        }
        
        if (!isset($numeroIntr) || ($numeroIntr  != 10000)){
            $suma = $_POST['suma']; 
            $suma += $numeroIntr;
            $contador++;
            echo"Introduzca num.<br>";
            echo "contador ", $contador, " .<br>";
            echo "suma", $suma;

           ?>



            <form action="new.php" method="post">
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