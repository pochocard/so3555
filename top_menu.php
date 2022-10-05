<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SO3555 - Aguila Inmobiliaria</title>
        <meta name="description" content="Grupo Aguila">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Facebook Code -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
          _fbq.push(['addPixelId', '928054473935965']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=928054473935965&amp;ev=PixelInitialized" /></noscript>
        <!-- End Facebook Code -->
    </head>
    <body>

        <!-- MENU MOBILE -->

        <div class="menu_mobile">
            <div class="logo_mobile hide-for-large hide-for-xlarge-up">
                <img src="img/logotipo_so3555.png">
            </div>
            <nav class="top-bar hide-for-large hide-for-xlarge-up" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1><a href="index.php">HOME</a></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
              </ul>

              <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="left">
                  <li class="has-dropdown">
                  </li>
                </ul>

                <!-- Left Nav Section -->
                <ul class="right">
                    <li><a href="so3555.php">SO3555</a></li>
                    <li><a href="departamentos.php">Departamentos</a></li>
                    <li><a href="cotizar.php">Cotice aquí</a></li>
                    <li><a href="aguila_inmobiliaria.php">Aguila Inmobiliaria</a></li>
                </ul>
              </section>
            </nav>
        </div>

        <!-- TOP -->
        <div class="top hide-for-small hide-for-medium">

            <!-- MENU -->

            <div class="top_styles">
                <div class="logo">
                    <a href="index.php"><img src="img/logotipo.png"></a>
                </div>
                <div class="logo_so3555">
                    <h1>SO3555</h1>
                </div>

                <!-- DESKTOP / MENU -->

                <div class="menu right">
                    <nav>
                        <ul>
                            <li><a href="index.php" id="<?php 
                            if(strstr($_SERVER['REQUEST_URI'], 'index.php')){
                            echo 'activo';
                            }
                            ?>">Inicio</a></li>
                            <li><a href="so3555.php" id="<?php 
                            if(strstr($_SERVER['REQUEST_URI'], 'so3555.php')){
                            echo 'activo';
                            }
                            ?>">SO3555</a></li>
                            <li><a href="departamentos.php" id="<?php 
                            if(strstr($_SERVER['REQUEST_URI'], 'departamentos.php')){
                            echo 'activo';
                            }
                            ?>">Departamentos</a></li>
                            <li><a href="cotizar.php" id="<?php 
                            if(strstr($_SERVER['REQUEST_URI'], 'cotizar.php')){
                            echo 'activo';
                            }
                            ?>">Cotice aquí</a></li>
                            <li><a href="aguila_inmobiliaria.php" id="<?php 
                            if(strstr($_SERVER['REQUEST_URI'], 'aguila_inmobiliaria.php')){
                            echo 'activo';
                            }
                            ?>">Aguila Inmobiliaria</a></li>
                            <li><a href="https://www.facebook.com/pages/Aguila-Inmobiliaria/885453004832561" target="_blank" class="icon-facebook-with-circle" style="color:#43609c; font-size:20px"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCbzq44s6B1pHkpFIe-PHSnw" target="_blank" class="icon-youtube-with-circle" style="color:#d02d26; font-size:20px"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- BARRAS -->

            <div class="barras_fondo">
                <div class="barra_blanca"></div>
                <div class="barra_amarilla"></div>
                <div class="barra_blanca"></div>
                <div class="barra_amarilla"></div>
            </div>

        </div>

        <!-- BARRAS ESPACIO -->
        <div class="espacio_top hide-for-small hide-for-medium"></div>
