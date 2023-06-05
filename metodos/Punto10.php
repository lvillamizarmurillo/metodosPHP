<?php
    session_start();
    $comunes = array_intersect($_SESSION['s1'],$_SESSION['s2']);
    echo "Los planetas comunes son: <br>";
    print_r($comunes);
    echo <<<HTML
        <br><a href="index.php">Volver</a>
    HTML;
?>