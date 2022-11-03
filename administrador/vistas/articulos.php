<?php session_start();



require_once "../clases/Conexion.php";

require_once "../clases/Articulos.php";



if(isset($_SESSION['usuario'])){

?>

<?php include "header.php"; ?>


<br><br>

		<div class="container mt-4">
			<h1>Articulos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form  action="../procesos/articulos/insertaArticulos.php" method="POST">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="name" name="name">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="description" name="description">
						<label>Precio</label>
						<input type="number" class="form-control input-sm" id="price" name="price">
					
						<p></p>
						<button class="btn btn-info">Agregar</button>
					</form>
				</div>
				<div class="col-sm-8 mt-4">
				<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
					<tr>
						<td>Nombre</td>
						<td>Descripcion</td>
						<td>Precio</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
					<?php
                        $obj= new articulos();
                    	$sql="SELECT id,name,
						description,
						price FROM mis_productos";

                        $datos=$obj->mostrarDatos($sql);

                        	foreach ($datos as $key){
                    ?>

					<tr>
                        <td><?php echo $key ['name'];?></td>
                        <td><?php echo $key ['description'];?></td>
						<td><?php echo $key ['price'];?></td>

						 <td><a href="editarArticulos.php?id=<?php echo $key['id']?>"><button class="btn btn-warning" data-toggle="modal" data-target="#abremodalUpdateArticulo">Editar</button></a></td>
						 <td><a href="../procesos/articulos/eliminarArticulo.php?id=<?php echo $key['id']?>"><button class="btn btn-danger">Eliminar</button></a></td>

                            
                    </tr>
                    <?php
                         }
                    ?>

					
				</table>
				</div>
			</div>
		</div>

	




	</body>
	</html>

	

	<?php 

}else{
	header("location:../vistas/usuarios.php");
}
?>