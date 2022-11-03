<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include "dependencias.php"; ?>


  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="../img/Ajolotitos .png" width="70" height="70" class="d-inline-block align-top" alt="" loading="lazy">
    Los Ajolotitos Tecnológicos S.A De C.V
  </a>
  <div class="col"></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto " >

      <li class="nav-item active">
        <a class="nav-link" href="usuarios.php">Usuarios</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="articulos.php" >Administrador de articulos</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador: <?php echo $_SESSION['usuario']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../procesos/salir.php">Salir</a>
          
        </div>
      </li>
    </ul>

  </div>
</nav>







  </body>
</html>