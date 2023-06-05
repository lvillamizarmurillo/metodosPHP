<?php
    session_start();
    $arrayAliens = array_unique($_SESSION['s1']);
    echo "Quitando las especies repetidas, esta es la lista<br>";
    print_r($arrayAliens);
    echo <<<HTML
        <br><a href="index.php">Volver</a>
    HTML;
?>