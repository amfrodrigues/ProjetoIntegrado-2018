<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wallet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Morgana Vieira">
        <meta name="description" content="Watch Movies Online">
        <meta name="keywords" content="rent,movie,trendingmovie,screen,film">
        <!-- Bootstrap core CSS -->
        <link  href=<?php echo base_url() . "assets/vendor/bootstrap/css/bootstrap.min.css" ?> rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link  href=<?php echo base_url() . "assets/vendor/fontawesome-free/css/all.min.css" ?> rel="stylesheet">
        <link  href=<?php echo base_url() . "assets/vendor/simple-line-icons/css/simple-line-icons.css" ?> rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <!-- Plugin CSS -->
        <link  href=<?php echo base_url() . "assets/css/device-mockups/device-mockups.min.css" ?> rel="stylesheet">
        <!-- Custom styles for this template -->
        <link  href=<?php echo base_url() . "assets/css/new-age.min.css" ?> rel="stylesheet">
        
    </head>
    <body id="page-top">
        <!-- Navigation --><?php include 'nav_cliente.php' ?>

        <header class="masthead" style="background-image: none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo base_url() . "assets/img/grid.jpg" ?>); background-size: cover; background-">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 my-auto">
                        <div class="header-content mx-auto">
                            <h1 class="mb-5">Wallet é uma app que permite ter a sua carteira sempre à mão, com os seus cartões de fideliação, facilitanto as transações entre empresas e clientes.</h1>
                            <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Faça Download Grátis!</a>
                        </div>
                    </div>
                    <div class="col-lg-5 my-auto">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">
                                    <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->

                                        <img src=<?php echo base_url() . "assets/img/inicio_app.png" ?> class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="download text-center" id="download">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="section-heading">Tenha tudo o que precisa sempre consigo!</h2>
                        <p>App disponível para qualquer dispositivo! Faça download já!</p>
                        <div class="badges">
                            <a class="badge-link" href="#"><img src=<?php echo base_url() . "assets/img/google-play-badge.svg" ?> alt=""></a>
                            <a class="badge-link" href="#"><img src=<?php echo base_url() . "assets/img/app-store-badge.svg" ?> alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features" id="features">
            <div class="container">
                <div class="section-heading text-center">
                    <h2><img src=<?php echo base_url() . "assets/img/wallet.png" ?> alt="">Funcionalidades</h2>
                    <p class="text-muted">Confira o que consegue fazer com a nossa app!</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-auto">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">
                                    <div class="screen">
                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <img src=<?php echo base_url() . "assets/img/wallet_preview.gif" ?> class="img-fluid" alt="">
                                    </div>
                                    <div class="button">
                                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="far fa-credit-card"></i>
                                        <h3>Cartões</h3>
                                        <p class="text-muted">Tenha os seus cartões à mão!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="fas fa-briefcase"></i>
                                        <h3>Empresas</h3>
                                        <p class="text-muted">Mais de 100 empresas ao seu alcance!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="fas fa-gifts"></i>
                                        <h3>Promoções</h3>
                                        <p class="text-muted">Variadas promoções personalizadas para si!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="far fa-star"></i>
                                        <h3>Favoritos</h3>
                                        <p class="text-muted">Escolha as promoções que mais lhe convém!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact bg-primary" id="contact">
            <div class="container">
                <h2>Contacte-nos:</h2>
                <?php include 'contactar.php' ?>
            </div>
        </section>

        <!-- Footer --><?php include 'footer.php' ?>


        <!-- Bootstrap core JavaScript -->

        <script src=<?php echo base_url() . "assets/vendor/jquery/jquery.min.js" ?>></script>
       
        <script src=<?php echo base_url() . "assets/vendor/bootstrap/js/bootstrap.bundle.min.js" ?>></script>
        <!-- Plugin JavaScript -->
        <script src= <?php echo base_url() . "assets/vendor/jquery-easing/jquery.easing.min.js" ?>></script> 
        <!-- Custom scripts for this template -->
        <script src= <?php echo base_url() . "assets/js/new-age.min.js" ?>></script>

    </body>
</html>