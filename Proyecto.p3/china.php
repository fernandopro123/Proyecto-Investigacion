<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>China Antigua</title>
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
            z-index: -1; 
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
            align-items: center;  /
            justify-content: center;
            gap: 20px; 
        }

    
        .platon {
            height: 300px;
            width: 300px; 
            border-radius: 50%; 
            object-fit: cover; 
        }

        /* Estilo del texto */
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
            background-color: #c49b00; 
            transform: scale(0.95);
        }
        .Boton {
            margin-top: auto; 
        }

    </style>
</head>
<body>

    <img src="img/china.jpg" alt="Grecia" class="imagen">


    <div class="contenedor-platon-info">

        <img src="img/metodochino.jfif" alt="Platón" class="platon">

        <!-- Texto -->
        <div class="info">
            La educación en la Antigua China, bajo la influencia del Confucianismo, se centraba no solo en la formación intelectual, sino también en la moralidad y la virtud. La memorización de textos clásicos y el respeto a la autoridad del maestro eran pilares fundamentales en este sistema educativo, que buscaba la creación de ciudadanos éticos y funcionarios competentes. La formación de los futuros gobernantes y funcionarios imperiales se basaba en la comprensión profunda de los principios confucianos, garantizando que quienes administraran el imperio no solo tuvieran conocimientos académicos, sino también una fuerte base moral.
        </div>
    </div>

    <!-- Título -->
    <h1>China</h1>

    <!-- Botón con hipervínculo -->
    <div class="Boton">
        <a href="AMenuMenaEdgar.php" style="text-decoration: none;">
            <button>Inicio</button>
        </a>
    </div>
</body>
</html>
