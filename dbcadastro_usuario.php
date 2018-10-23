<?php	
	session_start();

	include ('database.php');

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $login = $_GET['login'];
    $senha = $_GET['senha'];
    $score = 0;
  
    
    if(($nome == null) || ($email == null) || ($login == null) || ($senha == null) || ($score > 0)){
    	echo "<script type='javascript'>alert('Erro ao salvar usuário!');";
    	header('location:/cadastro_usuario.html');
    }
  
		
	//cria a query
	$sql = "INSERT INTO pessoas (nome, email, login, senha, score) 
					VALUES ('$nome', '$email', '$login', '$senha', '$score')";

	echo $sql;

	$query = $mysqli->query($sql);
	
	if($query){
	  	header('location:/index.php');
	}		
?>