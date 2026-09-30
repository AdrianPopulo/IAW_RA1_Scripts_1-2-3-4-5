 <?php
 if (
   isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["email"]) && isset($_POST["missatge"]) &&
   $_POST["nom"] != "" && $_POST["cognom"] != "" && $_POST["email"] != "" && $_POST["missatge"] != ""
 ) {
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $email = $_POST["email"];
    $missatge = $_POST["missatge"];
    
    echo "Missatge rebut, " . $nom . " " . $cognom . " Gràcies per contactar. Et respondrem a " . $email . ".";
 
    } else {
 
    echo "Missatge no rebut";

 }
    ?>