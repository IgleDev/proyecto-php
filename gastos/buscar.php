<?php require 'gastos.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/buscar.css">
    <title>Buscar Gasto</title>
</head>
<body>
    <p>Ha escogido la opción <span>Buscar</span></p>
    <form action="buscar.php" method="post">
        <label for="">Introduce la descripción</label>
        <input type="text" name="descSearch" id="" placeholder="Introduce la descripción del gasto">
        <button>Buscar</button>
    </form>
    <div>
        <h1>Gasto a Buscar:</h1>
        <div class="tabla">
            <table>
                <?php 
                    if($_POST){
                        echo '<tr>';
                            echo '<th>'. 'Importe'. '</th>';
                            echo '<th>'. 'Descripción' . '</th>';
                            echo '<th>'. 'Categoria' . '</th>';
                            echo '<th>'. 'Fecha' . '</th>';
                        echo '</tr>';
                        foreach($gastos as $g){
                            if($g->des === $_POST['descSearch']){
                                echo '<tr>';
                                    echo '<td>'. $g->import . '$' . '</td>';
                                    echo '<td>'. $g->des . '</td>';
                                    echo '<td>'. $g->cat . '</td>';
                                    echo '<td>'. $g->date . '</td>';
                                echo '</tr>';
                            }
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>