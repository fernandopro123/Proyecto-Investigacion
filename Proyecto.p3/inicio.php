<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

    <style>
        #wowslider-container1 {
            width: 600px; 
            height: 300px; 
            margin: 150px auto; /* Aumentado el margen superior para mover el slider más abajo */
            position: relative; 
        }

        .ws_images img {
            width: 100%; 
            height: auto; 
        }

        .ws_bullets {
            font-size: 14px; 
            text-align: center; 
        }

        .ws_bullets a span img {
            width: 40px; 
            height: auto;
        }

        .ws_shadow {
            display: none; 
        }

        video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            filter: brightness(50%); 
        }

        .contenedor-transparente {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200px; 
            background: rgba(0, 0, 0, 0.5); 
            color: white;
            text-align: justify;
            line-height: 200px; 
            z-index: 5;
        }
    </style>
</head>
<body style="background-color:#d7d7d7; margin:auto; text-align: center;">

    <!-- Incluir el código del slider -->
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <li><img src="data1/images/accesorios.jpg" alt="accesorios" title="accesorios" id="wows1_0" /></li>
                <li><img src="data1/images/audifonos.jpg" alt="audifonos" title="audifonos" id="wows1_1" /></li>
                <li><img src="data1/images/celulares.jpg" alt="celulares" title="celulares" id="wows1_2" /></li>
                <li><img src="data1/images/computadoras.jpg" alt="computadoras" title="computadoras" id="wows1_3" /></li>
                <li><a href="http://wowslider.net"><img src="data1/images/logo.png" alt="html slideshow" title="logo" id="wows1_4" /></a></li>
                <li><img src="data1/images/silla.jpg" alt="silla" title="silla" id="wows1_5" /></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="accesorios"><span><img src="data1/tooltips/accesorios.jpg" alt="accesorios"/>1</span></a>
                <a href="#" title="audifonos"><span><img src="data1/tooltips/audifonos.jpg" alt="audifonos"/>2</span></a>
                <a href="#" title="celulares"><span><img src="data1/tooltips/celulares.jpg" alt="celulares"/>3</span></a>
                <a href="#" title="computadoras"><span><img src="data1/tooltips/computadoras.jpg" alt="computadoras"/>4</span></a>
                <a href="#" title="logo"><span><img src="data1/tooltips/logo.png" alt="logo"/>5</span></a>
                <a href="#" title="silla"><span><img src="data1/tooltips/silla.jpg" alt="silla"/>6</span></a>
            </div>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%">
            <a href="http://wowslider.net">html5 slider</a> by WOWSlider.com v9.0
        </div>
        <div class="ws_shadow"></div>
    </div>  
    
    <!-- Incluir los archivos JS para el funcionamiento del slider -->
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    
    <video muted autoplay loop>
        <source src="img/fondo.mp4" type="video/mp4">
    </video>
    <div class="contenedor-transparente">
        <img src="img/logo.png" alt="Logo" style="max-width: 150px;"> 
    </div>
</body>
</html>
