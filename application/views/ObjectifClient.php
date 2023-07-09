<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url("ObjectifClientController/InsererObjectif") ?>" method="get">
       <p>
        <select name="IdObjectif">
            <?php foreach($Objectif as $Object) { ?>
                <option value="<?php echo $Object['IdObjectif'] ?>">
                    <?php echo $Object['NomObjectif'] ?>
                </option>
            <?php } ?>
        </select>
       </p>
        <p><input type="number" name="Valeur"></p>
        <p><input type="submit" value="Valider"></p>
    </form>
</body>
</html>