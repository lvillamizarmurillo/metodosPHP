<?php
    $planetas = array("Mercurio"=>false,"Venus"=>false,"Tierra"=>true,"Marte"=>true,"Jupiter"=>false,"Saturno"=>false,"Urano"=>false,"Neptuno"=>false);
    var_dump(array_filter($planetas,function($k){return $k == true;},ARRAY_FILTER_USE_BOTH));
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>