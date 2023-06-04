<?php
    $planetas = array("Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno");
    $eleccion = array_rand($planetas,1);
    echo "El planeta al azar elegido para la misión es: ".$planetas[$eleccion];
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>