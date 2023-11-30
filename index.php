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
    <meta name="description" content="Somos una Radio Comunitaria desde San Francisco del Chañar, Cordoba, Argentina." />
    <meta name="keywords" content="Radio Comunitaria la Plaza 91.5, radio comunitaria la plaza, radio Comunitaria, comunitaria la plaza, comunitaria, la plaza, 91.5, San francisco del chañar, chañar, radio, FARCO, ONG, Comunidad, un lugar para todos, Mario aventuroso, radio FM, fm" />
    <meta name="robots" content="index, follow" />
    <!--para que la pagina se recargue 
	<meta  http-equiv="refresh"  content="10">
-->
    <link rel="stylesheet" type="text/css" href="./src/css/style.css" />
    <!--FAVICON-->
    <link rel="icon" href="./favicon.ico">
    <script src="https://kit.fontawesome.com/4f535f04c7.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include('./src/views/layouts/header.php');
    ?>
    <?php
    include('./src/views/layouts/reproductor.php');
    ?>
    <main>
        <?php
        include('./src/views/layouts/publicidades.php');
        ?>
        <div id="main">
            <?php
            include('./src/views/layouts/noticias.php');
            ?>
            <div class="conteiner">
                <button id="verMas">Ver más</button>
            </div>
            <script src="./src/js/fuction.js"></script>
        </div>
        <?php
        include('./src/views/layouts/publicidades2.php');
        ?>
    </main>

    <?php
    include('./src/views/layouts/footer.php');
    ?>


    <script src="./src/js/fuction.js"></script>
</body>

</html>