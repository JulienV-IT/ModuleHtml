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


<?php
	if (isset($_POST['nom']) AND isset($_POST['mail']) AND isset($_POST['objet'])  AND isset($_POST['message'])){
		$nom = $mail = $message = "";

		function securisation($donnees){
			$donnees = trim($donnees); // supprime les espaces
			$donnees = stripslashes($donnees); // supprime les antislash
			$donnees = strip_tags($donnees); // supprime les caractères spéciaux

			return $donnees;
		}

		$nom = securisation($_POST['nom']);
		$prenom = securisation($_POST['prenom']);
		$mail = securisation($_POST['mail']);
		$objet = securisation($_POST['objet']);
		$message = securisation($_POST['message']);

		mail('redfishaw@gmail.com', "$objet", "NOM/PRÉNOM DE L'EXPÉDITEUR:\n\n$nom".' '."$prenom\n\n ADRESSE MAIL:\n\n$mail\n\n MESSAGE:\n\n$message");
	}

	header('location: index.php');

  ?>
