<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulaire Completion :</h1>
    <form action="<?php echo base_url("utilisateur/insertionInformation"); ?>">
        <p> Poids : <input type ="number"  name="poids"></p>
        <p> taille : <input type ="number"  name="taille"></p>
        <p> adresse : <input type ="text"  name="adresse"></p>
        <p> telephone : <input type ="text"  name="telephone"></p>
        <p> <input type="submit" value="inserer"></p>
    </form>    
</body>
</html>