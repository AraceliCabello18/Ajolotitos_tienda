<?php include "./headerUser.php"; ?>
<?php
include './Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Los Ajolotitos Tecnológicos</title>
    <meta charset="utf-8">
    <?php include "./footerUser.php"; ?>
</head>
</head>
<body>
<div class="jumbotron">
<div class="panel-body text-center">
<h1 class="display-4">Acceseorios</h1>  
    <a href="./VerCarta.php"></a>
    <div class="container">
        <div class="col-12">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM mis_productos WHERE cosa='accesorio' ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
    <div class="table-responsive">
    <table class="table table-dark table-bordered mb-0" >   
    <thead>
        <tr>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Agregar al Carrito</th>
        </tr>
    </thead>
    <tbody >
        <tr>
        <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo '$'.$row["price"].' MXN'; ?></td>
                <td>
                <a class="btn btn-success" href="./AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a la Carta</a> 
                </td>
                <td>
            </td>
        </tr>

        </div>
        <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
        </div>
        </div>
<div class="panel-footer"></div>
</div><!--Panek cierra-->
 
</div>
</div>

</body>
</html>