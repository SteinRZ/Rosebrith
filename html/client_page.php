<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosebrith - Perfil</title>
    <link rel="icon" href="../image/main_icon.png">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style_client_page.css">
</head>
<body>
    <!--------------------NAVBAR--------------------->
    <header class="navbar">
        <div class="navbar__icon">
            <a href="main.php"><img src="../image/main_icon.png" alt="Rosebrith" title="Inicio"></a>
        </div>
        <nav>
           <ul class="nav__links">
                <li><a href="services.php">Servicios</a></li>
                <li><a href="contact_us.php">Contactanos</a></li>
                <li><a href="client_page.php">Perfil</a></li>
           </ul>
        </nav>
        <a class="navbar__button" href="login.php"><button>Iniciar sesion</button></a>
    </header>
    
    <!--------------------BANNER--------------------->
    <div class="banner"></div>

    <!--------------------CONTENIDO--------------------->
    <div class="content">
        <div class="content__title">
            <h2>Reservas anteriores realizadas</h2>
        </div>
        <div class="content__text">
            <p>Tu historial de reservas</p>
        </div>
    </div>

    <!--------------------TABLA DE RESERVACIONES--------------------->  
    <div class="table">
        <?php include ("..\php\historial_reservacion_cliente.php"); ?>
    </div>

    <!--------------------BOTON DE RESERVACION--------------------->
    <div class="reservation">
        <a href="reserve.php"><button class="reservation__button">Crear reservacion</button></a>
    </div>

</body>
</html>