<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galería y Menú</title>
    <style>
        body  {
            margin: 10px;
            padding: 0;
            background: linear-gradient(to right, #ffffff, #fad7ff);
        }

        nav {
            width: 100%; 
            margin: 10px auto;
            text-align: center;
            position: relative; 
            z-index: 10; 
            font-size: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: inline-block; 
        }

        li {
            display: inline-block;
            margin-right: 15px;
            position: relative;
        }

        a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            padding: 10px;
        }

        .submenu {
            display: none;
            position: absolute;
            background: black;
            border-radius: 5px; 
            padding: 10px;
            top: 100%;
            left: 0;
            z-index: 1;
            min-width: 180px;
            opacity: 0; 
            visibility: hidden; 
            transition: opacity 0.3s ease, visibility 0.3s ease; 
        }

        li:hover .submenu {
            display: block;
            opacity: 1; 
            visibility: visible; 
        }

        .submenu li {
            padding: 8px;
            white-space: nowrap; 
        }

        .submenu li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .submenu li a:hover {
            background: #555; 
            color: #fff; 
            padding-left: 10px; 
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

        .galeria {
            display: flex;
            gap: 1rem;
            margin: 20px auto;
            width: 80%;
            height: 20rem; 
            margin-top: 250px;
        }

        .galeria > div {
            flex: 1;
            border-radius: 0.5rem;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
            transition: all .5s cubic-bezier(.25, .4, .45, 1.4);
            max-width: 100%; 
            height: 100%; 
            position: relative; 
        }

        .galeria > div:hover {
            flex: 1.5; 
            transform: scale(1.1);
        }


        .contenedor-pequeno {
            position: absolute;
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%); 
            background-color: rgba(0, 0, 0, 0.7); 
            padding: 10px 20px;
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            opacity: 0; 
            visibility: hidden; 
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

    
        .galeria > div:hover .contenedor-pequeno {
            opacity: 1;
            visibility: visible;
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

        h1 {
            margin-top:40px;
            color: white;
            text-align: center;
            position: relative;
            z-index: 10;
            font-size:60px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li>

            <li><a href="formularioContactos.php">Contacto</a></li>
        </ul>
        <li><a href="sesion.html">Iniciar Sesion</a></li>
    </nav>
    
    <h1>Metodos De Enseñansa Antiguos</h1>

    <div class="contenedor-transparente">
        <img src="img/niño.png" alt="Logo" style="max-width: 180px;">
    </div>

    <video muted autoplay loop>
        <source src="img/fondo2.mp4" type="video/mp4">
    </video>

    <div class="galeria">
        <div style="background-image: url(img/metodo1.webp);">
            <div class="contenedor-pequeno"><li><a href="grecia.php">La Antigua Grecia: El Pensamiento Crítico y el Diálogo Socrático</a></li></div>
        </div>
        <div style="background-image: url(img/metodo2.jfif);">
            <div class="contenedor-pequeno"><li><a href="egipto.php">El Antiguo Egipto: La Memorización y la Rigorosida</a></li></div>
        </div>
        <div style="background-image: url(img/metodo3.jfif);">
            <div class="contenedor-pequeno"><li><a href="china.php">La Antigua China: El Confucianismo y la Moralidad en la Enseñanzaa</a></li></div>
        </div>
        <div style="background-image: url(img/metodo4.jpg);">
            <div class="contenedor-pequeno"><li><a href="cbtis.php">La Influencia de los Métodos Antiguos en la Educación Moderna</a></li></div>
        </div>
    </div>
</body>
</html>