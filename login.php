<?php
	session_start();
  include "database.php";
	if (isset($_SESSION['login'])) {
		header('location:index.php');
	}
	if (@$_POST['Login']=="Submit") {
	  $login=$_POST['login'];
		$senha=$_POST['senha'];
		$sql = "select * from pessoas where login = '$login' and senha = '$senha'";
		$query = $mysqli->query($sql);
		if($query->num_rows >= 1){
			$_SESSION['login'] = 'logado';
			$q="SELECT id FROM pessoas WHERE login='$login'";
			$_SESSION['pessoa']=$mysqli->query($q);
			header('location:index.php');
		}else{echo"<script>alert('não foi possível realizar o login!');</script>";}
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          
          <form method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Login" name="login">
                <label for="inputEmail">Login</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha">
                <label for="inputPassword">Senha</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="Login" value="Submit">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="cadastroPessoas.php">Cadastre-se</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
