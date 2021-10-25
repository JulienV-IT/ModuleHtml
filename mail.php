<?php



$nom = $_POST["nom"]; // recupération de l'entrée nom via form html
$email =
$msg =
if (isset($nom) && !empty($nom)){ // condition qui verifie que notre variable est definit et non vide
  $nom = $nom; // si la condition est vérifiée alors notre variable peu etre égale a l'entrée utilisateur
} else { // sinon
  $nom = "error was happening!"; // on attribue a notre variable un message d'erreur
}


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

</head>
<style>

.name{
  color: red;
}


</style>

<body>


<h1>Ici la récéption de notre premier champ texte</h1>
<?php echo "<div class=\"name\">".htmlspecialchars($nom)."</div>";?> <!--Affichage apres traitement php de notre entrée utilisateur -->


</body>

</html>
