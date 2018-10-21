<meta charset="utf-8">
<?php
  session_start();
	include ('database.php');
	if (isset($_SESSION['login'])) {
		# do nothing...
	}else{
		echo "<script> alert('Você deve estar logado para realizar esta operação!');window.location.href='login.php';</script>";
	}
?>
 <html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:ALERTA:.</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark" onload="getLocation()">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
            <!--<p id="demo"></p-->
        <div class="card-header">Alerta</div>
        <div class="card-body">
          <?php
      			session_start();
      			if(@$_POST['opcao']){
      				$lat=$_POST['lat'];
      				$long=$_POST['long'];
      				$opcao=$_POST['opcao'];
      				$sql="insert into alertas (lat,long,opcao,pessoa_codigo) values ('$lat','$long','$opcao','$pessoa') ";
      				if($mysqli->query($sql)){echo "<script>alert('deu boa');</script>";}
      			}

			  ?>
          <form method="POST">
            <center>
          	<input type="button" class="btn btn-success" name="opcao" value="Situação normalizada">
          	<br>
          	<br>
          	<input type="button" class="btn btn-warning" name="opcao" value="Situação ficando perigosa">
          	<br>
          	<br>
          	<input type="button" class="btn btn-danger" name="opcao" value="Situação perigosa">
          	<br>
          </center>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">HOME</a>
          </div>
        </div>
      </div>
    </div>
    <script>
        // var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);

            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }
        
        function showPosition(position) {

            var longitude = position.coords.longitude;
            document.getElementById('id_longitude').value =  longitude;

            latitude = position.coords.latitude;
            document.getElementById('id_latitude').value =  latitude;
        }

    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>