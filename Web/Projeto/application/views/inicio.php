<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wallet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Projeto PINT">
        <meta name="description" content="Watch Movies Online">
        <meta name="keywords" content="rent,movie,trendingmovie,screen,film">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        </script>
        <!-- Para incluir icons CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>

    <body style="background-image: url(<?php echo base_url() . "assets/img/grid.jpg" ?>); background-size: cover;">
        <div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false" style="margin-top: 5%;">
            <div class="modal-dialog" style="text-align: center;">
                <div class="modal-content">
                    <div class="modal-header">
                    <img src=<?php echo base_url() . "assets/img/wallet.png" ?>><h1 class="modal-title" style="margin-bottom: 5%;">Bem-vindo à Wallet</h1>
                        <h4>A sua carteira, com os seus cartões e promoções, na sua mão! <br> A nossa miss&atilde;o &eacute; poupar-lhe tempo, dinheiro e esforço</h4>
                    </div>
                    <div class="modal-body" style="margin-bottom: 5%;">
                        <h3 style="margin-bottom: 5%;">Que tipo de cliente &eacute;?</h3>
                        <a href="<?php echo site_url('Cwallet/Particular'); ?>"><button class="btn btn-info btn-lg" type="submit">Cliente Particular</button> </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('Cwallet/Profissional'); ?>"><button class="btn btn-info btn-lg" type="submit">Cliente Profissional</button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>