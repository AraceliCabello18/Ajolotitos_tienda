<?php
include "../procesar/conexion.php";
$conexion=conexion();
$user = $_POST['usuario'];
$pass= $_POST['password'];
$pass = sha1($pass);
$sql = "INSERT INTO t_usuarios(usuario,password)
        values('$user','$pass')";
        //ejecutar sentancia 
        $respuesta = mysqli_query($conexion,$sql);
        if($respuesta){
            header('location:../index.php');
        }else{
            echo"No se puedo hacer nada";
        }

?>