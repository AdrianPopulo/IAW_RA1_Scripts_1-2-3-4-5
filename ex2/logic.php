<?php

if (
    isset($_POST["conversio"]) && isset($_POST["quantitat"])
) {

    $conversio = $_POST["conversio"];
    $quantitat = $_POST["quantitat"];

    if ($quantitat >= 0) {

        if ($conversio == "Euros a Dolars") {

            $resultat = ROUND($quantitat * 1.17, 2);

            echo $quantitat . "€ a Dòlars son " . $resultat . "$";

        } else if ($conversio == "Dolars a Euros") {

            $resultat = ROUND($quantitat / 1.17, 2);

            echo $quantitat . "$ a Euros son " . $resultat . "€";

        }

    } else {

        echo "Quantitat no acceptada";

    }
}

?>