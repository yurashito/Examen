<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/style.css'); ?>">
    <title>SportsZone</title>
</head>
<body>
    <div class="container">
        <div id="connexion">
          <h1 class="title">Hellø Wørld</h1>
          <p class="paragraphe">
            Veuillez entrer vos détails personnel et démarrez votre journée sur Hellø Wørld
          </p>
          <a href="<?php echo site_url('index'); ?>" class="btn-link connexion">Se connecter</a>
        </div>
        <div id="inscription">
          <h1 class="title">Créer un compte</h1>
          <p class="paragraphe">
            Veuillez remplir tous les champs
          </p>
          <form class="formulaire" action="<?php echo site_url('welcome/infoUtilisateur'); ?> " method="get">
            <div class="group-form">
              <input type="text" placeholder="Nom">
              <div class="icon-user"></div>
            </div>
            <div class="group-form">
                <input type="text" placeholder="Prenom">
                <div class="icon-user"></div>
            </div>
            <div class="group-form" style="min-width: 250px;">
                Mâle <input type="radio" name="genre" value="0"> 
                Femme <input type="radio" name="genre" value="1"> 
                <div class="icon-user"></div>
            </div>
            <div class="group-form">
              <input type="email" placeholder="mail">
              <div class="icon-mail"></div>
            </div>
            <div class="group-form">
              <input type="password" placeholder="password">
            </div>
            <div class="group-form">
                <input type="password" placeholder="Confirmation du mot de passe">
                <div class="icon-password"></div>
            </div>
            <div class="group-form">
                <input type="text" placeholder="Date de Naissance ../../..">
            </div>
            <div class="group-form">
                <input type="text" placeholder="Numero de telephone">
            </div>
            <div class="btn group-form" style="margin-left: 60%;">
              <input type="submit" class="inscription" value="S'inscrire">
            </div>
          </form>
        </div>
      </div>
</body>
</html>