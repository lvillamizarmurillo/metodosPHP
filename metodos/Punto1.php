<?php
    $planetas = array("Sol"=>0,"Mercurio"=>1,"Venus"=>2,"Tierra"=>3,"Marte"=>4,"Jupiter"=>5,"Saturno"=>6,"Urano"=>7,"Neptuno"=>8);
    $invertido = array_flip($planetas);
    echo $invertido[$_POST['planeta']];
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;

?>