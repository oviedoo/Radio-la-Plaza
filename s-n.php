<!DOCTYPE html5>
<html lang="ar">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Comunitaria la Plaza - Sobre Nosotros</title>

	<meta name="author" content="Jeremías Oviedo" />
	<meta name="copyright" content="copyright Radio Comunitaria la Plaza" />
	<meta name="description" content="Somos una Radio Comunitaria desde San Francisco del Chañar, Cordoba. Noticias locales,entretenimiento y buena musica." />
	<meta name="keywords" content="Radio Comunitaria la Plaza 91.5, San Francisco del Chañar, Cordoba, Argentina, Chañar, Radio Comunitaria la Plaza, FARCO, ONG, Comunidad, Un lugar para todos, Mario aventuroso, Radio FM" />
	<meta name="robots" content="index, follow" />
	<!--para que la pagina se recargue 
	<meta  http-equiv="refresh"  content="10">
-->
	<link rel="stylesheet" type="text/css" href="./src/css/style.css">
	<!--FAVICON-->
	<link rel="icon" href="./favicon.ico">

	<script src="https://kit.fontawesome.com/4f535f04c7.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<?php
		include('./src/views/layouts/header.php');
		?>
	</header>

	<?php
	include('./src/views/layouts/reproductor.php');
	?>
	<main>
		<div class="sobre-nos__conteiner">
			<div id="sobre-nos" class="sobre-nos">
				<p>Somos una radio comunitaria perteneciente a la <b>ONG</b> Camino Real de Chañar e integrante de
					<b>FARCO </b>(foro argentino de radios comunitarias) que nace por la iniciativa de un grupo de
					amigos vinculados a la actividad cultural, social y deportiva de San Francisco del Chañar para
					cubrir un espacio que sentíamos necesario como el de la comunicación que respondiera a los
					valores de la libertad y la participación de todos y para todos en nuestro pueblo y además poder
					transmitir a todos los rincones del país la identidad de esta Córdoba Norteña, con sus riqueza
					su belleza y también su realidades y problemáticas. Somos <b>Radio comunitaria La Plaza
						91.5</b>, “un lugar para todos”
				</p>
			</div>
		</div>
		<?php
		include('./src/views/layouts/publicidades2.php');
		?>
	</main>
	<footer>
		<?php
		include('./src/views/layouts/footer.php');
		?>
	</footer>
	<script src="./src/js/fuction.js"></script>
</body>