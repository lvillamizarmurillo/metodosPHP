<?php
    $sistemaSolar = array_fill(1,$_POST['planeta'],"Desabilitado");
    var_dump($sistemaSolar);
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>