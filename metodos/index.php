<?php
    session_start();
    $eleccion = strtolower($_POST['alien']);
    if ($_POST['listar'] == "Sume"){
        if(isset($_SESSION['s1'])){
            array_push($_SESSION['s1'],$eleccion);
        }else{
            $_SESSION['s1'] = array($eleccion);
        };
    }else if($_POST['listar'] == "non"){
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
    <title>Especies</title>
</head>
<body>
    <form method="POST">
        <h4>Digite el nombre de la especie del alien: </h4>
        <input type="text" name="alien" placeholder="Digite el nombre de la especie del alien">
        <button name="listar" value="Sume">Sumar</button>
        <button name="listar" value="non">Eliminar todos los aliens</button>
    </form>
    <form action="Punto9.php" method="POST">
        <button type="submit">Revisar</button>
    </form>
</body>
</html>