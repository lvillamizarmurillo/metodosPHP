<?php
    $navesEspaciales = array(
        "Nave1"=>6,
        "Nave2"=>10,
        "Nave3"=>4);
    var_dump("La masa de todas las naves es: ".array_sum($navesEspaciales));
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>