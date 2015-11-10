<?php
    session_start();
?>
<?php
  
/* 
 * Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
        número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
        en el cómputo. Utiliza sesiones
 */
$numeroIntr = $_POST['numeroIntr'];
    if(!isset($numeroIntr)){
        $_SESSION['suma']= 0;
        $_SESSION['contador']=0;
        $_SESSION['impares']=0; 
    }

        
  
       
        if (!isset($numeroIntr) || ($numeroIntr > 0)) {
            $_SESSION['contador']++;
         ?>
                   
                    <form action="ex2.php" method="post" autofocus>
                    <input type="text" name="numeroIntr">
                    <input type="submit" value="Continuar">
                    </form>
        
        <?php
       
                    echo "Contador:  ", $_SESSION['contador'],"<br>";
                    
        }
        
        
       
        
        
        if (isset($numeroIntr)) {
                if($numeroIntr>=0){
                  $_SESSION['contador']++;
                
                if(($numeroIntr%2) == 0){
                if ($numeroIntr > $_SESSION['pares']) {
                $_SESSION['pares'] = $numeroIntr;
                }
                }else{
                //if(($numeroIntr%2) != 0){
                 $_SESSION['suma'] += $numeroIntr; 
                 $_SESSION['impares']++;

                }
        }else{
                echo   "contador Impares :" ,$_SESSION['impares'], "<br>"; 
                echo "La media de los impares : <br>";
                echo   $_SESSION['suma']/($_SESSION['impares']), "<br>";     
                echo "El mayor de los pares : " . $_SESSION['pares'] , "<br>";
        session_destroy();  
          
             }
            
        }
      
        
  