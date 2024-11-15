<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a C-Pher Tecnologías</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color:white;
            margin: 0;
            padding: 20px;
        }
    
        main {
            margin-top: 150px;
            background: rgba(0, 0, 0, 0.2); 
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            font-size: 24px;
            text-align: center;
        }
        p {
            line-height: 1.6;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: white;
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
<body>
    <header>
        <h1>Bienvenido a C-Pher Tecnologías</h1>
    </header>
    <main>
        <?php  
            echo "<p>Nuestra empresa, C-Pher Tecnologías, está dedicada a la venta de electrónica de la más alta calidad. Ofrecemos una amplia variedad de productos que van desde televisores y computadoras hasta smartphones y electrodomésticos.</p>";
            echo "<p>En C-Pher Tecnologías, nos comprometemos a brindar a nuestros clientes los mejores precios y un servicio excepcional. Nuestra misión es asegurar que cada compra sea una experiencia satisfactoria.</p>";
            echo "<p>Explora nuestras ofertas y descubre por qué somos líderes en el mercado de la electrónica.</p>";
        ?>
    </main>
    <footer>
        <p>&copy; 2024 C-PHER TECNOLOGIAS. Todos los derechos reservados.</p>
    </footer>
    <video muted autoplay loop>
        <source src="img/fondo.mp4" type="video/mp4">
    </video>
    <div class="contenedor-transparente">
        <img src="img/logo.png" alt="Logo" style="max-width: 200px;">
    </div>
</body>
</html>
