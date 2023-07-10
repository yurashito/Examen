<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Bonjour</h1>
</body>
   <p> <?php echo anchor('tP_1/config', "configuration")?> </p>
    <p> <?php echo anchor('tP_1/application', "application")?> </p>
    <p> <a href="tP_1/config"> configurer</a> </p>
</html>