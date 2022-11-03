<?php include "./footerUser.php"; ?>
<?php
if(!isset($_REQUEST['id'])){
    header("Location: ./login/incio.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orden</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 20px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
<li role="presentation"><a href="./inicio.php">Inicio</a></li>
</ul>
</div>
<div class="panel-body">
    <h1>Estado de su Orden</h1>
    <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
            </div>
<div class="panel-footer"></div>
</div><!--Panek cierra-->
</div>
</body>
</html>