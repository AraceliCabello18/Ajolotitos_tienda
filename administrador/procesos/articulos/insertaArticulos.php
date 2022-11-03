<?php

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];


    $datos=array($name,
    $description,
	$price);

    $obj=new articulos();
    if ($obj->insertaArticulo($datos)==1) {
        header("location:../../vistas/articulos.php");
    } else {
        echo "fallo al agregar";
    }