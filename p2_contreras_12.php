<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/contr.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 16 de Brisa Contreras</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/6666.jpg" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_contreras_12.php/if_else.php";
					?>
					<figure>
					    <img src="imagenes/5555.jpg" alt="">
					</figure>
					<h4>Explicacion del codigo</h4>
					<p>
						Es una estructura de selecion if-else, la cual nos dice que si dia es mayor 
						o igual a 10, nos diga que el el sitio esta activo, en cambio si el numero 
						es menos de 10 nos dira que el sitio fuera de servicio
					</p>
					<h4>Con estilo CSS</h4>
					<figure>
					    <img src="imagenes/7777.jpg" alt="">
					</figure>
					<h4>Nuestro codigo CSS quedaria de esta manera</h4>
					<figure>
					    <img src="imagenes/8888.jpg" alt="">
					</figure>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>