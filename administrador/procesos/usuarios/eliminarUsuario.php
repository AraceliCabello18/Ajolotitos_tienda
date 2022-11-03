<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/metodosCrud.php";

$id=$_GET['id'];

$obj=new metodos();

if ($obj->eliminaUser($id)==1) {

	header("location:../../vistas/usuarios.php");
} else {
	echo "fallo al eliminar";
}

 ?>