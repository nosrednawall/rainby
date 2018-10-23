<meta charset="utf-8">
<?php
	session_start();
	if(isset($_SESSION['login'])){
		#do nothing
		}else{
			header('location:/login');
		}
	if (@$_POST['botao']=="HOME"){
      header('location:index.php');		  
		}
?>
<style type="text/css">
  <--
  @font-face {
		     font-family: letra;
		     src: url('HEINEKEN.ttf');
		}
		-->
</style>
 <html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:ALERTA:.</title>
    <link href="css/alarme.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body class="bg-dark" onload="getLocation()">
    <div class="container-fluid">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Alerta</div>

          <form action="dbAlerta.php">
  
            <div class="row">
              <div class="col-sm-4 col-xs-12">
              	<font face="letra"><input type="submit" class="btn btn-success btn-block btn-btn-lg" name="opcao1" id="1" value="Situação normalizada"></font>
            	</div>

              <div class="col-sm-4 col-xs-12">
            	  <font face="letra"><input type="submit" class="btn btn-warning btn-block btn-btn-lg" name="opcao2" id="2" value="Situação de alerta"></font>
            	</div>
          
              <div class="col-sm-4 col-xs-12">
              <font face="letra"><input type="submit" class="btn btn-danger btn-block btn-btn-lg" name="opcao3" id="3" value="Situação perigosa"></font>
            	</div>
          	</div>
          	
          	<input type="hidden" name="id_longitude" id="id_longitude" />
          	<input type="hidden" name="id_latitude" id="id_latitude" />
          	</form>
          	<form method="POST">
          <div class="text-center">
            <input type="submit" name="botao" value="HOME" class="btn3 btn-info btn-lg">
          </div>
          </form>
      </div>
    </div>
    <script>
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
            x=longitude;

            latitude = position.coords.latitude;
            document.getElementById('id_latitude').value =  latitude;
            y=latitude;
        }

    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
