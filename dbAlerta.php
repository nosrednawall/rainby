<?php	

	session_start();
	$idPessoa = $_SESSION['idPessoa'];

	include ('database.php');

    $lat = $_GET['id_latitude'];
    $long = $_GET['id_longitude'];
    $data = date("Y-m-d");
    $hora = date("H:i:s");    
    
    if($_GET['opcao1'] != null){
    	$opcao = '1';
    }
    if($_GET['opcao2'] != null){
    	$opcao = '2';
    }
    if($_GET['opcao3'] != null){
    	$opcao = '3';
    }    
		
	//cria a query
	$sql = "INSERT INTO alertas (data, hora, latitude, longitude, opcao, pessoas_codigo) VALUES ('$data', '$hora', '$lat', '$long', '$opcao', '$idPessoa')";

	echo $sql;

	$query = $mysqli->query($sql);
	
	if($query){
	  	header('location:/dashboard');
	}		
?>