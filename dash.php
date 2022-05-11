<!DOCTYPE html>
<html lang="en" >
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Greatcall - RH</title>

	
		<link href="./asset/bootstrap.min.css" rel="stylesheet">

		<link href="./asset/css" rel="stylesheet">

		<link href="./asset/font-awesome.min.css" rel="stylesheet">
		<link href="./asset/owl.carousel.css" rel="stylesheet">
		<link href="./asset/owl.theme.css" rel="stylesheet">
		<link href="./asset/magnific-popup.css" rel="stylesheet">
		<link href="./asset/style.css" rel="stylesheet">
		<link href="./asset/responsive.css" rel="stylesheet">
		
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css"/>

	
	
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	</head>
	<body>

		<div id="top-bar" class="top-bar hidden-xs">

			<div class="container text-center-xs">
	
				<div class="row">
		
					<div class="col-sm-6 col-xs-12 text-grey-color">
						<strong class="text-spl-color">Greatcall</strong> Service RH online.
					</div>
			
					
				
				</div>
		
			</div>
	
		</div>
	
<?php require_once('nav.php');?>

		

		<!--<div class="info-bar">
		
			<div class="container text-center">
			
				<div class="row">
					<div class="col-sm-8 col-xs-12">
						<h4 class="text-lite-color">Looking For a Quality Bootstrap One Page Template for your Project?</h4>
					</div>
					<div class="col-sm-4 col-xs-12">
						<a href="" class="btn btn-lite animation flat">Purchase Now</a>
					</div>
				</div>
			
			</div>
		
		</div>-->

		<section id="about" class="section about-section">
		
			<div class="container text-center-xs">
			
				<h3 class="main-heading-1 text-center"><strong>Greatcall</strong> <span class="text-spl-color"> RH</span></h3>
		<h6 class="text-center text-light text-grey-color"><em>Dashboard.</em></h6>
			
		</section>
		

	<div class="container col-md-12">
		

     
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-address-card-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
			<?php require_once('bdd.php');
			$sql = "SELECT count(*) FROM candidat where situation_candidat='Salarier'"; 
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn();
echo '<p class="announcement-heading">'.$number_of_rows.'</p>';?>
                
                <p class="announcement-text">Salarie</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
				<a href="listesalarie.php">Détail</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-handshake-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <?php require_once('bdd.php');
			$sql = "SELECT count(*) FROM candidat where situation_candidat in('Entretien Physique','Entretien Telephonique')"; 
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn();
echo '<p class="announcement-heading">'.$number_of_rows.'</p>';?>
                <p class="announcement-text"> Entretien</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
				<a href="entretien_telephonique.php">Détail</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                 <?php require_once('bdd.php');
			$sql = "SELECT count(*) FROM candidat where situation_candidat='attente'"; 
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn();
echo '<p class="announcement-heading">'.$number_of_rows.'</p>';?>
                <p class="announcement-text">Liste d'attente</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
				<a href="liste_attente.php">Détail</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-graduation-cap fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <?php require_once('bdd.php');
			$sql = "SELECT count(*) FROM formation"; 
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn();
echo '<p class="announcement-heading">'.$number_of_rows.'</p>';?>
                <p class="announcement-text">Formation en cours</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
				<a href="liste_formation.php">Détail</a>
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div><!-- /.row -->
    </div>
	</div>
  </div>
	

<div class="container">
<div class="row"> 
<div class="col-md-6"> 
  <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
  <br>
 <CENTER> <p> <B>Taux des candidature par jours</B></p></CENTER>
</div>

<div class="col-md-6"> 
<canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
 <CENTER> <p> <B>Statistique des Candidat</B></p></CENTER>
</div>
  </div>
  </div>


	

		<section class="footer-top">
		
			<div class="container text-center">
		
				<!--<img src="./asset/logo.png" alt="Digital Plus" class="img-responsive img-center foot-brand">-->
	
				<div class="row">
			<!--
					<ul class="list-unstyled col-sm-3 col-xs-12">
						<li><i class="fa fa-map text-spl-color"></i></li>
						<li><h5>Address</h5></li>
						<li>Hourse No. 232/GH, Green Hills Colony<br>
						Medhipatnam, Hyd-021.</li>
					</ul>
				
					<ul class="list-unstyled col-sm-3 col-xs-12">
						<li><i class="fa fa-envelope text-spl-color"></i></li>
						<li><h5>Have any questions ?</h5></li>
						<li>
							<a href="mailto&nbsp:support@youremail.com">support@youremail.com</a><br>
							<a href="mailto&nbsp:info@youremail.com">info@youremail.com</a>
						</li>
					</ul>
				
					<ul class="list-unstyled col-sm-3 col-xs-12">
						<li><i class="fa fa-phone text-spl-color"></i></li>
						<li><h5>Call Us</h5></li>
						<li>+91-001-89745-1201<br>
						001-234-89745-121</li>
					</ul>
			
					<ul class="list-unstyled col-sm-3 col-xs-12">
						<li><i class="fa fa-fax text-spl-color"></i></li>
						<li><h5>Fax</h5></li>
						<li>(+91) 123 456 78901<br>
						(+91) 123 456 78902</li>
					</ul>-->
			
				</div>
			
			</div>
		
		</section>
	
		<footer class="main-footer">
		
			<div class="container text-center-xs">
			
				<div class="row">
				
					<div class="col-sm-4 col-xs-12">
						<!--<ul class="list-unstyled list-inline">
							<li><a href="">Home</a></li>
							<li><a href="">Privacy</a></li>
							<li><a href="">Terms</a></li>
							<li><a href="">Contact</a></li>
						</ul>-->
					</div>
				
					<div class="col-sm-4 col-xs-12">
					<p class="text-center">
							© Greatcall All Rights Reserved | By <a href="https://www.instagram.com/yassine.essammah/">Yassine es sammah</a>
						</p>
					</div>
				
					<div class="col-sm-4 col-xs-12">
						<!--<ul class="list-unstyled list-inline sm-links pull-right-lg pull-right-md pull-right-sm">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-tumblr"></i></a></li>
							<li><a href=""><i class="fa fa-youtube-play"></i></a></li>
						</ul>-->
					</div>
				<!-- Social Media Links Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</footer>
	<!-- Footer Ends -->

	 <!--<script src="js/bootstrap.min.js"></script>	
	<script src="./asset/jquery-migrate-1.4.1.min.js.téléchargement"></script>	
	<script src="./asset/bootstrap.min.js.téléchargement"></script>
	<script src="./asset/jquery.nav.js.téléchargement"></script>-->
	<script src="./asset/owl.carousel.js.téléchargement"></script>
	<script src="./asset/jquery.shuffle.modernizr.min.js.téléchargement"></script>
	<script src="./asset/jquery.magnific-popup.min.js.téléchargement"></script>
	<script src="./asset/custom.js.téléchargement"></script>
	<script>
		var xValues = [1,2,3,4,5,6,7,8,9,10,11];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];
//var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];
//var yValues = [17,39,81,96,99,90,102,121,140,114,159,163];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
<script>
var xValues = ["Candidature", "Entretien","Retenu", "En stage",  "Abandan"];
var yValues = [79, 49, 44, 24, 7];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    
  }
});
</script>

</body></html>