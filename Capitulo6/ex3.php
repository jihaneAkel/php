<?php
session_start();

$num= $_POST['numeroIntr'];
   
     if(!isset($_SESSION['suma'])){
     $_SESSION['contador']=0;
     $_SESSION['suma']=0;   

    }


 //$_SESSION['contador'] = $_POST['contador'];
        if(!isset($num)){ 
          
          /*
                echo "contador ",$_SESSION['contador'] , " .<br>";
                echo "suma", $_SESSION['suma'];
                echo " .<br>1";*/

           ?>



        <form action="ex3.php" method="post">
            <input type="number" name="numeroIntr" autofocus required="" >
        
            <input type="submit" value="Continuar">
        </form>

            <?php

   
            
          }else {
              
       if(($_SESSION['suma']  <= 10000)){
       
           $_SESSION['contador']++;
           $_SESSION['suma'] =   $_SESSION['suma'] + $num;
                  
       }
        ?>



        <form action="ex3.php" method="post">
            <input type="number" name="numeroIntr" autofocus required="" >
            <input type="submit" value="Continuar">
        </form>

            <?php
          //$numeroIntr;
         
              if ($_SESSION['suma'] > 10000){
            

                echo "La media :",($_SESSION['suma']/$_SESSION['contador']), "<br>";
                echo "contador ",$_SESSION['contador'] , " .<br>";
                echo "suma", $_SESSION['suma'];
              }
             
        
        }
    
        ?>