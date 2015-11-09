<?php
    if(!isset($_SESSION['suma'])){
        $_SESSION['suma']= 0;
        $_SESSION['contador']=0;

    }
    ///
        $_SESSION['suma']= $_POST['suma'];
        $numeroIntr = $_POST['numeroIntr'];
        $_SESSION['suma'] += $numeroIntr;
        $_SESSION['contador']++;
        
        $_SESSION['contador'] = 1 + $_POST['contador'];
       
        if (!isset($numeroIntr) || ($numeroIntr > 0)) {
         ?>
                   
                    <form action="ex1.php" method="post">
                    <input type="text" name="numeroIntr">
                    <input type="hidden" name="suma" value="<?php echo $_SESSION['suma'];?>" >
                    <input type="hidden" name="contador" value="<?php echo $_SESSION['contador']; ?>">
                    <input type="submit" value="Continuar">
                    </form>
        
        <?php
        
             
            
                    
                    echo $_SESSION['suma'], "<br>" ; 
                    echo $_SESSION['contador'];
        }else{
         echo "La media de los numeros introducidos es :";  
         $_SESSION['suma'] =$_POST['suma'];
        $_SESSION['contador'] = $_POST['contador']-1;
         $media = $_SESSION['suma']/($_SESSION['contador']);     
         echo $media; 
         }
      
        // session_destroy();
        ?>





