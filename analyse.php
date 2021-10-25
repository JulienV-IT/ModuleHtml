<!DOCTYPE html>
<html lang="fr">
  <head>
   // <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analyse</title>
  </head>
  <style>
    body{
        /* margin: 10%; */
        padding: 0;
        border: 0;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-image: url("workinprogress.jpeg");
    }



    .container{
      min-height: 1400px;
      min-width: 80%;
      text-align: center;
      margin: 0 auto;
      padding: 0 auto;
      font-family: "VT323";

    }

    header{
      height: 25%;
      min-height: 25%;
      width: 75%;
      background-color: rgba(255,255,255,0.7);
      margin: 0 auto;
      padding: 0 auto;
      border: 2px solid red;
    }

    #titre{
      width: 25%;
      box-shadow: -1px 1px 1px 11px red;
      border-radius: 100px;
      margin: 0 auto;
      background-color: white;
    }

    #text {
      background: linear-gradient(-45deg, #6355a4, #6355a4, red, red);
    	background-size: 25%;
      font-family: "VT323";
      font-weight: 500;
    	font-size: 4vw;
    	letter-spacing: -5px;
    	text-transform: uppercase;
    	-webkit-background-clip: text;
    	-webkit-text-fill-color: transparent;
    	animation: animated_text 10s ease-in-out infinite;
    	-moz-animation: animated_text 10s ease-in-out infinite;
    	-webkit-animation: animated_text 10s ease-in-out infinite;

    }

    @keyframes animated_text {
    	0% { background-position: 0px 50%; }
    	50% { background-position: 100% 50%; }
    	100% { background-position: 0px 50%; }
    }



    section{
      height: 50%;
      min-height: 25%;
      width: 75%;
      background-color: rgba(255,255,255,0.5);
      margin: 0 auto;
      border: 1px solid red;
    }

    #paralax{
      height: 50%;
      min-height: 25%;
      background-size: 100% 100%;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-image: url("space.jpeg");
      color: whitesmoke;
    }

    img{
      height: 25%;
      width: 50%;
    }


    #You{
      height: 800px;
      width: 75%;
    }

  </style>
  <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>


  <body>
    <div class="container"><!-- le container est un éléments globale qui souvent contient l'integralité du contenus -->
      <header>
        <div id="titre"> <!--Le header est un haut de page ce sont les premiers elements que l'utilisateurs voit en dehors des menus (nav) -->
          <h1 id="text" title="ceci est un titre!">Analyser !!!!</h1><!--Titre H1 (Le plus gros) -->
        </div>
          <p class="shadow">le temps d'y voir plus clair</p>
      </header>
      <section >
        <h2 class="boxed">regardons la structure</h2>
        <p>La Structure comporte plusieurs éléments html, que nous pouvons agencer comme nous le souhaitons.</p>
      </section>

      <section id="paralax">
        <h2>Et maintenant le css!</h2>
        <p>Si l'on regarde le css on découvre de nouvelle proprieté que l'on peut appliquer a nos éléments</p>
        <article>
          <img src="homer.jpeg">
          <figcaption>Ou punaise du CSS! </figcaption>
        </article>
      </section>
      <section id="You">
        <!-- ici vos éléments html -->
        <h2>Ci-dessous vos exemples html & css</h2>
        <p>Pour les plus avancer d'entre vous merci de rediger un formulaire et de le styliser</p>
        <form method="get" action="resultats.php" align="center">

          Nom: <input type="text" size="10" maxlength="40" name="name" /><br />
          <!-- Mot de passe: <input type="password" size="10" maxlength="10" name="password" /><br />



          <h2><p>Quel type de chaussures vous portez ?</p></h2>

        <label>Couleur:</label> <br />
        <input type="radio" name="color" value="sombre" /> Sombres <br />
        <input type="radio" name="color" value="clair" /> Claires <br />

        <label>Taille:</label> <br />
        <input type="radio" name="size" value="petite" /> Petites <br />
        <input type="radio" name="size" value="moyenne" /> Moyennes <br />
        <input type="radio" name="size" value="grande" /> Grandes <br />




        <h2><p>Quelle couleur de chaussures vous préférez?</p></h2>

          <input type="checkbox" name="shoes" value="noires" /> Simple Noires <br/>
          <input type="checkbox" name="shoes" value="blanches" /> Simple Blanches <br/>
          <input type="checkbox" name="shoes" value="grises" /> Nuances de gris <br/>
          <input type="checkbox" name="shoes" value="noires&blanches" /> Noires et blanches<br/>


          <h2><p>Préférences musicales</p></h2>

        <select multiple name="musique" size="4">
          <option value="emo" selected>Emo</option>
          <option value="metal/rock" >Metal/Rock</option>
          <option value="hiphop" >Hip Hop</option>
          <option value="ska" >Ska</option>
          <option value="jazz" >Jazz</option>
          <option value="country" >Country</option>
          <option value="classique" >Classique</option>
          <option value="alternative" >Alternative</option>
          <option value="retro" >Retro</option>
          <option value="techno" >Techno</option>
        </select><br /> -->

        <!-- <h2>Votre photo : <input type="hidden" name="MAX_FILE_SIZE" value="100" /> <input name="file" type="file" /></h2>
        -->
        <input type="submit" value="Valider" />

        </form>
      </section>
      <br>


    </div>
  </body>
</html>
