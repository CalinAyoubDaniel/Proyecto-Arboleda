../<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../../../index.php">COMPONENTES PC</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li ><a href="../../../index.php">HOME</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">COMPONENTES <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="linea"><a href="../placas/placas.php" target="">Placas base</a></li>
						<li class="linea"><a href="./procesadores.php" target="">Procesadores</a></li>
						<li class="linea"><a href="../discos duros/discos.php" target="">Discos Duros</a></li>
						<li class="linea"><a href="../graficas/graficas.php" target="">Tarjetas Gráficas</a></li>
						<li class="linea"><a href="../memorias ram/ram.php" target="">Memorias RAM</a></li>
						<li class="linea"><a href="../fuentes/fuentes.php" target="">Fuentes de A.</a></li>
						<li class="linea"><a href="../cajas/cajas.php" target="">Cajas/Torres</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERIFERICOS <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="linea"><a href="../../Perifericos/monitores/monitores.php" target="">Monitores</a></li>
						<li class="linea"><a href="../../Perifericos/impresoras/impresoras.php" target="">Impresoras</a></li>
						<li class="linea"><a href="../../Perifericos/multifuncion/multifunciones.php" target="">Multifunciones</a></li>
						<li class="linea"><a href="../../Perifericos/altavoces/altavoces.php" target="">Altavoces</a></li>
						<li class="linea"><a href="../../Perifericos/teclados/teclados.php" target="">Teclados</a></li>
						<li class="linea"><a href="../../Perifericos/ratones/ratones.php" target="">Ratones</a></li>
						<li class="linea"><a href="../../Perifericos/auriculares/auriculares.php" target="">Auriculares</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ZONA APPLE <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="linea"><a href="../../Zona Apple/iphone/iphone.php" target="">iphone</a></li>
						<li class="linea"><a href="../../Zona Apple/accesorios/accesorios.php" target="">Accesorios</a></li>
						<li class="linea"><a href="../../Zona Apple/repuestos/repuestos.php" target="">Repuestos</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SMARTPHONE <span class="caret"></span></a>
					<ul class="dropdown-menu"> 
						<li class="linea"><a href="../../Smartphones/telefonos/telefonos.php" target="">Smartphones</a></li>
						<li class="linea"><a href="../../Smartphones/fundas/fundas.php" target="">Fundas</a></li>
						<li class="linea"><a href="../../Smartphones/protectores/protectores.php" target="">Protectores de Pantalla</a></li>
						<li class="linea"><a href="../../Smartphones/tarjetas/tarjetas.php" target="">Tarjetas MicroSD</a></li>
						<li class="linea"><a href="../../Smartphones/powerbanks/power.php" target="">Powerbanks</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>


<div class="jumbotron">
	<div class="col-md-8">
		La tienda de tecnología online líder por precio, calidad y servicio
	</div>
	<div class="col-md-2">

		<?php
		if(isset($_SESSION['correo'])){
			?>
			<a href="../../../php/panel.php">Bienvenido: <?php echo $_SESSION['correo']; ?>
				<span class="glyphicon glyphicon-user"></span></a>
				<?php
			}else{


				?>
				<a href="../../../php/registro2.php">Identifícate
					<span class="glyphicon glyphicon-user"></span></a>
					<?php
				}
				?>

			</div>
			<div class="col-md-2">
				<a href="../../../php/carritodecompras.php">
					<span class="glyphicon glyphicon-shopping-cart"></span></a>
				</div>

</div>