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
    <body style="background-image: url('images/Baground.jpg'); background-position: center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12" style="color: white;">
                    <div class="col-lg-1 col-md-1 col-xs-1 text-left">
                        <br>
                        <a class="btn btn-default" href="index.php" role="button">Back</a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 text-left"></div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <br>
                        <br>
                        
                        <h2>Daftar Account</h2>
                        <br>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 text-right"></div>
                </div>
            </div>
            <form action="user_daftar.php" method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name :</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age :</label>
                            <input type="text" class="form-control" id="umur" name="umur" placeholder="Your Age">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email :</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User name :</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-lg-4 col-xs-2"></div>
                    <div class="col-lg-4 col-lg-4 col-xs-8">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
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