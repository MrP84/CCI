<?php

session_start();
//test de validité du fichier
if (!empty($_FILES['logo']) AND !empty($_FILES['logo']['error']==0)) {
//test de la taille du fichier en octet
    if ($_FILES['logo']['size'] <= 5000000000) {
        //pathinfo renvoie un array
        $infosFichier = pathinfo($_FILES['logo']['name']);
        $extensionUpload = $infosFichier['extension'];
        $extensionsAuth = array('.pdf', '.png', '.jpg', 'jpeg');

        if (in_array($extensionUpload, $extensionsAuth)) {
            // envoi du fichier avec move_uploaded_file
            move_uploaded_file($_FILES['logo']['tmp_name'],'../uploads/'.basename($_FILES['logo']['name']));
            ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="recup.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="info">
        <p>
        <?php
            $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
            if (isset($_SESSION['nom'])) {
                echo $_SESSION['nom'] . " vient de mettre en ligne le fichier " . $_FILES['logo']['name'];
            }
        ?>
        <span class="glyphicons glyphicons-ok"></span></p>    
    </div>
    <?php 
        }
    }
}
?>
<p>
    Retour à l'<a href="../index.html">accueil</a> ou renvoyer une <a href="formFile.php">nouvelle image</a></p>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>          

