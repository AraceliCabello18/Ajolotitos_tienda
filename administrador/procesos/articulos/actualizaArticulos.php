<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";


		
	    $name=$_POST['name'];
	    $description=$_POST['description'];
	    $price=$_POST['price'];
		$id=$_POST['id'];

		$datos=array(
		$name,
		$description,
		$price,
		$id);

	$obj=new articulos();
	if ($obj->actualizaArticulo($datos)==1) {
		header("location:../../vistas/articulos.php");
	} else {
		echo "fallo al actualizar";
	}

 ?>