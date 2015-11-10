<?php
  session_start();
?>
<?php

$producto =array(
     "producto1" => array( "nombre" =>"Stuhrling", "precio"=>74, "imagen" =>"w.jpg", "detalle" =>"Stuhrling Original Men's Regatta Espora Swiss Quartz Divers Bracelet Watch "),
     "producto2" => array( "nombre" =>"Seiko", "precio"=>136, "imagen" =>"watch2.jpg", "detalle" =>"Seiko Men's 5 Sports Black Nylon Strap Watch"),
     "producto3" => array("nombre" => "Movado", "precio"=>333, "imagen" =>"watch3.jpg", "detalle" =>"Movado Women's 2100006 'Collection' Yellow Goldplated Swiss Quartz Watch"),
);

 
  foreach($producto as $x => $x_value) {

       ?>
     <img src="<?=$x_value[imagen]?>" width="220" border="2"><br>
    <?=$x_value[nombre]?><br>Precio: <?=$x_value[precio]?> €<br>
    
    <form action="ex6.php" method="post">
      <input type="hidden" name="codigo" value="<?=$x?>">
      <input type="hidden" name="accion" value="comprar">
      <input type="submit" value="Comprar">
    </form><br>
     <form action="det.php" method="post">
      <input type="hidden" name="codigo" value="<?=$x?>">
      <input type="hidden" name="detalle" value="detalle">
      <input type="submit" value="Detalle">
    </form><br>
    <?php
  }					
  ?>
 
     <?php // Carrito /////
     
    echo"//////////////////////////////////////////////////////////////<br>"; 
  $ac = $_POST['ac'];  
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
 //////// "<?=$cod?  ///Detalle<?=$x_value[detalle]
   
  
  
  // Muestra
  $total = 0;
  foreach ($producto as $cod=> $x_value) {
    if ($_SESSION['carrito'][$cod] > 0) {
      $total = $total + ($_SESSION['carrito'][$cod] * $x_value[precio]);
      ?>
      <img src="<?=$x_value[imagen]?>" width="200" border="2"><br>
      <?=$x_value[nombre]?><br>Precio: <?=$x_value[precio]?> €
      Unidades: <?=$_SESSION['carrito'][$cod]?>
      <form action="ex6.php" method="post">
        <input type="hidden" name="codigo" value="<?=$cod?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      <?php
    }
  }
  ?>
  <b>Total: <?=$total?> </b>
