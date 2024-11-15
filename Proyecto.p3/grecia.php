<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antigua Grecia</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Fondo de la imagen de Grecia */
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
            margin-top: 100px; /* Espacio entre la imagen de fondo y el título */
        }

        /* Contenedor para Platón y el texto */
        .contenedor-platon-info {
            position: absolute;
            top: 250px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            display: flex;
            align-items: center;  /* Centra verticalmente los elementos dentro del contenedor */
            justify-content: center;
            gap: 20px; /* Espacio entre la imagen y el texto */
        }

        /* Imagen de Platón (más grande y encima de otras capas) */
        .platon {
            height: 300px; /* Tamaño de la imagen */
            width: 300px; /* Mantiene la proporción */
            border-radius: 50%; /* Hace la imagen circular */
            object-fit: cover; /* Ajusta la imagen sin distorsionarla */
        }

        /* Estilo del texto */
        .info {
            font-size: 16px;
            color: white;
            text-align: justify;
            max-width: 600px; /* Limita el ancho del texto */
        }

        /* Estilo para el botón */
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
            background-color: #d1a100; /* Marrón claro */
            color: white;
        }

        button:active {
            background-color: #c49b00; /* Color marrón claro al hacer clic */
            transform: scale(0.95);
        }

        /* Centrar el botón en la parte inferior */
        .Boton {
            margin-top: auto; /* Empuja el botón hacia abajo */
        }

    </style>
</head>
<body>
    <!-- Fondo de Grecia -->
    <img src="img/grecia.jpg" alt="Grecia" class="imagen">

    <!-- Contenedor con Platón y el texto al lado -->
    <div class="contenedor-platon-info">
        <!-- Imagen de Platón -->
        <img src="img/platon.jpg" alt="Platón" class="platon">

        <!-- Texto -->
        <div class="info">
            En la Antigua Grecia, la educación se basaba en métodos como el diálogo socrático, la mayéutica y la enseñanza por medio de debates. Filósofos como Sócrates, Platón y Aristóteles promovían el pensamiento crítico y la reflexión.<br>
            El método socrático o debate socrático es un método de dialéctica o demostración lógica para la indagación o búsqueda de nuevas ideas, conceptos o prismas subyacentes en la información. Este método fue aplicado ampliamente para los escritos orales de los conceptos morales clave. Fue descrito por Platón en los diálogos Socráticos.
        </div>
    </div>

    <!-- Título -->
    <h1>Antigua Grecia</h1>

    <!-- Botón con hipervínculo -->
    <div class="Boton">
        <a href="AMenuMenaEdgar.php" style="text-decoration: none;">
            <button>Inicio</button>
        </a>
    </div>
</body>
</html>
