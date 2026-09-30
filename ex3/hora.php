<?php

date_default_timezone_set("Europe/Madrid");

$hora = (int) date("H");

if ($hora >= 5 && $hora < 14) {

    echo "Son les " . date("H:i") . " per tant que tinguis un bon dia";

} elseif ($hora >= 14 && $hora < 19) {

    echo "Son les " . date("H:i") . " per tant que tinguis una bona tarda";

} else {

    echo "Son les " . date("H:i") . " per tant que tinguis una bona nit";

}

?>