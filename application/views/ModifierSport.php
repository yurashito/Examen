<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($Sport as $sport) { ?>
        <form action="<?php echo base_url("AdminController/ModifSport") ?>" method="get">
            <input type="text" name="Nom" id="" value="<?php echo $sport['Nom'] ?>">
            <input type="text" name="Poids" id="" value="<?php echo $sport["Poids"] ?>">
            <input type="number" name="Duree" id="" value="<?php echo $sport["Duree"] ?>">
            <input type="hidden" name="IdSport" value="<?php echo $sport['Id'] ?>">
            <input type="submit" value="Modifier">
        </form>
    <?php } ?>
</body>
</html>