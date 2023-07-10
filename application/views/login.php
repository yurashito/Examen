<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/style_login.css'); ?>">
    <title>SportsZone</title>
</head>
<body>
    <div class="container">
        <div id="connexion">
            <h1 class="title">Créer un compte</h1>
          <p class="paragraphe">
            Veuillez remplir tous les champs
          </p>
          <form class="formulaire" action="welcome/index">
            <div class="group-form">
              <input type="email" placeholder="mail">
              <div class="icon-mail"></div>
            </div>
            <div class="group-form">
              <input type="password" placeholder="password">
              <div class="icon-password"></div>
            </div>
            <div class="group-form">
              <input type="submit" class="inscription" style="background: #1f1fd1;" value="Se Connecter">
            </div>
          </form>
        </div>
        <div id="inscription">
            <h1 class="title">Hellø Wørld</h1>
            <p class="paragraphe">
              Veuillez entrer vos détails personnel et démarrez votre journée sur Hellø Wørld
            </p>
            <a href="<?php echo site_url('welcome/inscription'); ?>" class="btn-link connexion" style="color: #198EF5;font-weight: bold;">S' inscrire</a>
          
        </div>
      </div>
</body>
</html>