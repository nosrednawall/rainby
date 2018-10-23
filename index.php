<?php
	session_start();
	if(isset($_SESSION['login'])){
		#do nothing
		}else{
			header('location:/login');
		}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RAIN.by</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">RAIN.by</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="alerta.php">Alerta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/login"> <?php if($_SESSION['login'] ==null){echo"Login";} ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"><u><?php echo $_SESSION['nomePessoa']; ?></u></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase" style="background-color:#0000009a; width:100%; high:100px;">
              <strong>O nosso foco é salvar vidas</strong>
            </h1>
          </div>
        </div>
      </div>
    </header>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">A seu serviço.</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="alerta.php" "email me"></a><i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <a href="alerta.php">
                <h3 class="mb-3">Fazer um Alerta</h3></a>
              <p class="text-muted mb-0">Acesse esta pagina para realizar um alerta!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <a href="/dashboard"><h3 class="mb-3">Dashboard</h3></a>
              <p class="text-muted mb-0">Veja como está se saindo!</p>
            </div>
          </div>
        </div>
      </div>
      </center>
    </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
  </body>

  </html>