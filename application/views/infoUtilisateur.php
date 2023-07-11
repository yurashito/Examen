<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | Template</title>

    <!-- Google Font -->
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

<style>
    h6 input{
        width: 8%; 
        height: 15px;
    }
</style>

<body class="fixed-position">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Sign In Section Begin -->
    <div class="signin" style="background-color: black;">
        <div class="signin__warp">
            <div class="signin__content" style="margin-top: 150px;">
                <div class="signin__logo">
                    <a href="#"><img src="<?php echo site_url("assets/logo_lettre.png"); ?>" alt="" style="heigth: 100px;"></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
                    magna aliqua viverra.</p>
                <div class="signin__form">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                                Info suplementaire
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">
                                Objectif
                            </a>
                        </li>
                        <li class="nav-item">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="signin__form__text">
                                <form action="<?php echo site_url("welcome/insertionInformation");?>" method="get">
                                    <input type="text" name="poids" placeholder="Poids">
                                    <input type="text" name="taille" placeholder="Taille">
                                    <input type="text" name="numero" placeholder="numero de telephone">
                                    <input type="text" name="adresse" placeholder="Adresses">
                                    
                                    <button type="submit" class="site-btn">valider</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="signin__form__text">
                                <form action="<?php echo site_url('ObjectifClientController/InsererObjectif'); ?> " method="get">
                                    <div class="row">
                                    <?php foreach($Objectif as $Object) { ?>
                                        <h6 class="col-6">
                                            <input style="width: 8%; height: 15px;" value="<?php echo $Object['IdObjectif'] ?>" type="radio" name="IdObjectif" id="sign-agree-check">
                                            <?php echo $Object['NomObjectif'] ?>
                                        </h6">
                                        <?php } ?>
                                                                      
                                    </div>
                                    <div class="row">
                                        <h6 class="col-12">
                                            <input type="number" name="Valeur" placeholder="Saisir le nombre de poids a augmenter ou a reduire">
                                        </h6>  
                                    </div>
                                    <button type="submit" class="site-btn">valider les objectifs</button>
                                </form>
                            </div>
                        </div>
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