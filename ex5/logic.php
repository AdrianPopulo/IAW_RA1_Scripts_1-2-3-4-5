<?php

if (
    isset($_POST["preu"]) && isset($_POST["iva"]) &&
    $_POST["preu"] != "" && $_POST["iva"] != ""
) {

    $preu = $_POST["preu"];
    $iva = $_POST["iva"];

    $total = $preu + ($preu * ($iva / 100));

    echo "Un preu de " . $preu . "€ amb un IVA del " . $iva . "% té un cost final de " . $total . "€.";

} else {

        echo "Has d'introduir un preu i un IVA.";

}

?>