<!DOCTYPE html5>
<html lang="ar">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-93DHZVVYQW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-93DHZVVYQW");
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Radio Comunitaria la Plaza</title>

    <meta name="author" content="Jeremías Oviedo" />
    <meta name="copyright" content="copyright Radio Comunitaria la Plaza" />
    <meta name="description" content="Somos una Radio Comunitaria desde San Francisco del Chañar, Cordoba. Noticias locales,entretenimiento y buena musica." />
    <meta name="keywords" content="Radio Comunitaria la Plaza 91.5, San Francisco del Chañar, Chañar, Radio, Radio Comunitaria, Radio Comunitaria la Plaza, FARCO, ONG, Comunidad, Un lugar para todos, Mario aventuroso, Radio FM" />
    <meta name="robots" content="index, follow" />
    <!--para que la pagina se recargue 
	<meta  http-equiv="refresh"  content="10">
-->
    <link rel="stylesheet" type="text/css" href="./resources/css/style.css" />

    <!--FAVICON-->
    <link rel="icon" href="./favicon.ico">


    <script src="https://kit.fontawesome.com/4f535f04c7.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include('./resources/views/layouts/header.php');
    ?>

    <!--Fondo-->
    <section class="fondo__conteiner">
        <div class="fondo">
            <h1 class="titulo">COMUNITARIA LA PLAZA</h1>
            <h4 class="eslogan">UN LUGAR PARA TODOS</h4>
            <div class="fondo__img">
                <img src="./resources/assets/img/laplaza.webp" alt="Logo" title="Logo de radio" />
            </div>
            <!--REPRODUCTOR DE AUDIO-->
            <div class="audio-conteiner">
                <audio class="audio" autoplay controls loop>
                    <source src="http://freeuk30.listen2myradio.com:4865/;" type="audio/mp3" />
                    <source src="http://freeuk30.listen2myradio.com:4865/;" type="audio/AAC" />
                </audio>
            </div>
            <h3 class="sms">Mandanos un Mensaje a nuestro WhatsApp</h3>
            <a href="https://wa.me/+543522408620" target="_blank" class="fa-brands fa-whatsapp" title="Ir a WhatsApp" style="color: #00e676; text-decoration: none"></a>
        </div>
    </section>
    <main>
        <?php
        include('./resources/views/layouts/publicidades.php');
        ?>
        <div id="main">
            <?php
            include('./resources/views/layouts/noticias.php');
            ?>
            <div class="conteiner">
                <button id="verMas">Ver más</button>
            </div>
            <script src="./resources/js/fuction.js"></script>
        </div>
        <?php
        include('./resources/views/layouts/publicidades2.php');
        ?>
    </main>

    <?php
    include('./resources/views/layouts/footer.php');
    ?>


</body>

</html>