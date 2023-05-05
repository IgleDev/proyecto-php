<?php 
    require 'conectar.php';

    $import = $mysqli -> escape_string(strip_tags($_POST['import']));
    $desc = $mysqli -> escape_string(strip_tags($_POST['desc']));
    $cat = $mysqli -> escape_string(strip_tags($_POST['cat']));
    $date = $mysqli -> escape_string(strip_tags($_POST['date']));

    $date= date('Y-m-d', time());
    $query = "INSERT INTO gastos (import,des,cat,date) VALUES ($import, '$desc', '$cat', '$date')";
    $mysqli -> query($query) or die ($mysqli -> error);

    header('Location: index.php');
?>