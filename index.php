
 



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bataille Navale</title>
    <meta charset="utf-8">
    <link rel= "stylesheet" href = "style.css" />
  </head>  

  <body>
    <div class="header">
      <div class="header-logo">
        <a href="index.php"><img src="img/anchor.png"></a>
      </div>

        <nav class="header-menu">
          <ul>
            <li>
              <a href="inscription.php">Inscription</a>
            </li>
            <li>
              <a href="connexion.php">Connexion</a>
            </li>
            <li>
              <a href="profil.php">Profil</a>
            </li>
          </ul>
        </nav>

    </div>
<?php
$dbconn = pg_connect("dbname=postgresql-cubic-62585");
?>
    <h1> Bataille Navale </h1>
    <p>La bataille navale, appelée aussi touché-coulé, est un jeu de société dans lequel deux joueurs doivent placer des « navires » sur une grille tenue secrète et tenter de « toucher » les navires adverses. Le gagnant est celui qui parvient à couler tous les navires de l'adversaire avant que tous les siens ne le soient. On dit qu'un navire est coulé si chacune de ses cases a été touchées par un coup de l'adversaire. </p>

  </body>
</html>
