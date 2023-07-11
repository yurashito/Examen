
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1><?php  echo $IdProgramme?></h1>
    <form action="<?php  echo base_url('welcome/RecupererLesValeurChecker') ; ?>" method="get">

        <input type="hidden" name="idProgramme" value="<?php  echo $IdProgramme?>">
        <h3>Aliment :</h3>
        <?php for($i=0 ; $i<count($Aliment) ; $i++){ ?>
           <p> <input type="checkbox" id="<?php  echo $Aliment[$i]['Id'] ?>" name="aliment[]" value="<?php  echo $Aliment[$i]['Id'] ?>">
            <label for="option1"><?php  echo $Aliment[$i]['Nom'] ; ?></label></p>
        <?php } ?>
 
        <h3>Sport :</h3>
        
        <?php for($i=0 ; $i<count($Sport) ; $i++){ ?>
            <p> <input type="checkbox" id="<?php  echo $Sport[$i]['Id'] ?>" name="sport[]" value="<?php  echo $Sport[$i]['Id'] ?>"">
            <label for="option1"><?php  echo $Sport[$i]['Nom'] ; ?></label></p>
        <?php } ?>
        <p> <input type="submit" value="ok"></p>
    </form>

</body>
</html>