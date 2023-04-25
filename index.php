<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>CARTA DEL RESTAURANTE</title>
</head>
<body>
    <h1>RESTAURANTE VENTURA</h1>
    
    <br>

    <div class="column-3 columns">

        <!-- Enlace al XML de entrantes -->
        <div class="menu-restaurante">
        <u><h2>ENTRANTES</h2></u>
            <div class="borde-entrantes">
                <?php
                    if (file_exists('./comida.xml')) {
                        $platos = simplexml_load_file('./comida.xml');
                        foreach ($platos->entrantes as $entrantes) {
                            echo "<strong>" . $entrantes['nombre'] . "</strong><br>";
                            echo "Precio: €" . $entrantes['precio'] . "<br>";
                            echo "Descripción: " . $entrantes['descripcion'] . "<br>";
                            echo "Calorías: " . $entrantes['kcal'] . "<br>";
                            echo "Ingredientes:<br>";
                            foreach ($entrantes->ingrediente as $ingrediente) {
                                echo "• " . $ingrediente['nombre'] . "<br>";
                            }
                            echo "<br>";
                        }
                    } else {
                        exit('El restaurante está fuera de servicio :(');
                    }
                ?>
            </div>
        </div>

        <!-- Enlace al XML de los bocadillos -->
        <div class="menu-restaurante">
        <u><h2>BOCADILLOS</h2></u>
            <div class="borde-bocadillos">
                <?php
                    if (file_exists('./comida.xml')) {
                        $platos = simplexml_load_file('./comida.xml');
                        foreach ($platos->bocadillos as $bocadillos) {
                            echo "<strong>" . $bocadillos['nombre'] . "</strong><br>";
                            echo "Precio: €" . $bocadillos['precio'] . "<br>";
                            echo "Descripción: " . $bocadillos['descripcion'] . "<br>";
                            echo "Calorías: " . $bocadillos['kcal'] . "<br>";
                            echo "Ingredientes:<br>";
                            foreach ($bocadillos->ingrediente as $ingrediente) {
                                echo "• " . $ingrediente['nombre'] . "<br>";
                            }
                            echo "<br>";
                        }
                    } else {
                        exit('El restaurante está fuera de servicio :(');
                    }
                ?>
            </div>
        </div>

        <!-- Enlace al XML de los postres -->
        <div class="menu-restaurante">
        <u><h2>POSTRES</h2></u>
            <div class="borde-postres">      
                <?php
                    if (file_exists('./comida.xml')) {
                        $platos = simplexml_load_file('./comida.xml');
                        foreach ($platos->postres as $postres) {
                            echo "<strong>" . $postres['nombre'] . "</strong><br>";
                            echo "Precio: €" . $postres['precio'] . "<br>";
                            echo "Descripción: " . $postres['descripcion'] . "<br>";
                            echo "Calorías: " . $postres['kcal'] . "<br>";
                            echo "Ingredientes:<br>";
                            foreach ($postres->ingrediente as $ingrediente) {
                                echo "• " . $ingrediente['nombre'] . "<br>";
                            }
                            echo "<br>";
                        }
                    } else {
                        exit('El restaurante está fuera de servicio :(');
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>



<!-- underline precio desc calor ingred -->