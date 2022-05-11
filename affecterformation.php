<!DOCTYPE html>
<html lang="en" class=" js csstransforms csstransforms3d csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		
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
		
	
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/images/fav-144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/images/fav-114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/images/fav-72.png">
		<link rel="apple-touch-icon-precomposed" href="http://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/images/fav-57.png">
		<link rel="shortcut icon" href="http://sainathchillapuram.com/BS/CreativePlus/demo/Digital-Agency/images/fav.png">
		 	</head>
	<body>

		<div id="top-bar" class="top-bar hidden-xs">

			<div class="container text-center-xs">
	
				<div class="row">
		
					<div class="col-sm-6 col-xs-12 text-grey-color">
						<strong class="text-spl-color">Greatcall</strong> Service RH online.
					</div>
			
					<div class="col-sm-6 col-xs-12">
						<ul class="list-unstyled list-inline top-sm-links text-right-lg text-right-md text-right-sm animation">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-tumblr"></i></a></li>
							<li><a href=""><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				
				</div>
		
			</div>
	
		</div>
	
<?php //require_once('nav.php');?>

		<div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
	
			<div class="carousel-inner text-center">
		
				<div class="item">
					<img src="./asset/slider-img1.jpg" alt="Slide 1" class="img-responsive">
					<div class="carousel-caption hidden-xs">
						<h1 class="text-light">Formation</h1>
						 <h5 class="text-light">Greatcall center</h5>
						
					</div>
				</div>
			
				<div class="item active">
					<img src="./asset/slider-img2.jpg" alt="Slide 2" class="img-responsive">
					<div class="carousel-caption hidden-xs">
						<h1 class="text-light">Formation </h1>
						 <h5 class="text-light">Greatcall center</h5>
						
					</div>
				</div>
		
			</div>
	
		</div>

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
				<h6 class="text-center text-light text-grey-color"><em>Affecter un candidat a une formation</em></h6>
			
		</section>
		

	<div class="container ">
			

		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" class="form-horizontal"method="POST" action="a.php">
          
<div class="col-md-2 " >
 </div>
 <div class="col-md-8" >
	<?php
	require_once('bdd.php');
if (isset($_GET['id'])
){
	$formation=$_GET['id'];
	
	
?>
 <!--<div class="form-group">
  <label for="usr">Formation:</label>-->
<input type="hidden" value="<?php echo $formation;?>" class="form-control"  id="id_formation" name="id_formation" readonly />
 <!--</div>-->
<?php }	?>



	
				  
	
<div class="form-group">
  <label for="usr">Candidat:</label>
					 <select class="form-control" id="id_candidat" name="id_candidat">
   <?php
					
							
								$sql = "select * FROM candidat where situation_candidat='Retenue'" ;
    foreach  ($bdd->query($sql) as $row) {
								
					?>
    <option value="<?php echo $row['id_candidat']; ?>"><?php echo $row['nom']; ?></option>
	<?php }	?>
  </select>
					</div>



 <div class="form-group">
  <label for="usr">Date début:</label>
  <input type="date" class="form-control"  id="datedebut" name="datedebut">
</div>

 <div class="form-group">
  <label for="usr">Date fin:</label>
  <input type="date" class="form-control" id="datefin" name="datefin">
</div>
 
 
 
 
 
 

	
	
	
	
     <div class="form-group "> 

       <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
      </div>
	  
    
    </div>
	<div class="form-group "> 

       <div class="col-md-12">
        <button type="reset" class="btn btn-danger btn-block">Vider</button>
      </div>
	  
    
    </div> 
	</div> 
	 </form>
	
	
   </div> 
  <div class="col-md-2 " >
 </div>
 
 





  
	
	
	
	
	
	
 
  </div>
	

	

		<section class="footer-top">
		
			<div class="container text-center">
		
				<div class="row">
		
			
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
							© Greatcall All Rights Reserved | By yassine es sammah
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
	<!-- Template JS Files -->
	<script src="./asset/jquery-1.12.4.min.js.téléchargement"></script>
	<script src="./asset/jquery-migrate-1.4.1.min.js.téléchargement"></script>	
	<script src="./asset/bootstrap.min.js.téléchargement"></script>
	<script src="./asset/jquery.nav.js.téléchargement"></script>
	<script src="./asset/owl.carousel.js.téléchargement"></script>
	<script src="./asset/jquery.shuffle.modernizr.min.js.téléchargement"></script>
	<script src="./asset/jquery.magnific-popup.min.js.téléchargement"></script>
	<script src="./asset/custom.js.téléchargement"></script>	
	
</body></html>