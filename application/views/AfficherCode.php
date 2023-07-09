<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo base_url('CodeController/AjouterArgent') ?>">
        <input type="number" name="IdCode">
        <input type="submit" value="Acheter">
    </form>

    <table border="1px">
        <tr>
            <td>Code</td>
            <td>Valeur</td>
        </tr>
        <?php foreach($Code as $ChaqueCode) { ?>
            <tr>
                <td><?php echo $ChaqueCode['ValeurCode'] ; ?></td>
                <td><?php echo $ChaqueCode['MontantCode'] ; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>