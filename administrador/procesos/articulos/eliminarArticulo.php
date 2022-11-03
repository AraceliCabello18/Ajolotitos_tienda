<?php 


require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

$id=$_GET['id'];

$obj=new articulos();

if ($obj->eliminaArticulo($id)==1) {

	header("location:../../vistas/articulos.php");
} else {
	echo "fallo al eliminar";
}

 ?>