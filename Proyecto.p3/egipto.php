<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Egipto</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        img.imagen {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1; /* Imagen de fondo */
            transform: translate(-50%, -50%);
            filter: brightness(50%);
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 80px;
            margin-top: 100px; 
        }
        .contenedor-platon-info {
            position: absolute;
            top: 250px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            display: flex;
            align-items: center;  
            justify-content: center;
            gap: 20px;
        }

        .platon {
            height: 300px; 
            width: 300px; 
            border-radius: 50%; 
            object-fit: cover; 
        }

        .info {
            font-size: 16px;
            color: white;
            text-align: justify;
            max-width: 600px; 
        }
        .Boton {
            margin-top: auto;
            text-align: center;
            padding: 20px;
        }

        button {
            background-color: white;
            border: 2px solid #d1a100;
            color: #d1a100;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #d1a100; 
            color: white;
        }

        button:active {
            background-color:aqua; 
            transform: scale(0.95);
        }

        .Boton {
            margin-top: auto; 
        }

    </style>
</head>
<body>
<script defer src="https://app.embed.im/snow.js"></script>

    <img src="img/egipto.jpg" alt="Grecia" class="imagen">
    <div class="contenedor-platon-info">
        <img src="img/imgegipto.jfif" alt="Platón" class="platon">

        <div class="info">
            En el Antiguo Egipto, la enseñanza era un proceso muy estructurado y relacionado con la memorización y la transmisión de conocimientos religiosos. El principal objetivo de la educación era formar escribas competentes que pudieran manejar la escritura jeroglífica y participar en las funciones administrativas del Estado y las instituciones religiosas. La precisión, la disciplina y la repetición eran esenciales en este proceso de formación, lo que resultaba en una educación rigurosa que aseguraba la preservación del orden social y religioso del país
        </div>
    </div>


    <h1>Egipto</h1>

    <div class="Boton">
        <a href="AMenuMenaEdgar.php" style="text-decoration: none;">
            <button>Inicio</button>
        </a>
    </div>
</body>
</html>
