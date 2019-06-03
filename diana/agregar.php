<?php 
session_start();
if (trim($_POST["txtarticulo"]) ==""  || trim($_POST["txtprecio"]) =="" || trim($_POST["txtcantidad"]) =="") {
  $destino="agregar.php";

}else{
	$_SESSION["articulo"] = $_POST["txtarticulo"];
	$_SESSION["precio"] = $_POST["txtprecio"];
	$_SESSION["cantidad"] = $_POST["txtcantidad"];
	$destino = "agregar1.php";
}
header("location: $destino");


 ?>