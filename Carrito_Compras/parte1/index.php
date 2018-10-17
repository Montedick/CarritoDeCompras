<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<div id="menu-wrapper">
		<ul id="hmenu">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="proposito.html">Proposito</a></li>
			<li><a href="mision.html">Mision</a></li>
			<li><a href="vision.html">Vision</a></li>
			<li><a href="#">Categoria</a>
				<ul class="sub-menu">
					<li><a href="hombres.php">Hombres</a></li>
					<li><a href="mujeres.php">Mujeres</a></li>
					<li><a href="ninas.php">Niñas</a></li>
					<li><a href="ninos.php">Niños</a></li>
				</ul>
			</li>
			<li><a href="rebajas.php">Rebajas</a></li>
			<li><a href="login.php">Cuenta</a></li>
			<li><a href="./carritodecompras.php" title="ver carrito de compras">
			Carrito<img src="./imagenes/carrito.png" width="20px" height="20px"></a></li>
		</ul>	
	</div>
		<section>
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: $<?php echo $f['precio'];?></span>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
			
	</section>
</body>
</html>