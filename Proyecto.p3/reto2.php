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
        .container {
            display: flex;
            align-items: center;
            max-width: 800px;
            width: 100%;
            padding: 20px; 
            background: white; 
            border-radius: 10px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
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
    </style>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="https://m.media-amazon.com/images/I/61hOoghkbRL._AC_SL1500_.jpg" alt="Computadora">
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
</body>
</html>
