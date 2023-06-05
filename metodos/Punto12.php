<?php
    session_start();
    echo "Todos los satelites de cada planeta: <br>";
    print_r($_SESSION['s1']);
    echo <<<HTML
        <br><a href="index.php">Volver</a>
    HTML;
?>