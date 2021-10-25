<?php
$nom = $_GET['name'];
if (isset($nom) && !empty($nom)){ // condition qui verifie que notre variable est definit et non vide
  $nom = $nom; // si la condition est vérifiée alors notre variable peu etre égale a l'entrée utilisateur
} else { // sinon
  $nom = "error was happening!"; // on attribue a notre variable un message d'erreur
}

// $couleur_chaussure = $_GET['color'];
// if (isset($couleur_chaussure) && !empty($couleur_chaussure)) {
// 	return $couleur_chaussure;
// }
// var_dump($nom);
// echo("<h1>ma couleur de chassure ".couleur_chaussure."</h1>");


?>











<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="mystyle.css">
	<meta charset="utf-8"/>

</head>
<body>

  <h1>RESULTATS</h1>
  <p>Voici vos informations</p>
  Bienvenue Monsieur : <h1><?= htmlspecialchars($nom); ?></h1>
<br>
 retour à la page d'acceuil  <a href="analyse.php">Accueil</a>
<br>


</body>
</html>
