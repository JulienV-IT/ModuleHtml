<?php


// log de débug de tous les POST
// var_dump($_POST);

// $nom = $_POST['name'];
// $pass = $_POST['password'];
// $color = $_POST['color'];
// $size = $_POST['size'];
// $colorShoes = $_POST['shoes'];
// $music = $_POST['music'];
//
// if (isset($nom) && !empty($nom)){ // condition qui verifie que notre variable est definit et non vide
//   $nom = $nom; // si la condition est vérifiée alors notre variable peu etre égale a l'entrée utilisateur
// } else { // sinon
//   $nom = "error was happening!"; // on attribue a notre variable un message d'erreur
// }


if (isset($_POST['name']) AND isset($_POST['password']) AND isset($_POST['color']) AND isset($_POST['size']) AND isset($_POST['shoes']) AND isset($_POST['musique'])){
  $nom = $password = "";
  // var_dump($_POST['musique']);


  function securisation($donnees){
    $donnees = trim($donnees); // supprime les espaces
    $donnees = stripslashes($donnees); // supprime les antislash
    $donnees = strip_tags($donnees); // supprime les caractères spéciaux

    return $donnees;
  }

  $nom = securisation($_POST['name']);
  $pass = securisation($_POST['password']);
  $color = securisation($_POST['color']);
  $size = securisation($_POST['size']);
  $colorShoes = securisation($_POST['shoes']);





  // mail('redfishaw@gmail.com', "$objet", "NOM/PRÉNOM DE L'EXPÉDITEUR:\n\n$nom".' '."$prenom\n\n ADRESSE MAIL:\n\n$mail\n\n MESSAGE:\n\n$message");
}

// header('location: index.php');


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
  <br>
  <div class="choix">
  Bienvenue Monsieur :<strong> <h1><?= $nom; ?></h1></strong>
  <p>Attention votre mot de pass est :<strong> <?= $pass;?></p><br></strong>
  Quel Couleur avez vous choisit: <strong><?= $color; ?><br></strong>
  la taille est : <strong><?= $size;?><br></strong>
  tons des chaussures:<strong> <?= $colorShoes;?></strong><br>
  Vous aimez les musiques: <?php foreach ($_POST['musique'] as $select)
   {
   echo $select."<br>"; // Displaying Selected Value
   };?>
</div><br>
 retour à la page d'acceuil  <a href="analyse.php">Accueil</a>
<br>


</body>
</html>
