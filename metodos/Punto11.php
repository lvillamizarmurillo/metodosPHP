<?php
    session_start();
    $unico1 = array("Sistema solar #1"=>array_diff($_SESSION['s1'],$_SESSION['s2']));
    array_push($unico1,array("Sistema solar #2"=>array_diff($_SESSION['s2'],$_SESSION['s1'])));
    echo "Los planetas únicos son: <br>";
    print_r($unico1);
    echo <<<HTML
        <br><a href="index.php">Volver</a>
    HTML;
?>