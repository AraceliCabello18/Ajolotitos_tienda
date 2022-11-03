
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login de Admistrador</title>
</head>
<body>
<?php include "../header.php"; ?>
<div class="container">
<div class="jumbotron">

<section class="vh-100">
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="./img/Ajolotitos .png"
        class="img-fluid" alt="Phone image">
    </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="./procesos/logear.php" method="post">
        <div class="d-flex align-items-center mb-3 pb-1">
            <span class="h1 fw-bold mb-0">Login de Administrador</span>
        </div>
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su cuenta</h5>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" id="Usuario" class="form-control form-control-lg" name="usuario" placeholder="Usuario"/>
            <label class="form-label" for="Usuario">Usuario</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="Password" class="form-control form-control-lg" name="password" placeholder="Password"/>
            <label class="form-label" for="Password">Password</label>
        </div>
        <div class="d-flex justify-content-around align-items-center mb-4">
            <a href="./registro.php">Crear Cuenta</a>
        </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
    <div class="d-flex justify-content-around align-items-center mb-4">
        <a href="../index.php">salir </a>
    </div>    
</form>	
</div>
</div>
    <?php include "../footer.php"; ?>