<?php 
    require 'gastos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <title>Menu</title>
</head>
<body>
    <div class="padre">
        <h1>Bienvenido a mi contabilidad doméstica. Actualmente hay <?= count($gastos) ?> anotaciones.</h1>
        <div class="buttons">
            <a href="buscar.php" name="Buscar"><button>Buscar Gastos</button></a>
            <a href="mostrar.php"><button>Mostrar Gastos</button></a>
            <a href="anhadir.php"><button>Añadir Gastos</button></a>
        </div>
    </div>
</body>
</html>