<?php
include './conexion.php';

$c= new conectar();
$conexion=$c->conexion();

$user = $_POST['usuario'];
$pass = $_POST['password'];
$pass = sha1($pass);
$sql = "INSERT INTO admin(usuario, password)
            VALUE('$user','$pass')";
$respuesta = mysqli_query($conexion, $sql);
if ($respuesta) {
    header('location:../loginAdmin.php');
}else{
    echo'no se puede hacer nada :(';
}
?>
<!-- header('location:../vistas/index.php');-->