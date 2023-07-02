<?php session_start();
  if( isset( $_SESSION['token'] ) && time() - $_SESSION['login_time'] < 1800)
    header('Location: buscador.php');
  include 'functions.php';?>
<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=ENTERPRISE?></title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/jquery.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.js"></script>
<style>
  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
div.img{
    background: url('./assets/img/logopng.png') no-repeat center;
    background-size: contain;
    width: 100%;
    height: 100px;
}
</style>
<body class="text-center">
    <form method="post" action="login.php" class="form-signin">
    <div class="img"></div>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="jesus.garcia@inverforx.com.mx" required autofocus >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="TestInv01" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
</body>
</html>
