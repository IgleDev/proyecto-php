<?php require 'gastos.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mostrar.css">
    <title>Gastos</title>
</head>
<body>
<p>Ha escogido la opción <span>Mostrar</span></p>
    <div>
        <h1>Todos los Gastos Realizados</h1>
        <table>
            <tr>
                <th>Importe</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Fecha</th>
            </tr>
            <?php
                foreach($gastos as $g){
                    echo '<tr>';
                        echo '<td>'. $g->import . '$' . '</td>';
                        echo '<td>'. $g->des . '</td>';
                        echo '<td>'. $g->cat . '</td>';
                        echo '<td>'. $g->date . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>

</body>
</html>