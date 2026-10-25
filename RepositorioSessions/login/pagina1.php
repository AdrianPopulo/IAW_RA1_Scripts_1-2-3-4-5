
<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
    exit();
}
?>

<h2>Usuario: <?php echo htmlspecialchars($_SESSION["usuario"]); ?></h2>
<h1>Página 1</h1>
<a href="pagina2.php">Ir a página 2</a>
