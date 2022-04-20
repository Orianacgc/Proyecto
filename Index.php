<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debe iniciar sesion");
                window.location = "indexlogin.php";
            </script>
        ';
        session_destroy();
        die();
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL GRECO</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slider.css">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>
<body>
    <header>

   
    
        <div class="contenedor">
        
            <img id="logo" src="Imagenes/logob.PNG" >
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="">Inicio</a>
                <a href="">Marcos</a>
                <a href="">Acerca de</a>
                <a href="">Contacto</a>
            </nav>
            <div align="right">
        <a class="cerrar-sesion" href="php/cerrar_sesion.php">CERRAR SESION</a>
        </div>
        </div>
    </header>
    <div class="slider">
        <ul>
            <li><img src="Imagenes/slider1.png" alt=""></li>
            <li><img src="Imagenes/slider2.png" alt=""></li>
            <li><img src="Imagenes/slider3.png" alt=""></li>
            <li><img src="Imagenes/slider4.png" alt=""></li>
        </ul>
    </div>
    <div class="page-nav">
      
        <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button>
    </div>
    <div class="page-content">
        <div class="product-container">
            <h3>Portaretrato con medidas</h3>
            <h2>15x20 cm</h2>
            <img src="Imagenes/product-1.jpg" />
            <h1>$50</h1>
            <button class="button-add" onclick="add('product-1', 50)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        <div class="product-container">
            <h3>Marco para diplomas</h3>
            <h2>22x28 cm</h2>
            <img src="Imagenes/diploma.jpg" />
            <h1>$120</h1>
            <button class="button-add" onclick="add('product-2', 120)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        <div class="product-container">
            <h3>Marcos para titulos Universitarios</h3>
            <h2>30x40 cm</h2>
            <img src="Imagenes/titulo.png" />
            <h1>$400</h1>
            <button class="button-add" onclick="add('product-3', 400)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        <div class="product-container">
            <h3>Marco para fotografia</h3>
            <h2>28x35 cm</h2>
            <img src="Imagenes/product-4.jpg" />
            <h1>$400</h1>
            <button class="button-add" onclick="add('product-4', 200)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        <div class="product-container">
        <h3>Marco para fotografia</h3>
            <h2>40x50 cm</h2>
            <img src="Imagenes/titulo.png" />
            <h1>$10</h1>
            <button class="button-add" onclick="add('product-5', 10)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        <div class="product-container">
            <h3>Marco para poster</h3>
            <h2>56x86 cm</h2>
            <img src="Imagenes/product-6.jpg" />
            <h1>$650</h1>
            <button class="button-add" onclick="add('product-6', 650)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>

        
        <div class="product-container">
            <h3>Marco para poster</h3>
            <h2>56x86 cm</h2>
            <img src="Imagenes/product-6.jpg" />
            <h1>$650</h1>
            <button class="button-add" onclick="add('product-7', 650)">Comprar</button>
            <button class="detalles">Ver detalles</button>
        </div>
    </div>
    
    
</body>
</html>