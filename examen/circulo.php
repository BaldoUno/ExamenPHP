
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangulo|Circulo</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Calcular Area de un Rectangulo</h2>
            </div>
            <form  method="post" class="form-register">
                        <div class="contenedor-inputs">
                            <input type="text" name="radio" placeholder="Ingrese el Radio" class="input-100" required >
                            <?php 
                                $pi=3.1416;
                                $radio=$_POST ['radio'];
                                $radio=$radio^2;
                                $resultado = $radio* $pi);
	                            /*echo ($resultado = $radio* $pi);*/
                                echo "El Area del circulo es: ".$resultado.'<br>';    
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