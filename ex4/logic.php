<?php

if (
    isset($_POST["estil"]) 
) {

    $estil = $_POST["estil"];

        if ($estil == "jazz") {

            echo "Jazz: va néixer als Estats Units a principis del segle XX. Es caracteritza per la improvisació, 
            ritmes complexos i la importància d’instruments com el saxòfon, la trompeta i el piano.";

        } elseif ($estil == "rap") {

            echo "Rap: va néixer a les comunitats afroamericanes i llatines de Nova York. Destaca per les rimes, 
            el ritme i unes lletres que sovint parlen d’experiències personals, societat o cultura urbana.";

        } elseif ($estil == "rock") {

            echo "Rock: va sorgir a partir del rock and roll i es caracteritza per l’ús de guitarres elèctriques, 
            baix i bateria. Té molts subgèneres, com el hard rock, el punk o el grunge.";

        } elseif ($estil == "pop") {

            echo "Pop: gènere molt popular i comercial, amb cançons enganxoses, estructures senzilles i tornades 
            fàcils de recordar. S’adapta molt a les tendències de cada època.";

        } 
        
} else {

            echo "No s'ha seleccionat cap gènere musical";

        }
    
?>