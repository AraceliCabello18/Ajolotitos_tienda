
<?php session_start();

require_once "../procesos/conexion.php";
require_once "../clases/metodosCrud.php";

if (isset($_SESSION['usuario'])) {

?>

<?php include "header.php"; ?>

<!-- Page Content -->
<br><br>
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Administrador de Usuarios</h1>
                    <div class="row">
                       
                    <table class="table table-hover table-condensed table-bordered" id="iddatatable">                            
                        <tr>
                                <td>Numero de Usuario</td>
                                <td>Usuario</td>
                                <td>Password</td>
                                <td>Fecha</td>
                                <td>Eliminar</td>
                            </tr>

                                <?php
                                    $obj= new metodos();
                                    $sql="SELECT id,
                                    usuario,fecha,
                                    password 
                                    FROM t_usuarios";

                                    $datos=$obj->mostrarDatos($sql);

                                    foreach ($datos as $key){
                                ?>

                            <tr>
                                <td><?php echo $key ['id'];?></td>
                                <td><?php echo $key ['usuario'];?></td>
                                <td><?php echo $key ['password'];?></td>
                                <td><?php echo $key ['fecha'];?></td>

                                <td><a href="../procesos/usuarios/eliminarUsuario.php?id=<?php echo $key['id']?>"><button class="btn btn-danger">Eliminar</button></a></td>
                            </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
    </script>



<?php 

}else{
    header("location:../vistas/usuarios.php");
}

?>