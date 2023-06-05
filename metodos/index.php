<?php
    session_start();
    function agragaPlanetas($texto,$campo,$osol){
        $eleccion = strtolower($_POST[$osol]);
        if ($_POST[$campo] == "Sume"){
            if(isset($_SESSION[$texto])){
                array_push($_SESSION[$texto],$eleccion);
            }else{
                $_SESSION[$texto] = array($eleccion);
            };
        }else if($_POST[$campo] == "non"){
            $_SESSION[$texto] = null;
        };
    };
    if($_POST['listar1'] == "Sume"){
        agragaPlanetas('s1','listar1','alien1');
    }else if($_POST['listar1'] == "non"){
        agragaPlanetas('s1','listar1','alien1');
    };
    if($_POST['listar2'] == "Sume"){
        agragaPlanetas('s2','listar2','alien2');
    }else if($_POST['listar2'] == "non"){
        agragaPlanetas('s2','listar2','alien2');
    };
    var_dump($_SESSION['s1']);
    var_dump($_SESSION['s2']);
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
        <h4>Digite planetas para calcular los comunes en ambos sistemas: </h4>
        <input type="text" name="alien1" placeholder="Agregue un planeta al sistema solar #1">
        <button name="listar1" value="Sume">Sumar</button>
        <button name="listar1" value="non">Eliminar todos los planetas del primer sistema solar</button><br>
        <input type="text" name="alien2" placeholder="Agregue un planeta al sistema solar #2">
        <button name="listar2" value="Sume">Sumar</button>
        <button name="listar2" value="non">Eliminar todos los planetas del segundo sistema solar</button>
    </form>
    <form action="Punto11.php" method="POST">
        <button type="submit">Revisar</button>
    </form>
</body>
</html>