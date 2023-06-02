<?php
    $planetas = array("Mercurio"=>array("Masa"=>3.3*(10**23),"Radio"=>2.4*(10**6)),"Venus"=>array("Masa"=>4.9*(10**24),"Radio"=>6.1*(10**6)),"Tierra"=>array("Masa"=>6.0*(10**24),"Radio"=>6.4*(10**6)),"Marte"=>array("Masa"=>6.4*(10**23),"Radio"=>3.4*(10**6)),"Jupiter"=>array("Masa"=>1.9*(10**27),"Radio"=>7.1*(10**7)),"Saturno"=>array("Masa"=>5.7*(10**26),"Radio"=>6.0*(10**7)),"Urano"=>array("Masa"=>8.7*(10**25),"Radio"=>2.6*(10**7)),"Neptuno"=>array("Masa"=>1.0*(10**26),"Radio"=>2.5*(10**7)));
    $planetasGravedad = array_map(function($k){$G = 6.67*(10**-11);return round(($G*($k['Masa']/($k['Radio'])**2)),2);},$planetas);
    var_dump($planetasGravedad);
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>