<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color:#F8F9FD;
            background-repeat:no-repeat;
            background-size:cover;
        }
    .info{
        margin-top:100px;
        margin-left:250px;
        height: 350px;
        border-radius:20px;
        width:500px;
        background-color: #FFFFFF;
        box-shadow: -3px -3px 20px rgba(0,0,0,0.4);
    }
    h1{
        text-align:center;
        margin-bottom:50px;
    }
    input{
        display: block;
        width: 55%;
        height:40px;
        margin-bottom:20px;
        border-radius:5px;
        background-color:#F2F2F2;
        border:0px;
        padding-left:20px;  
        font-size:15px;
        margin-left:100px;
    }
    .username{
        margin-bottom:20px;
    }
.username::-webkit-input-placeholder{
    font-style:italic;
}
.password::-webkit-input-placeholder{
    font-style:italic;
}
    .btn_login{
        display: block;
        padding-left:0;  
        width: 20%;
        height:50px;
        text-align:center;
        border:0;
        background-color: #2ecc71;
        color:white;
        margin-top:40px;
    }
</style>
</head>
<body>
<div class="info">
    <h1>Log In</h1>
    <form action="<?php echo URL; ?>/Dashboard/index" method="post">
    <input type="text" class="username" placeholder="masukkan username" name="user_nama" required>
    <input type="password" class="password" placeholder="masukkan password" name="user_password" required>
    <input class="btn_login" type="submit" value="Login">
</form>
</div>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= AST ?>/login_assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= AST ?>/login_assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= AST ?>/login_assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?= AST ?>/login_assets/css/style.css">

    <title>Login #7</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= AST ?>/login_assets/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Log In</h3>
              <p class="mb-4">Silahkan Masuk Untuk Melanjutkan</p>
            </div>
            <form action="<?php echo URL; ?>/Dashboard/index" method="post">
              <div class="form-group first mb-2">
                <label for="username">Masukkan Username</label>
                <input type="text" class="form-control" name="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Masukkan Password</label>
                <input type="password" class="form-control" name="password">
                
              </div>
              
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?= AST ?>/login_assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= AST ?>/login_assets/js/popper.min.js"></script>
    <script src="<?= AST ?>/login_assets/js/bootstrap.min.js"></script>
    <script src="<?= AST ?>/login_assets/js/main.js"></script>
  </body>
</html>