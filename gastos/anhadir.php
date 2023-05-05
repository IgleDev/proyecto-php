<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/anhadir.css">
    <title>Añadir Gastos</title>
</head>
<body>
    <p>Ha escogido la opción <span>Añadir Gasto</span></p>
    <form action="add.php" method="post">
        <p>Añadir Nuevo Gasto</p>
        <label for="">Importe</label>
        <input type="number" name="import" id="" placeholder="Importe">
        <label for="">Descripción</label>
        <input type="text" name="desc" id="" placeholder="Descripción">
        <label for="">Categoria</label>
        <input type="text" name="cat" id="" placeholder="Categoria">
        <label for="">Fecha</label>
        <input type="text" name="date" id=""  value="<?= date('d') . '/' . date('m') . '/' . date('Y')?>" disabled>
        <button>Guardar</button>
    </form>
</body>
</html>