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
    <link rel="stylesheet" type="text/css" href="./src/css/style.css" />
    <!--FAVICON-->
    <link rel="icon" href="./favicon.ico">
    <script src="https://kit.fontawesome.com/4f535f04c7.js" crossorigin="anonymous"></script>

    <style>
        #video-container {
            background-color: #000;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #close-button {
            position: absolute;
            top: 7px;
            right: 10px;
            cursor: pointer;
            color: #e20002;
            font-size: 27px;
            font-weight: 600;
            z-index: 2;
        }

        #video {
            width: 100%;
            height: 100%;
        }

        #content-container {
            display: none;
            /* Ocultar contenido por defecto */
            z-index: 1;
        }


        @media screen and (min-width:320px) AND (max-width:767px) {
            #close-button {
                top: 42px;
                right: 10px;
            }
        }
    </style>
</head>

<body>

    <body>

        <?php
        $videoCookie = isset($_COOKIE['video_played']) ? $_COOKIE['video_played'] : 'false';

        if ($videoCookie !== 'true') {
        ?>
            <div id="video-container">
                <span id="close-button" onclick="cerrarVideo()">X</span>
                <video id="video" autoplay controls ontimeupdate="verificarTiempo()">
                    <source src="./src/assets/videos/luli-montes-coach.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
        <?php
        }
        ?>

        <?php
        include('./src/views/layouts/header.php');
        ?>
        <?php
        include('./src/views/layouts/reproductor.php');
        ?>
        <main id="content-container">
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
        <script>
            // Función para cerrar el video al alcanzar el minuto 0:33
            function verificarTiempo() {
                var video = document.getElementById("video");
                // Verifica si el tiempo actual del video es mayor o igual a 33 segundos
                if (video.currentTime >= 33) {
                    cerrarVideo();
                }
            }

            // Función para cerrar el video
            function cerrarVideo() {
                var videoContainer = document.getElementById("video-container");
                var contentContainer = document.getElementById("content-container");

                videoContainer.style.display = "none";
                contentContainer.style.display = "block";

                var video = document.getElementById("video");
                video.pause();
                video.currentTime = 0; // Reinicia la reproducción al principio

                // Configurar la cookie para indicar que el video ya se reprodujo
                document.cookie = "video_played=true; expires=Thu, 01 Jan 2022 00:00:00 UTC; path=/";
            }
        </script>
    </body>

</html>