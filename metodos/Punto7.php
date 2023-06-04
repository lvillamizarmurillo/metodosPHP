<?php
    $planetas = array("nave1"=>"s1","nave2"=>"s2","nave3"=>"s3");
    $eleccion = strtolower($_POST['planeta']);
    if (in_array($eleccion,$planetas)){
        $naves = array_flip($planetas);
        echo "Hubo una coincidencia con la ".$naves[$eleccion];
    }else{
        echo "No coincide con alguna nave registrada";
    };
    echo <<<HTML
        <br><a href="index.html">Volver</a>
    HTML;
?>