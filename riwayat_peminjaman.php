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
        <title>Riwayat Peminjaman</title>
            
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
                    <div class="col-lg-2 col-md-2 col-xs-2 text-left">
                        <br>
                        <a class="btn btn-default" href="menu_user.php" role="button">Back</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                        <h2><?php echo $_SESSION['nama_user']; ?></h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <h2>Riwayat Peminjaman Ruangan</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 text-right">
                        <br>
                        <a class="btn btn-default" href="session_destroy.php" role="button">Logout</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12"><br></div>
            </div>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-xs-8" style="background-color: gray;">
                    <br>
                    <div class="table-responsive">
                        <table class="table" style="color: white;">
                            <tr>
                                <th style="text-align: center;">Ruangan</td>
                                <th style="text-align: center;">Tanggal</td>
                                <th style="text-align: center;">Jumlah Peserta</td>
                            </tr>
                            <?php
                                include 'MySQL.php';
                                $mysql = new MySQL();
                                $mysql->connect();
                                $mysql->execute("SELECT ruangan, tanggal_peminjaman, jumlah FROM peminjaman");
                                if($mysql->get_num_rows() != null){
                                    while($row = $mysql->get_array()){
                                    echo '
                                        <tr>
                                        <td style="text-align: center;">'.$row['ruangan'].'</td>
                                        <td style="text-align: center;">'.$row['tanggal_peminjaman'].'</td>
                                        <td style="text-align: center;">'.$row['jumlah'].'</td>
                                        </tr> ';
                                    }
                                }else{
                                    echo 'Your data is Empty';
                                }
                                $mysql->close_connection();
                            ?>
                             
                        </table>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2"></div>
            </div>
            
        </div>  
        
            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>