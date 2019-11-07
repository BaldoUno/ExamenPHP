
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangulo|Calculadora</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<!--
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">Rectangulo</h1>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="rectangulo.php" class="menu__link  menu__link--select">Cal.Rectangulo</a></li>
                <li class="menu__item"><a href="circulo.php" class="menu__link">Cal.circulo</a></li>
            </ul>
        </div>
    </nav>
    
    <section class="banner">
        <img src="img/cal.jpg" alt="" class="banner__img">   
    </section>-->

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Calcular Area de un Rectangulo</h2>
            </div>
            <form  method="post" class="form-register">
                        <div class="contenedor-inputs">
                            <input type="text" name="base" placeholder="Ingrese la base" class="input-100" required >
                            <input type="text" name="altura" placeholder="Ingrese la altura" class="input-100" required>
                            <?php 
	                            echo ($resultado = $_POST ["base"] * $_POST ["altura"]);
                                echo "El area: ".$resultado.'<br>';    
                            ?>
                            <button>calcular</button>
                        </div>
            </form>
        </section>
    </main>
    <footer>
        <div class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Por qué visitarnos?</h2>
                    <p class="column__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita,
                        amet aperiam. Consequuntur suscipit officia dolore quasi modi placeat doloremque esse,
                        beatae nulla, alias quis deserunt cupiditate magnam cum facere recusandae!
                    </p>
                </div>
                <p class="copy">2019 Unach.mx | Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>