<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($Aliment as $aliment) { ?>
        <form action="<?php echo base_url("AdminController/Modifier") ?>" method="get">
            <p>Nom:<input type="text" name="Nom" value="<?php echo $aliment['Nom'] ?>"></p>
            <p>Poids:<input type="text" name="Poids" value="<?php echo $aliment['Poids'] ?>"></p>
            <p>Montant:<input type="number" name="Montant" value="<?php echo $aliment['Montant'] ?>"></p>
            <p>Pourcentage de viande:<input type="number" name="viande" value="<?php echo $aliment['PourcentageViande'] ?>"></p>
            <p>Pourcentage de poisson:<input type="number" name="poisson" value="<?php echo $aliment['PourcentagePoisson'] ?>"></p>
            <p>Pourcentage de volaille:<input type="number" name="volaille" value="<?php echo $aliment['PourcentageVolaille'] ?>"></p>
            <p><input type="hidden" name="IdAliment" value="<?php echo $aliment['Id'] ?>"></p>
            <p><input type="submit" value="Modifier"></p>
        </form>
    <?php } ?>
</body>
</html>