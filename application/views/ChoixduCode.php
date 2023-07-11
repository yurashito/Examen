<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du code </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css">
</head>
<body>
    <div class="signin" style="background-color: rgb(0, 7, 28);">
        <div class="signin__warp">
            <div class="signin__content" style="margin-top: 150px;">
                <div class="signin__logo">
                    <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
                </div>
                <p>Afficher code</p>
                <div class="signin__form">
                    <div class="signin__form__text">
                        <form action="<?php echo base_url('CodeController/AjouterArgent') ?>" method="get">
                            <input type="text" name="IdCode" >
                            <table>
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
                            <button type="submit" class="site-btn">valider les objectifs</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    
    <script src="<?php echo site_url('assets/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/main.js'); ?>"></script>
</body>
</html>
