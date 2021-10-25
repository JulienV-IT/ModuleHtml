<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="mystyle.css">
	<meta charset="utf-8"/>
</head>
<body>

  <h1>RESULTATS</h1>
  <p>Voici vos informations</p>
  Bienvenue Monsieur : <h1><?php echo htmlspecialchars($_POST['name']); ?></h1>
<br>
 retour à la page d'acceuil  <a href="analyse.html">Accueil</a>
<br>

  
</body>
</html>
