<?php session_start();

require_once "../clases/Conexion.php";

$obj=new conectar();
$conexion=$obj->conexion();

$id=$_GET['id'];
$sql="SELECT name,
description,
price
FROM mis_productos WHERE id='$id'";

$result=mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);

if(isset($_SESSION['usuario'])){
?>

<?php include "dependencias.php"; ?>

<div class="container px-5 my-5">
<div class="row justify-content-center">
    <div class="col-lg-8">
    <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
        <div class="text-center">
            <div class="h1 fw-light">Actualizar datos de articulos</div>
        </div>

		<form  action="../procesos/articulos/actualizaArticulos.php" method="POST">

						<input type="text" name="id" hidden="" value="<?php echo $id?>">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm"  name="name" value="<?php echo $ver[0]?>">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" name="description" value="<?php echo $ver[1]?>">
						<label>Precio</label>
						<input type="number" class="form-control input-sm"  name="price" value="<?php echo $ver[2]?>">

						<p></p>
						<button class="btn btn-info">Actualizar</button>
					</form>
        </div>
    </div>
    </div>
</div>
</div>



	<?php 
}else{
	header("location:../vistas/usuarios.php");
}
?>
