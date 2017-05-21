<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>MENU</title>
            
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
            
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image: url('images/Baground.jpg'); background-position: center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12" style="color: white;">
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <h2><?php echo $_SESSION['nama_user']; ?></h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <h2>Menu Peminjaman Ruangan</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 text-right">
                        <br>
                        <a class="btn btn-default" href="session_destroy.php" role="button">Logout</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-3">
                    
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2 text-center" style="background-color: grey;">
                    <h3 style="color: white;">History</h3>
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1"></div>
                <div class="col-lg-1 col-md-1 col-xs-1"></div>
                <div class="col-lg-2 col-md-2 col-xs-2 text-center" style="background-color: gray;">
                    <h3 style="color: white;">Pinjang Ruangan</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-3">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-3">
                    
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2 text-center" style="background-color: white;">
                    <a href="riwayat_peminjaman.php"><img src="images/history-512.png" width="200"></a>
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1"></div>
                <div class="col-lg-1 col-md-1 col-xs-1"></div>
                <div class="col-lg-2 col-md-2 col-xs-2 text-center" style="background-color: white;">
                    <a href="ruangan.php" ><img src="images/Icon_Ruangan.png" width="200"></a>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-3">
                    
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>