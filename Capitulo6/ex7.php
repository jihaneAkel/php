<?php
    session_start();
?>
<?php

if (isset($_POST["color"])) {
$color = $_POST["color"];

setcookie("color", $color, time() + 3*24*3600);

} else if (isset($_COOKIE["color"])) {
$color = $_COOKIE["color"];
setcookie("color", $color, time() + 3*24*3600);
}
/*
// Borrado de cookies y variables
if (isset($_POST["borraColor"])) {
setcookie("color", NULL, -1);

unset($color);

}*/

?>

<?php
if (!isset($color)) {
echo "No has elegido background-color.<br>";

} else {
echo "<h2>El color elegido: ".$color."</h2>";
}
?>
<body id="new">
    <form action="ex7.php" method="post"  >
Background-color: <input type="color" name ="color" value="<?=$color?>"><br>

<input type="submit" value="Aceptar">
</form>

</body>

<script>

    document.getElementById("new").style.background="<?=$color?>";
 
</script>