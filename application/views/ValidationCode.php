<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Nom de l'utilisateur</th>
            <th>Code</th>
            <th>Montant du Code</th>
            <th>Confirmation</th>
        </tr>
        <?php foreach($CodeAttente as $Code) { ?>
            <tr>
                <td><?php echo $Code['nom'] ?></td>
                <td><?php echo $Code['ValeurCode'] ?></td>
                <td><?php echo $Code['MontantCode'] ?></td>
                <td><a href="<?php echo base_url("CodeController/Valider")?>?IdClient=<?php echo $Code['idUtilisateur']?>&&ValeurCode=<?php echo $Code['ValeurCode'] ?>">Confirmer</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>