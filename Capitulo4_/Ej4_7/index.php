<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        Tienes 4 oportunidades para abrir la caja fuerte <br> Introduzca la combinación:
        
      <form action="caja.php" method="post">

      <input type="number" name="numeroIntro" >
      <input type="hidden" name="intentos" value="3">
      <input type="submit" value="Continuar">
      </form>
    </body>
</html>
