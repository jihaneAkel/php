<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <?php
       // if (!isset($_Post[numerointr]))
        $intentos = $_POST['intentos'];
        $numeroIntr = $_POST['numeroIntr'];
        $com = 4321;
        if ($numeroIntr == $com) {
        echo "La caja fuerte se ha abierto satisfactoriamente .";
        } else {
        if ($intentos == 0) {
        echo "Lo siento,  ha agotado las 4 oportunidades";
        } else {
        if ($numeroIntr!= $com ) {
        echo"Lo siento, esa no es la combinación.<br>";
        echo "Te quedan ", $intentos, " oportunidades.<br>";
        $intentos--;
        echo "Introduce la combinación:";
        echo '<form action="caja.php" method="post">';
        echo '<input type="text" name="numeroIntr">';
        echo '<input type="hidden" name="intentos" value="', $intentos, '">';
        echo '<input type="submit" value="Continuar">';
        echo '</form>';
        }
      }
   }
 ?>   
   
</body>
</html>

