<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Un formulaire dédié à l'upload de fichier image">
  <meta name="author" content="le Suisse du Web">
  <title>Formulaire d'upload</title>

  <link href="styleform.css" type="text/css" rel="stylesheet">
</head>

<body>

  <header>
    <h1 class="main-title">Formulaire d'envoi de fichier</h1>
  </header>
    <div class="container">
      <form action="recup.php" method="POST" enctype="multipart/form-data">
        <div class="nomInput">
          <p>
            <label for="nom">Votre nom : </label>
            <input type="input" name="nom" class="input" id="nom" required aria-required="true"> <!-- aria-required="true" est destiné à la synthèse vocale -->
          </p>
        </div>

        <p>
          <label for="message">Description du fichier envoyé :</label>
          <textarea name="message" class="message" id="message" role="textbox" aria-multiline="true"></textarea> <!-- le role et aria-multiline -->
        </p>

        <p>
            <input type="file" name="logo">
        </p>

        <p>
          <input type="submit" name="envoi" value="Soumettre votre formulaire" class="bouton">
        </p>

      </form>
    </div>

    <p>Retour vers <a href="../../index.html">l'accueil</a></p>
</body>
</html>

