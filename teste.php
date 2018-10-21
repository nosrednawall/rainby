<?php
	include_once 'db_conexao.php';

	$database = new Database();
	$db = $database->getConnection();

	$sql = "select * from alertas";

	try{
		//$stmt = $db->prepare($sql);
		if ($stmt->query($sql)){	

			while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)){ 
		    	echo "latitude: " . $registro->longitude;		    		
		    }			    

		}else{
			return -1;
		}
	}catch (PDOException $exception) { 
			//throw $e; 
			echo "<br>ERRO DB: ". $exception->getMessage();
	}
	$stmt->close();		

?>	