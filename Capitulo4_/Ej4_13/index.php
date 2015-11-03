<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
son negativos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        Introdzca 10 num
      <?php
      $numeroIntr = $_POST['numeroIntr'];
      $cuentaPosi = $_POST['cuentaPosi'];
      $cuentaNeg = $_POST['cuentaNeg'];
      $cuentaNum = $_POST['cuentaNum'];
      
      if($numeroIntr>0){
          $cuentaPosi++;
    
      }else{
          $cuentaNeg++;
          
      }
      
       if ($cuentaNum == 9){
       echo"los numeros positivos ", $cuentaPosi, "<br>";
       echo "Los negativos :", $cuentaNeg;
    
       }
      if ((!isset($numeroIntr)) || ($cuentaNum < 10)){
          
       $cuentaNum++;
  
       echo "Cuenta numeros :",$cuentaNum, "<br>";
  
          ?>
                    <form action="index.php" method="post">
                    <input type="text" name="numeroIntr" autofocus>
                    <input type="hidden" name="cuentaNum" value="<?php echo $cuentaNum; ?>">
                    <input type="hidden" name="cuentaPosi" value="<?php echo $cuentaPosi; ?>">
                    <input type="hidden" name="cuentaNeg" value="<?php echo $cuentaNeg; ?>">
                    <input type="submit" value="Continuar">
                    </form>
          
          <?php
       
          
  
          } 
             
    
      
      
        ?>
    </body>
</html>
