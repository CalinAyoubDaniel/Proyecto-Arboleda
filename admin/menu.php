<?php
session_start();
?>

<div class="jumbotron">
	<div class="col-md-8">
		La tienda de tecnología online líder por precio, calidad y servicio
	</div>
	<div class="col-md-2">

		<?php
		if(isset($_SESSION['admin'])){
			?>
			<a href="./panel.php">Bienvenido: <?php echo $_SESSION['admin']; ?>
				<span class="glyphicon glyphicon-user"></span></a>
				<?php
			}else{


				?>
				<a href="./index.php">Identifícate
					<span class="glyphicon glyphicon-user"></span></a>
					<?php
				}
				?>

			</div>

</div>