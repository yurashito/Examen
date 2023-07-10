<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url("AdminController/InsererSport") ?>" method="get">
        <p>Nom:<input type="text" name="Nom" id=""></p>
        <p>Poids:<input type="text" name="Poids" id=""></p>
        <p>Duree en minutes:<input type="number" name="Durre" id=""></p>
        <p><input type="submit" value="Inserer"></p>
    </form>

    <table border="1px">
        <tr>
            <th>Nom de sport</th>
            <th>Poids Perdu ou Gagner</th>
            <th>Duree en minutes</th>
            <th>Nombre de jour</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($Sport as $sport) { ?>
            <tr>
                <td><?php echo $sport['Nom'] ?></td>
                <td><?php echo $sport['Poids'] ?></td>
                <td><?php echo $sport['Duree'] ?></td>
                <td><?php echo $sport['NbrJours'] ?></td>
                <td><a href="<?php echo base_url("AdminController/ModifierSport") ?>?IdSport=<?php echo $sport['Id'] ?>">Modifier</a></td>
                <td><a href="<?php echo base_url('AdminController/SupprimerSport') ?>?IdSport=<?php echo $sport['Id'] ?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>