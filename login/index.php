<!DOCTYPE html>
<html>
<?php
	session_start();
  include "../database.php";
	if (isset($_SESSION['login'])) {
		header('location:../index.php');
	}
	if (@$_POST['botao']=="Entrar") {
	  $login=$_POST['login'];
		$senha=$_POST['senha'];
		$sql = "select * from pessoas where login = '$login' and senha = '$senha'";
		$query = $mysqli->query($sql);
    $row = $query->fetch_array(MYSQLI_ASSOC);

    //echo "<script>alert('" . $row["codigo"] . "');</script>";

		if($query->num_rows == 1){      
			$_SESSION['login'] = 'logado';
      $_SESSION['idPessoa'] = $row["codigo"];
      $_SESSION['nomePessoa'] = $row['nome'];
      $_SESSION['email'] = $row['email'];      
      
			$q="SELECT id FROM pessoas WHERE login='$login'";
			$_SESSION['pessoa']=$mysqli->query($q);
			header('location:../index.php');
		}else{echo"<script>alert('não foi possível realizar o login!');</script>";}
	}
?>
<head>
  <meta charset="UTF-8">
  <title> Rain.By</title>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="login_form">
  <setion class="login-wrapper">
    
    <div class="logo">
		 <a target="_blank" rel="noopener" href="https://unrealnavigation.com">
		 <img src="/img/RainB.png" alt=""></a>
    </div>
    
    <form id="login" method="post" action="#">
     
      <label for="username">Login</label>
      <input  required name="login" type="text" autocapitalize="off" autocorrect="off"/>
      
      <label for="password">Senha</label>
      <input class="password" required name="senha" type="password" />
      <button type="submit" name="botao" value="Entrar">Entrar</button>
    </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="../cadastro_usuario.html">Cadastre-se</a>
          </div>    
    
  </section>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
