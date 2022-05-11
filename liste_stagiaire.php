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

		<div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
	
			<div class="carousel-inner text-center">
		
				<div class="item">
					<img src="./asset/slider-img1.jpg" alt="Slide 1" class="img-responsive">
					<div class="carousel-caption hidden-xs">
						<h1 class="text-light">Liste des Stagiaire</h1>
						 <h5 class="text-light">Greatcall center</h5>
						
					</div>
				</div>
			
				<div class="item active">
					<img src="./asset/slider-img2.jpg" alt="Slide 2" class="img-responsive">
					<div class="carousel-caption hidden-xs">
					<h1 class="text-light">Liste des Stagiaire</h1>
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
				<h6 class="text-center text-light text-grey-color"><em>Liste des Stagiaire</em></h6>
			
		</section>
		

	<div class="container col-md-12">
		
  <div class="class col-md-12">
     
   <?php 
require_once('bdd.php');
			
				?>
<div class="">
 
            <div class="minheight-right-nav-data form-group ">
              <table id="data_report" class="table table-striped font-res" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" >
                     
  <thead>
                      <tr bgcolor="#2896df">
					  
					  <td>
					  <p style='color:#fff;'>Cin</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Nom</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Telephone</p>
					  </td>
					  
					  
					  <td>
					  <p style='color:#fff;'>Niveau</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Date dépot</p>
					  </td>
					  
					  
					  <td>
					  <p style='color:#fff;'>Detail</p>
					  </td>
					 <td>
					  <p style='color:#fff;'>Abondon</p>
					  </td>
					 <td>
					  <p style='color:#fff;'>Affectation</p>
					  </td>
                     </tr>
					  </thead>
					                          <tbody>
					<?php
					
							
					$sql = "select * FROM candidat where situation_candidat = 'En stage'  ORDER BY id_candidat desc" ;
    foreach  ($bdd->query($sql) as $row) {
								
					?>
								
			   <tr>
			   <td><?php echo $row['cin']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['niveau_etude']; ?></td>
                <td><?php echo $row['datedepot']; ?></td>
							
				<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id_candidat']; ?>">Détail</button>
</td>
<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myMod<?php echo $row['id_candidat']; ?>">Statut</button>
</td>



<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModaffectation<?php echo $row['id_candidat']; ?>">Affectation</button>
</td>     




							
							</tr>
						<div class="container">
						<!----------------------------------------------------------------------------------------->	
						<!------------------------------->
						
						
						<div class="modal fade" id="myMod<?php echo $row['id_candidat']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Statut candidat</h4>
        </div>
        <div class="modal-body">
		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" method="POST" action="abn.php">
     
		 <input type="hidden" value="<?php echo $row['id_candidat']; ?>" id="id_candidat" name="id_candidat"/>   
            <button type="submit" id="abondantformation" name="abondantformation" class="btn btn-primary btn-block">Abondant lors de la formation</button>
			  <button type="submit" id="abondantstage" name="abondantstage" class="btn btn-warning btn-block">Abondant lors du stage</button>
			    <button type="submit" id="abondantposte" name="abondantposte" class="btn btn-danger btn-block">Abondant lors du poste</button>
        </form>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!---------------------------------------------------modalaffectation-------------------------------------------->
  <div class="modal fade" id="myModaffectation<?php echo $row['id_candidat']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Affectation candidat</h4>
        </div>
        <div class="modal-body">
		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" method="POST" action="aff.php">
     
		 <input type="hidden" value="<?php echo $row['id_candidat']; ?>" id="id_candidat" name="id_candidat"/>   
		
            <div class="form-group">
      <label class="control-label col-md-2" for="email">Nom:</label>
      <div class="col-md-10">
        <input type="text" value="<?php echo $row['nom']; ?>" class="form-control"  readonly />
      </div>
    </div><br><br>
	<div class="form-group">
	<label class="control-label col-md-2" for="email">Email:</label>
      <div class="col-md-10">
        <input type="text"  id="email" name="email" class="form-control"   />
      </div>
    </div><br><br>
	<div class="form-group">
	<label class="control-label col-md-2" for="email">Password:</label>
      <div class="col-md-10">
	  <input type="text"  class="form-control"  id="passe" name="passe"/>
      </div>
    </div><br><br>
	<div class="form-group">
    <label class="control-label col-md-2" for="email">Type:</label>
      <div class="col-md-10">
  
	  <select id="type_utilisateur" name="type_utilisateur" class="form-control">
                        
                        
                        
                        <option value="user" > User </option>
						<option value="admin" > Admin</option>
                        
						
                        
                      </select>
       
	</div>
  </div><br><br> 
	
	 <div class="form-group">
      <label class="control-label col-md-2" for="email">Affectation:</label>
      <div class="col-md-10">
        <input type="text"  class="form-control"  id="affectation" name="affectation"/>
      </div>
    </div><br><br>
	<div class="form-group">
      <label class="control-label col-md-2" for="email">Contrat:</label>
      <div class="col-md-10">
	  <input type="file" class="filestyle form-control" id="pfile" name="pfile" data-input="false">
      </div>
    </div><br><br>
	
	 <div class="form-group">
      <label class="control-label col-md-2" for="email">Date affectation:</label>
      <div class="col-md-10">
        <input type="date"  class="form-control"  id="date_signature_contrat" name="date_signature_contrat"/>
      </div>
    </div><br><br>
	
	
	
		</div>
        <div class="modal-footer">
		<button type="submit" id="submitaffectation" name="submitaffectation" class="btn btn-danger ">Affectation </button>
       
		   
        </form>
		   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!----------------------------------------------------------------------------------------------->
  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $row['id_candidat']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Détail Candidat</h4>
        </div>
        <div class="modal-body">
		<!--------------------------------->
			<div class="row">
		<ul class="">
		<div class="col-md-12"><strong>Cin :</strong><?php echo $row['cin']; ?></div>
        <div class="col-md-12"><strong>Nom :		</strong>	<?php echo $row['nom']; ?></div>
        <div class="col-md-12"><strong>Telephone :</strong>			<?php echo $row['telephone']; ?></div>
		<div class="col-md-12"><strong>1 personne a appler en cas d'accident:</strong>			<?php echo $row['telephone1']; ?></div>
		<div class="col-md-12"><strong>2 personne a appler en cas d'accident :</strong>	<?php echo $row['telephone2']; ?></div>
		<div class="col-md-12"><strong>Fix :</strong>		<?php echo $row['fix']; ?></div>
		<div class="col-md-12"><strong>Adresse :</strong>		<?php echo $row['adresse']; ?></div>
		<div class="col-md-12"><strong>Date naissance :</strong>		<?php echo $row['date_naissance']; ?></div>
		<div class="col-md-12"><strong>Situation familiale:</strong>		<?php echo $row['situation_familiale']; ?></div>
		<div class="col-md-12"><strong>Niveau d'etude:	</strong>	<?php echo $row['niveau_etude']; ?></div>
		<div class="col-md-12"><strong>Experience professionnelle:</strong>		<?php echo $row['experience_pro']; ?></div>
		<div class="col-md-12"><strong>Experience call center :		<?php echo $row['experience_cc']; ?></div>
		<div class="col-md-12"><strong>1 langue :</strong>	<?php echo $row['p_langue']; ?></div>
		<div class="col-md-12"><strong>2 langue :</strong>	<?php echo $row['d_langue']; ?></div>
		<div class="col-md-12"><strong>Formation :</strong>		<?php echo $row['formation']; ?></div>
		<div class="col-md-12"><strong>Source :</strong>		<?php echo $row['source']; ?></div>
		<div class="col-md-12"><strong>Disponibilité :</strong>		<?php echo $row['disponibilite']; ?></div>
    <div class="col-md-12"><strong>Date depot :</strong>		<?php echo $row['datedepot']; ?></div>
		<div class="col-md-12"><strong>Situation candidat :</strong>		<?php echo $row['situation_candidat']; ?></div>
		<div class="col-md-12"><strong>CV :</strong>	<a href="<?php echo $row['cv']; ?>" download> Telecharger <a></div>
							
      </ul>
		
              </div>
		<!------------------------------>
	<div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <a type="button" class="btn btn-danger" href="./update.php?id=<?php echo $row['id_candidat']; ?>"> Modifier</a>
        </div>
      </div>
      
    </div>
  </div>
 
  


  

  
				
							  
							 <?php
	} ?>


					</tbody>
													</table>
													</div>
                                            </div>
							<script>
                $(document).ready(function() {
                $('#data_report').DataTable();
               
                });</script>

				                       
  </div>
  
</div>
  <div class="col-md-2">
 <!-- <img src="./assets/about.png" height="800px" width="100%"  alt="Image">
      -->
	 
  </div>
  
</div>

</body>
</html>

  </div>

<!---------------------------------------------------------------------------------->
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
					
					</div>
				
					<div class="col-sm-4 col-xs-12">
					<p class="text-center">
							© Greatcall All Rights Reserved | By <a href="https://www.instagram.com/yassine.essammah/">Yassine es sammah</a>
						</p>
					</div>
				
					<div class="col-sm-4 col-xs-12">
						
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
	
</body></html>