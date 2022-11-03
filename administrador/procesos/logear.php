<?php session_start();
    include "./conexion.php";
    
    $c= new conectar();
    $conexion=$c->conexion();
    
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $pass = sha1($_POST['password']);
    $sql = "SELECT * FROM admin
            WHERE usuario = '$user'
            AND password = '$pass'";

    $respuesta = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($respuesta) > 0) {
        $_SESSION['usuario'] = $user;
        header('location:../vistas/usuarios.php');
    }else{
        echo'Tu Credencial de Usuario No es Valida :(';
    }
?>