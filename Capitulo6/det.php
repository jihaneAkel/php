<?php
  session_start();
?>
<?php
$producto =array(
     "producto1" => array( "nombre" =>"Stuhrling", "precio"=>74, "imagen" =>"w.jpg", "detalle" =>"Stuhrling Original Men's Regatta Espora Swiss Quartz Divers Bracelet Watch "),
     "producto2" => array( "nombre" =>"Seiko", "precio"=>136, "imagen" =>"watch2.jpg", "detalle" =>"Seiko Men's 5 Sports Black Nylon Strap Watch"),
     "producto3" => array("nombre" => "Movado", "precio"=>333, "imagen" =>"watch3.jpg", "detalle" =>"Movado Women's 2100006 'Collection' Yellow Goldplated Swiss Quartz Watch"),
);
 $_SESSION['producto'] = $producto; 
  $x = $_POST['codigo'];
  $producto = $_SESSION['producto'];
  $x_value = $producto[$x];
  ?>
  <img src="<?=$x_value[imagen]?>" width="220" border="1"><br>
  <?=$x_value[nombre]?><br>Detalle: <?=$x_value[detalle]?><br>Precio: <?=$x_value[precio]?> €
  
   <br><a href='ex6.php'>Volver</a><br>
  
  <br><br>
  
