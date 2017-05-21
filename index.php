<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title>
            
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
            
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image: url('images/Halaman_Utama.jpg'); background-position: center;">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                    <img src="images/Logo.png">
                </div>
            </div>
            <br>
            <form action="validasi_login.php" method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8">
                        <div class="form-group">
                            <label style="color: white;" for="exampleInputEmail1">User name :</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label style="color: white;" for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-4 col-lg-4 col-xs-2"></div>
                    <div class="col-lg-4 col-lg-4 col-xs-8">
                        <div class="col-lg-6 col-lg-6 col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>   
                        </div>
                        <div class="col-lg-6 col-lg-6 col-xs-6">
                            <a href="daftar.php" class="btn btn-default btn-md btn-block active" role="button">Daftar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-xs-2 "></div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-12 col-lg-12 col-xs-12"><br></div>
                    <div class="col-lg-4 col-lg-4 col-xs-2"></div>
                    <div class="col-lg-4 col-lg-4 col-xs-8">
                        <?php
                            if(empty($_GET['status'])){
                                //do nothing;
                            }else{
                                $status = $_GET['status'];
                                if($status == "userpassep"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>User Name and Password Incorrect
</div>';
                                    }
                                if($status == "userep"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>User Name Incorrect
</div>';
                                }
                                if($status == "passep"){
                                     echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>Password Incorrect
</div>';
    
                                }
                                if($status == "nodata"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>You does not Registred
</div>';
                                }
                                if($status == "usereq"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>User Name Wrong
</div>';
                                    }
                                if($status == "passeq"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>Password Wrong
</div>';
                                }
                                if($status == "done"){
                                    echo '
                                        <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong>Your Data Has ben Record
</div>';
                                }
                            }
                        ?>
                    </div>
                    <div class="col-lg-4 col-lg-4 col-xs-2 "></div>
                </div>
            </form> 
        </div>
            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>