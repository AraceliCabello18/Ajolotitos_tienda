<?php include "../header.php"; ?>
<div class="container">
<div class="jumbotron">
<section class="vh-100">
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="./img/Ajolotitos .png" class="img-fluid" alt="Phone image">
        </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="./procesos/registroUsuarios.php" method="post">
            <div class="d-flex align-items-center mb-3 pb-1">
                <span class="h1 fw-bold mb-0">Registro</span>
            </div>
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate Ahora</h5>
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
        <a href="./loginAdmin.php">Login</a>
        </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Administrador</button>
        
    </form>
</div>
</div>
    <?php include "../footer.php"; ?>