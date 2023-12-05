<html lang="ar">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Comunitaria la Plaza - Podcasts</title>

	<meta name="author" content="Jeremías Oviedo" />
	<meta name="copyright" content="copyright Radio Comunitaria la Plaza" />
	<meta name="description" content="Somos una Radio Comunitaria desde San Francisco del Chañar, Cordoba. Noticias locales,entretenimiento y buena musica." />
	<meta name="keywords" content="Radio Comunitaria la Plaza 91.5, San Francisco del Chañar, Cordoba, Argentina, Chañar, Radio Comunitaria la Plaza, FARCO, ONG, Comunidad, Un lugar para todos, Mario aventuroso, Radio FM" />
	<meta name="robots" content="index, follow">

	<link rel="stylesheet" type="text/css" href="./src/css/style.css">
	<link rel="stylesheet" type="text/css" href="./src/css/podcast.css">
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
	<main>
		<section id="podcast__desc">
			<p> No estás solo, es un ciclo de charlas basadas en la inteligencia emocional que cada martes nos trae
				nuestra compañera Luli Monte que nos ayuda a reflexionar sobre diversos temas <u> vinculados a las
					emociones</u>.
			</p>
		</section>
		<div class="section__conteiner">
			<div class="section">
				<h2 style="font-size: 20px;">Podcast 1 “La Amistad”</h2>
				<div class="audio__podcast">
					<audio class="aud__control" src="./src/assets/audio/podcast/1-Podcast-Amistad-.mp3" controls loop undownload></audio>
				</div>
			</div>
		</div>
		<?php
		include('./src/views/layouts/difusion2.php');
		?>
	</main>
	<footer>
		<?php
		include('./src/views/layouts/footer.php');
		?>
	</footer>
	<script src="./src/js/fuction.js"></script>
</body>

</html>