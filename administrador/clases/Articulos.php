

<?php 
	class articulos{
		
		public function insertaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();


			$sql="INSERT into mis_productos(name,
										description,
										price) 
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]')";
			return mysqli_query($conexion,$sql);
		}
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();
			$result=mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function actualizaArticulo($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE mis_productos set name='$datos[0]',
										description='$datos[1]',
										price='$datos[2]'
						where id='$datos[3]'";

			return mysqli_query($conexion,$sql);
		}
		

		public function eliminaArticulo($id){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE FROM mis_productos
					WHERE id='$id'";
			return $result=mysqli_query($conexion,$sql);

		}

	}

?>