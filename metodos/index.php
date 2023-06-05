<?php
    session_start();
    $eleccion = strtolower($_POST['alien1']);
    $gt = $_POST['planetas20'];
    if($_POST['listar1'] == "Sume"){
        if(isset($_SESSION['s1'][$gt])){
            array_push($_SESSION['s1'][$gt],$eleccion);
        }else{
            $_SESSION['s1'][$gt] = array();
            array_push($_SESSION['s1'][$gt],$eleccion);
        };
    }else if($_POST['listar1'] == "non"){
        $_SESSION['s1'] = null;
    };
    var_dump($_SESSION['s1']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Planetas</title>
</head>
<body>
    <form method="POST">
        <h4>Elija el planeta para agregarle los satelites deseados: </h4>
        <select name="planetas20">
            <option value="planeta1">Planeta 1</option>
            <option value="planeta2">Planeta 2</option>
            <option value="planeta3">Planeta 3</option>
            <option value="planeta4">Planeta 4</option>
            <option value="planeta5">Planeta 5</option>
        </select>
        <input type="text" name="alien1" placeholder="Agregue un satelite al planeta: ">
        <button name="listar1" value="Sume">Sumar</button>
        <button name="listar1" value="non">Eliminar todos los satelites de los planetas</button><br>
    </form>
    <form action="Punto12.php" method="POST">
        <button type="submit">Revisar</button>
    </form>
</body>
</html>