<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        $numeroIntr = $_POST['numeroIntr'];
        
        $suma = $numeroIntr + $_POST['suma'];
        $contador = 1 + $_POST['contador'];
       
        if (!isset($numeroIntr) || ($numeroIntr > 0)) {
         ?>
                   
                    <form action="index.php" method="post">
                    <input type="text" name="numeroIntr">
                    <input type="hidden" name="suma" value="<?php echo $suma;?>" >
                    <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                    <input type="submit" value="Continuar">
                    </form>
        
        <?php
        
             
            
                    
                    echo $suma, "<br>" ; 
                    echo $contador;
        }else{
         echo "La media de los numeros introducidos es :";  
         $suma =$_POST['suma'];
         $contador = $_POST['contador']-1;
         $media = $suma/($contador);     
         echo $media; 
         }
      
        ?>
 
    </body>
</html>
