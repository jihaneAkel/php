<?php
    session_start();
?>
<link href="style.css" rel="stylesheet" type="text/css">
<h1 id="titulo">Tienda on-line </h1>


<?php

 $producto =array(
     "producto1" => array( "nombre" =>"Stuhrling", "precio"=>74, "imagen" =>"w.jpg"),
     "producto2" => array( "nombre" =>"Seiko", "precio"=>136, "imagen" =>"watch2.jpg"),
     "producto3" => array("nombre" => "Movado", "precio"=>333, "imagen" =>"watch3.jpg"),
);
 
  foreach($producto as $x => $x_value) {

       ?>
<div id="new">
     <img src="<?=$x_value[imagen]?>" width="220" border="2"><br>
    <?=$x_value[nombre]?><br>Precio: <?=$x_value[precio]?> €
    <form action="ex5.php" method="post">
      <input type="hidden" name="codigo" value="<?=$x?>">
      <input type="hidden" name="accion" value="comprar">
      <input type="submit" value="Comprar">
    </form><br><br>
    <?php
  }					
  ?>
</div>
<div id="car">
     <?php // Carrito /////
     
    echo"Carrito : <br>"; 
     
  $accion = $_POST['accion'];
  $codigo = $_POST['codigo'];

  // Inicializa el carrito la primera vez
  if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
  }

  if ($accion == "comprar") {
    $_SESSION['carrito'][$codigo]++;
  }

  if ($accion == "eliminar") {
    $_SESSION['carrito'][$codigo] = 0;
  }
 
  // Muestra
  $total = 0;
  foreach ($producto as $cod=> $x_value) {
    if ($_SESSION['carrito'][$cod] > 0) {
      $total = $total + ($_SESSION['carrito'][$cod] * $x_value[precio]);
      ?>
      <img src="<?=$x_value[imagen]?>" width="200" border="2"><br>
      <?=$x_value[nombre]?><br>Precio: <?=$x_value[precio]?> €<br>
      Unidades: <?=$_SESSION['carrito'][$cod]?>
      <form action="ex5.php" method="post">
        <input type="hidden" name="codigo" value="<?=$cod?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      <?php
    }
  }
  ?>
  <b>Total: <?=$total?> </b>
</div> 
    
    