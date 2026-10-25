
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: resum.php");
    exit();
}

unset($_SESSION["raton"], $_SESSION["teclado"]);
?>

<h1>Compra realizada correctamente</h1>
<p>Gracias por tu compra.</p>

<a href="index.html">Volver a la tienda</a>
