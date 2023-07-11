<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="<?php echo base_url('welcome/insererProgramme')?>">
            <p>nom: <input type="text" name="nom"> </p>
            <p> choisir Objectif <select name="idObjectif" >
                <?php for($i=0  ; $i<count($objectif) ; $i++) { ?>
                    <option value="<?php echo $objectif[$i]['IdObjectif']; ?>"> <?php echo $objectif[$i]['NomObjectif']; ?> </option>
                <?php  } ?>
            </select> </p>
            <p><input  type="submit" value="inserer"> </p>
        </form>
    </body>
</html>