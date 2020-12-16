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
        <!-- Navigation --><?php include 'nav_comerciante.php' ?>

        <header class="masthead" style="background-image: none; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo base_url() . "assets/img/grid.jpg" ?>);; background-size: cover; background-">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto">
                        <div class="device-wrapper">
                            <div class="device-mockup macbook_2015 silver">
                                <div class="device">
                                    <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <img src=<?php echo base_url() . "assets/img/preview_web.png" ?> class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="features" id="download">
            <div class="container">
                <div class="section-heading text-center">
                    <h2><img src=<?php echo base_url() . "assets/img/wallet.png" ?>>Wallet</h2>
                    <p class="text-muted">Ajuda-o nas transações da sua empresa!</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12 my-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="fas fa-chart-line"></i>
                                        <h3>Estatísticas</h3>
                                        <p class="text-muted">Estatísticas de uso das campanhas, de acesso, de vendas!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="fas fa-gifts"></i>
                                        <h3>Campanhas Personalizadas</h3>
                                        <p class="text-muted">Faça as suas campanhas promocionais!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="fas fa-edit"></i>
                                        <h3>Edição da Sua Página na APP</h3>
                                        <p class="text-muted">Pode colocar as suas campanhas pela ordem que quiser!</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-item">
                                        <i class="far fa-star"></i>
                                        <h3>Adira ao Premium</h3>
                                        <p class="text-muted">Funcionalidades extra, tais como, destaque prioritário, número de campanhas ilimitado, etc!</p>
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