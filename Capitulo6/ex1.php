<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['suma'])){
        $_SESSION['suma']= 0;
        $_SESSION['contador']=0;

    }
    ///
    
        $numeroIntr = $_POST['numeroIntr'];
       // $_SESSION['suma'] += $numeroIntr;
     
       
       
        if (!isset($numeroIntr) || ($numeroIntr > 0)) {
        $_SESSION['suma'] += $numeroIntr;
        $_SESSION['contador']++;
         ?>
                   
                    <form action="ex1.php" method="post">
                    <input type="text" name="numeroIntr">
                   
                    <input type="submit" value="Continuar">
                    </form>
        
        <?php
        
             
            
                    
                    echo "SUMA:  ", $_SESSION['suma'], "<br>" ; 
                    echo "CONTADOR :   ", $_SESSION['contador'];
        }else{
         echo "La media de los numeros introducidos es :";  
        
         $media = $_SESSION['suma']/($_SESSION['contador']);     
         echo $media; 
         }
      
        // session_destroy();
        ?>





