
<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
    exit();
}
?>

<h2>
    Usuario: <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
    <a href="logout.php">Cerrar sesión</a>
</h2>

<h1>Página 2</h1>
<a href="pagina1.php">Ir a página 1</a>
