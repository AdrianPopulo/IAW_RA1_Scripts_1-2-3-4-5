
<?php
session_start();

if (!isset($_SESSION["raton"])) {
    $_SESSION["raton"] = 0;
}

if (!isset($_SESSION["teclado"])) {
    $_SESSION["teclado"] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["producto"]) && $_POST["producto"] == "raton") {
        $_SESSION["raton"] += max(0, (int) ($_POST["raton"] ?? 0));
    }

    if (isset($_POST["producto"]) && $_POST["producto"] == "teclado") {
        $_SESSION["teclado"] += max(0, (int) ($_POST["teclado"] ?? 0));
    }
}

header("Location: index.html");
exit();
?>
