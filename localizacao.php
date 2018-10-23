<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

$geoplugin->locate();

	$latitude = $geoplugin->latitude;
	$longitude = $geoplugin->longitude;
	
	$mysqli=new mysqli('localhost','aksvi562_hackton','123456','aksvi562_hackton');
	$sql = "insert into alertas (latitude,longitude,opcao,pessoas_codigo,data,hora) 
        VALUES ('$latitude', '$longitude', '1', '1', '2018/09/16', '12:12')";
				
		$query = $mysqli->query($sql);
		
		if($query){
			echo "Dados salvos com sucesso!";
		}else{
			
			echo "Ocorreu um erro." . '</br>';
			echo $mysqli->error;
			
		}

?>