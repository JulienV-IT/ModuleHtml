<?php 
$nom = $_POST['name'];
if (isset($nom) && !empty($nom)) {
	return $nom;
}

$couleur_chaussure = $_POST['color'];
if (isset($couleur_chaussure) && !empty($couleur_chaussure)) {
	return $couleur_chaussure;
}
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
