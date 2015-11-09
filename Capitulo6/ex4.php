<?php
    session_start();
?>
<?php
   
    
    
     $username = $_POST['username'];
     $password = $_POST['password'];
     $_SESSION['usuario'] = 'li';
     $_SESSION['contra'] = 'li';
      if (!isset($username)) {
?>
 
           
            <form action="ex4.php" method="POST">
                    <p>
                            <label>Nombre de usuario</label> <br />
                            <input type="text" name="username" />
                    </p>
                    <p>
                            <label>Contraseña</label> <br />
                            <input type="password" name="password" />
                    </p>
                    <p>
                            <input type="submit" value="Crear sesion" />
                    </p>
            </form>
 <?php

}
    if(($username==$_SESSION['usuario']) && ($password==$_SESSION['contra'])){
        
        
       header("Location: ex3.php");///
        //echo "HAs !!!!!1";
  
    }else if (isset($username) || ($password)){
    ?>
 
           <p>Intenta de nuevo:
                    </p>
            <form action="ex4.php" method="POST">
                    <p>
                            <label>Nombre de usuario</label> <br />
                            <input type="text" name="username" />
                    </p>
                    <p>
                            <label>Contraseña</label> <br />
                            <input type="password" name="password" />
                    </p>
                    <p>
                            <input type="submit" value="Crear sesion" />
                    </p>
            </form>
 <?php
}

    
