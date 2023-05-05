<?php 
    require 'conectar.php';

    $query = "SELECT * FROM gastos ORDER BY date DESC";
    $typeGast = $mysqli -> query($query) or die($mysqli->error);
    $gastos = array();
    
    while($row = $typeGast->fetch_object()){
        $gastos[] = $row;
    }

    $typeGast -> free();
?>