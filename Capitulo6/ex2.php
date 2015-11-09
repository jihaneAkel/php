<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
        número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
        en el cómputo. Utiliza sesiones
 */

  
        $numeroIntr = $_POST['numeroIntr'];
       // $_SESSION['suma'] += $numeroIntr;
        $_SESSION['contador']++;
        
        $_SESSION['impares'] = $_POST['impares'];
       
        if (!isset($numeroIntr) || ($numeroIntr > 0)) {
         ?>
                   
                    <form action="ex2.php" method="post" autofocus>
                    <input type="text" name="numeroIntr">
                    <input type="hidden" name="impares" value="<?php echo $_SESSION['impares']; ?>">
                    <input type="submit" value="Continuar">
                    </form>
        
        <?php
       
                    echo $_SESSION['contador'],"<br>";
                    
        }
        if (isset($numeroIntr)) {
                if(($numeroIntr%2) != 0){
                 $_SESSION['suma'] += $numeroIntr; 
                 $_SESSION['impares']++;

                 
                 
                echo   "contador Impares" ,$_SESSION['impares'], "<br>"; 
                echo "La media de los impares :";
                echo   $_SESSION['suma']/($_SESSION['impares']);     

          
                 
             }
        
        }