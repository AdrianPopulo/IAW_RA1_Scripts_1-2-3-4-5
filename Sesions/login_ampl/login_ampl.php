
<?php
session_start();

if (isset($_POST["usuario"], $_POST["password"]) &&
    $_POST["usuario"] != "" &&
    $_POST["usuario"] == $_POST["password"]) {

    $_SESSION["usuario"] = $_POST["usuario"];
    header("Location: pagina1.php");

} else {
    header("Location: index.html");
}
exit();
?>
