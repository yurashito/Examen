<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url("AdminController/InsererAliment") ?>" method="get">
        <p>Nom:<input type="text" name="Nom" ></p>
        <p>Poids:<input type="text" name="Poids" ></p>
        <p>Montant:<input type="number" name="Montant" ></p>
        <p><input type="submit" value="Inserer"></p>
    </form>

    <table border="1px">
        <tr>
            <th>Nom de l'aliment</th>
            <th>Poids gagner ou perdu</th>
            <th>Montant</th>
            <th>Duree</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
        <?php foreach($Aliment as $aliment) { ?>
            <tr>
                <td><?php echo $aliment['Nom'] ?></td>
                <td><?php echo $aliment['Poids'] ?></td>
                <td><?php echo $aliment['Montant'] ?></td>
                <td><?php echo $aliment['duree'] ?></td>
                <td><a href="<?php echo base_url("AdminController/SupprimerAliment") ?>?IdAliment=<?php echo $aliment['Id'] ?>">Supprimer</a></td>
                <td><a href="<?php echo base_url("AdminController/MoidifierAliment") ?>?IdAliment=<?php echo $aliment['Id'] ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>