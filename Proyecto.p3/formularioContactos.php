<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <style type="text/css">
        body {
            background: #314a9c;
            color: black;
            font-size: 23px;
            font-family: cursive;
            margin: 10px;
        }

        .mensaje {
            width: 100%;
            height: 100px;
        }

        .contenido {
            padding: 20px;
            background: white;
            border-radius: 50px;
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.5);
            margin-left: 450px;
            text-align: center;
            margin-top: 100px;
            position: relative; /* Agregado para que el z-index funcione */
            z-index: 10; /* Asegura que el contenido esté por encima */
        }

        img {
            max-width: 40%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h1 {
            color: white;
            text-align: center;
            position: relative; /* Agregado para que el z-index funcione */
            z-index: 10; /* Asegura que el título esté por encima */
        }

        .Boton {
            margin-top: 20px;
        }

        button {
            background-color: #f4d03f;
            border: none;
            color: black;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #00029c;
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }

        video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1; /* Asegura que el video esté detrás */
            transform: translate(-50%, -50%);
            filter: brightness(80%);
        }

        .contenedor-transparente {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            text-align: justify;
            line-height: 200px;
            z-index: 5; /* Asegura que el logo esté detrás del texto */
        }
    </style>
</head>
<body>
    <h1>Contáctenos Para Mas Educacion</h1>
    <form>
        <div class="contenido">
            <label>Nombre</label><br>
            <input type="text" name="txtnombre" placeholder="Nombre completo"><br>

            <label><br>Correo electrónico</label><br>
            <input type="email" name="txtcorreo" placeholder="Ejemplo: Enseñansas@gmail.com"><br>

            <label><br>Teléfono</label><br>
            <input type="tel" name="txttelefono" placeholder="123-456-7890" pattern="\d{3}-\d{3}-\d{4}" maxlength="12"><br>

            <label class="large-label"><br>Mensaje</label><br><br>
            <textarea name="txtmensaje" class="mensaje" placeholder="Introduce tu mensaje"></textarea><br>

            <div class="Boton">
                <button type="submit">Enviar</button>
            </div>
        </div>
    </form>

    <video muted autoplay loop>
        <source src="img/fond.mp4" type="video/mp4">
    </video>

    <div class="contenedor-transparente">
        <img src="img/logo.png" alt="Logotipo" style="max-width: 150px;">
    </div>

</body>
</html>
