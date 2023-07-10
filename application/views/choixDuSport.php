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
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Sign In Section Begin -->
    <div class="signin">
        <div class="signin__warp" style="background-color: white;">
            <div class="signin__content" style="margin-top: 150px;"></div>
                <div class="signin__logo">
                    <a href="#"><img src="<?php echo site_url('assets/img/siign-in-logo.png');?>" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
                    magna aliqua viverra.</p>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__about__item">
                            <div class="sidebar__item__title">
                                <h6>About me</h6>
                            </div>
                            <img src="<?php echo site_url('assets/img/sidebar/sidebar-about.jpg');?>" alt="">
                            <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <label for="agree-check-1">
                                <input type="checkbox" id="agree-check-1">
                                <span class="checkmark"></span>
                                I agree to the terms & conditions
                            </label>
                            <br>
                            <a href="#" id="read-more-btn-1" class="primary-btn">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__about__item">
                            <div class="sidebar__item__title">
                                <h6>About me</h6>
                            </div>
                            <img src="<?php echo site_url('assets/img/sidebar/sidebar-about.jpg');?>" alt="">
                            <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <label for="agree-check-2">
                                <input type="checkbox" id="agree-check-2">
                                <span class="checkmark"></span>
                                I agree to the terms & conditions
                            </label>
                            <br>
                            <a href="#" id="read-more-btn-2" class="primary-btn">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__about__item">
                            <div class="sidebar__item__title">
                                <h6>About me</h6>
                            </div>
                            <img src="<?php echo site_url('assets/img/sidebar/sidebar-about.jpg');?>" alt="">
                            <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <label for="agree-check-3">
                                <input type="checkbox" id="agree-check-3">
                                <span class="checkmark"></span>
                                I agree to the terms & conditions
                            </label>
                            <br>
                            <a href="#" id="read-more-btn-3" class="primary-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        for (var i = 1; i <= 3; i++) {
            var agreeCheck = document.getElementById('agree-check-'+i);
            var readMoreBtn = document.getElementById('read-more-btn-'+i);
            readMoreBtn.addEventListener('click', function(event) {
                if (!agreeCheck.checked) {
                    event.preventDefault(); // Empêche le comportement par défaut du lien
                    alert('Accepter la demande'); // Affiche une alerte d'erreur
                }
            });
        }
    </script>
    
    
    <script src="<?php echo site_url('assets/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/main.js'); ?>"></script>
</body>

</html>