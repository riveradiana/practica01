<?php 
session_start();
if (trim($_POST["txtnombres"]) ==""  || trim($_POST["txtapellidos"]) =="") {
  $destino="inicio.html";

}else{
	$_SESSION["nombre"] = $_POST["txtnpmbres"];
	$_SESSION["apellidos"] = $_POST["txtapellidos"];
	$destino = "carrito.php";
}
header("location: $destino");


 ?>