<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php 
      $altura = $_POST['altura'];
      $figura = $_POST['figura'];
      
      
      ?>
      
      introduzca la altura de la pirámide:  
      <form action="index.php" method="post">
            <input type="number" name="altura" autofocus >
            <br>
            
     Seleccione figura: 
            <select name="figura">
                <option>img1</option>
                <option>img2</option>
                <option>img3</option>
            </select>
   
            <input type="submit" value="Continuar">
            </form>
        <?php
     
     $alt = 1;
     $i = 0;
     $cadena = null;
     $espaciosPorDelante = $altura - 1;
     $espaciosInternos = 0;
     //$cadena .= "*";      echo $cadena."<br />";
     $figura = "<img src=imagen.jpg  width='36'>";
    while ($alt < $altura) {
      // inserta espacios delante
      for ($i = 1; $i <= $espaciosPorDelante; $i++) {
       echo "<img src=\"transparente.png\" width=\"36\">";
      }
      
      echo $figura;
      // pinta la línea
      //echo "<img src=\"$figura.jpg\" width=\"36\">";
      for ($i = 1; $i < $espaciosInternos; $i++) {
        echo "<img src=\"transparente.png\" width=\"36\">";
      }
      
      if ($alt>1) {
        echo $figura; 
       
      }
      
      echo"<br>";
      $alt++;
      $espaciosPorDelante--;
      $espaciosInternos += 2;
    } // while ////////////////////////////
    
    // base de la pirámide
    for ($i = 1; $i < $alt*2; $i++) {
       echo $figura; 

    }

        
        ?>
    </body>
</html>
