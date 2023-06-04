<?php
    $planetas = array("mercurio","venus","tierra","marte","jupiter","saturno","urano","neptuno");
    $eleccion = strtolower($_POST['planeta']);
    if (in_array($eleccion,$planetas)){
        echo "El planeta existe";
    }else{
        echo "El planeta no se encuentra en el sistema solar";
    };
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>