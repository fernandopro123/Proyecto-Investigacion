<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Imagen</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
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
        .container {
            display: flex;
            align-items: center;
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background: rgba(255, 255, 255, 0.5); 
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top:150px;
        }
        .image {
            flex: 1;
            margin-right: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        .info {
            flex: 2;
            text-align: left;
        }
        h1 {
            font-size: 36px;
            margin: 0;
            color: #333;
        }
        p {
            font-size: 24px;
            margin: 10px 0;
            color: #555; 
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
<body>
    <div class="container">
        <div class="image">
            <img src="https://m.media-amazon.com/images/I/61hOoghkbRL._AC_SL1500_.jpg" alt="audifonos">
        </div>
        <div class="info">
            <h1><?php echo "Audifonos"; ?></h1>
            <p><?php echo "Precio: $799"; ?></p>
            <p><?php echo "Procesador: Intel i7"; ?></p>
            <p><?php echo "RAM: 16 GB"; ?></p>
            <p><?php echo "Almacenamiento: 512 GB SSD"; ?></p>
            <p><?php echo "Color: Gris Espacial"; ?></p>
        </div>
    </div>
     <video muted autoplay loop>
        <source src="img/fondo.mp4" type="video/mp4">
    </video>
    <div class="contenedor-transparente">
        <img src="img/logo.png" alt="Logo" style="max-width: 150px;"> 
    </div>
</body>
</html>
