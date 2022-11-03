<?php include "./headerUser.php"; ?>
<?php session_start();
if(isset($_SESSION['usuario'])){
?>
<div class="container">
    <div class="jumbotron">
    <h2>Bienvenido <?php echo $_SESSION['usuario']?></h2>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<img src="./img/Ajolotitos .png" class="img-fluid" alt="Responsive image">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<table class="table table-hover">
								<tr>
									<th>
                                    Tiendas de ropa y accesorios los Ajolotitos Descubre una exclusiva selección de marcas
									en nuestra tienda en la CDMX con envios a tu domicilio.
									</th>
								</tr>
								<tr>
									<th>
                                    Que la vida se prepare para ti con lo mejor de la moda de Los Ajolotitos Tecnológicos S.A De C.V.
									¡Encuentra ropa, calzado y accesorios con Envío Gratis desde $499 MXN!.
									</th>
								</tr>
								<tr>
									<th>
									El diseño mexicano e internacional alcanza sus máximos niveles con 
									las prendas de vestir y accesorios que se exhiben en nuestra tienda.
									</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<hr class="my-4">
			<p>
            Los Ajolotitos Tecnológicos S.A De C.V 
			Echo por: Cabello Juárez Araceli Aylin, Méndez Jiménez Juan Carlos y Martines Zaragoza Laura Itzel
			</p>
		</div>
    </div>



<?php
}else{
    header('location:../index.php');
}
?>

<?php include "./footerUser.php"; ?>