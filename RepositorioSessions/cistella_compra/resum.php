
<?php
session_start();

$raton = $_SESSION["raton"] ?? 0;
$teclado = $_SESSION["teclado"] ?? 0;

$total = $raton * 15 + $teclado * 25;
?>

<h1>Resumen de compra</h1>

<p>Ratones: <?php echo $raton; ?> x 15 € = <?php echo $raton * 15; ?> €</p>
<p>Teclados: <?php echo $teclado; ?> x 25 € = <?php echo $teclado * 25; ?> €</p>

<h2>Total: <?php echo $total; ?> €</h2>

<form action="confirmar.php" method="POST">
    <button type="submit">Confirmar compra</button>
</form>

<br>
<a href="index.html">Volver a la tienda</a>
