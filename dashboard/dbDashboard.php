<?php	

	session_start();
	$idPessoa = $_SESSION['idPessoa'];

	include ('../database.php');
                                            
	$sql = "SELECT CONCAT(YEAR(data), '-', month(data)) as ano, opcao, count(opcao) as soma FROM alertas ".
		"WHERE pessoas_codigo = '" . $idPessoa . "' ".
		"group by ano, opcao";
	$query = $mysqli->query($sql);
	
	$rows = [];
	while ($row = $query->fetch_array(MYSQLI_ASSOC)){
		array_push($rows, $row);
	}
	$json = json_encode($rows);
	echo $json;
	
                                        
?>