<!DOCTYPE html>
<html lang="en" class=" js csstransforms csstransforms3d csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Kglink - RH</title>

	
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
						<strong class="text-spl-color">Kglink</strong> Service RH online.
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
	
<?php require_once('nav.php');?>

		<div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
	
			<div class="carousel-inner text-center">
		
				<div class="item">
					<img src="./asset/slider-img1.jpg" alt="Slide 1" class="img-responsive">
					<div class="carousel-caption hidden-xs">
						<h1 class="text-light">Kglink</h1>
						 <h5 class="text-light">Kglink call center</h5>
						
					</div>
				</div>
			
				<div class="item active">
					<img src="./asset/slider-img2.jpg" alt="Slide 2" class="img-responsive">
					<div class="carousel-caption hidden-xs">
						<h1 class="text-light">Kglink </h1>
						 <h5 class="text-light">Kglink call center</h5>
						
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
			
				<h3 class="main-heading-1 text-center"><strong>Kglink</strong> <span class="text-spl-color"> RH</span></h3>
				<h6 class="text-center text-light text-grey-color"><em>Service RH online</em></h6>
			
		</section>
		

	<div class="container ">
			


		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" class="form-horizontal"method="POST" action="up.php">
          
      <!-- <form class="form-horizontal">-->
	<?php
	require_once('bdd.php');
	if(isset($_GET['id'])){
$tf=$_GET['id'];
	$sql =  "select * FROM candidat where id='$tf'";
    foreach  ($bdd->query($sql) as $row) {	}	}	
		?>
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>"  >

		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Imatriculation:</label>
  <input type="text" class="form-control" id="imatriculation" name="imatriculation" value="<?php echo $row['imatriculation']; ?>" readonly >
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">CIN:</label>
  <input type="text" class="form-control" id="cin" name="cin" value="<?php echo $row['cin']; ?>">
</div></div>

		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Nom:</label>
  <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row['nom']; ?>">
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Telephone:</label>
  <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $row['telephone']; ?>">
</div></div>

   	<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">1 perssone à appeler en cas d'accident:</label>
  <input type="text" class="form-control"  id="telephone1" name="telephone1" value="<?php echo $row['telephone1']; ?>" placeholder="1 perssone à appeler en cas d'accident">
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">2 perssone à appeler en cas d'accident:</label>
  <input type="text" class="form-control" id="telephone2" name="telephone2" value="<?php echo $row['telephone2']; ?>" placeholder="2 perssone à appeler en cas d'accident">
</div></div>
    
	
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Fixe:</label>
  <input type="text" class="form-control"  id="fixe" name="fixe" value="<?php echo $row['fixe']; ?>">
</div></div> 
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Adresse:</label>
  <input type="text" class="form-control"  id="adresse" name="adresse" value="<?php echo $row['adresse']; ?>">
</div></div>
	
  
<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Naissance:</label>
 <input type="date" class="form-control" id="datenaissance" name="datenaissance" value="<?php echo $row['datenaissance']; ?>" >
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Situation:</label>
  <input type="text" class="form-control" id="situation" name="situation" value="<?php echo $row['situation']; ?>" >
</div></div>
  
  

<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Niveau:</label>
   <input type="text" class="form-control" id="niveau" name="niveau" value="<?php echo $row['niveau']; ?>" >

 
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Experience:</label>
        <input type="text" class="form-control" id="experience" name="experience" value="<?php echo $row['experience']; ?>" >

		</div></div>  
   
 
  <div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Experience Call Center:</label>
    <input type="text" class="form-control" id="experiencecallcenter" name="experiencecallcenter" value="<?php echo $row['experiencecallcenter']; ?>">
     </div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">1 Langue:</label>
   <input type="text" class="form-control" id="1langue" name="1langue" value="<?php echo $row['1langue']; ?>">
  

</div></div>
 
  
   <div class=" col-md-5">
	<div class="form-group">
  <label for="usr">2 Langue:</label>
   <input type="text" class="form-control" id="2langue" name="2langue" value="<?php echo $row['2langue']; ?>">
  

</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Formation:</label>
   <input type="text" name="formation"  class="form-control" id="formation" value="<?php echo $row['formation']; ?>">
  
                
</div></div> 
   
   

   <div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Source:</label>
  <input type="text" id="source" name="source" class="form-control" value="<?php echo $row['source']; ?>">
  

</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Description:</label>
       	<input type="text" class="form-control" id="descriptionsource" name="descriptionsource"  value="<?php echo $row['descriptionsource']; ?>">
</div></div> 

   
   
   
   
   
   
   	<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Affectation:</label>
    <input type="text" class="form-control" id="affectation" name="affectation" value="<?php echo $row['affectation']; ?>" >
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Date Affectation:</label>
    <input type="text" class="form-control" id="dateaffectation" name="dateaffectation" value="<?php echo $row['dateaffectation']; ?>">
</div></div> 


	<div class=" col-md-5">
	<div class="form-group">
 <label for="usr">Date debut de formation:</label>
    <input type="text" class="form-control" id="debutformation" name="debutformation" value="<?php echo $row['debutformation']; ?>">
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Date fin de formation:</label>
    <input type="text" class="form-control" id="finformation" name="finformation" value="<?php echo $row['finformation']; ?>">
</div></div> 

<div class=" col-md-5">
	<div class="form-group">
 <label for="usr">Date debut de stage:</label>
    <input type="text" class="form-control" id="debutstage" name="debutstage" value="<?php echo $row['debutstage']; ?>">
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Date fin de stage:</label>
    <input type="text" class="form-control" id="finstage" name="finstage" value="<?php echo $row['finstage']; ?>">
</div></div> 
 
	
  	<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">Date Depot:</label>
    <input type="date" class="form-control" id="datedepot" name="datedepot" value="<?php echo $row['datedepot']; ?>" >
</div></div>
<div class=" col-md-2"></div>
		<div class=" col-md-5">
	<div class="form-group">
  <label for="usr">CV:</label>
	<input type="file" class="filestyle" id="pfile" name="pfile" " data-input="false">
</div></div>



	

	
	
	<div class="col-md-12">
     <div class="form-group col-md-6"> 

       <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
      </div>
	  
    
    </div>
	<div class="form-group col-md-6"> 

       <div class="col-md-12">
        <button type="reset" class="btn btn-danger btn-block">Vider</button>
      </div>
	  
    
    </div> </div>
	
	
	
  </form>
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
							© Kglink All Rights Reserved
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