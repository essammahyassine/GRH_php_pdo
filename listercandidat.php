<!DOCTYPE html>
<html lang="en">
<head>
  <title>Greatcall-Candidat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      max-height:250px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
  <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
   
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="./assets/kg.png" width="40" height="30" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#">Home</a></li>
        <li><a href="http://kglink-rh.hostkda.com/candidat.php">Candidat</a></li>
        <li class="active"><a href="http://kglink-rh.hostkda.com/listercandidat.php">Liste Candidat</a></li>
           <div class="col-md-6"><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="col-md-6"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://www.entreprises.cci-paris-idf.fr/image/image_gallery?uuid=1b19da2f-e347-456b-828c-c61f6b1664d5&groupId=10139&t=1454313022269"  alt="Image">
        <div class="carousel-caption">
          <h3>Greatcall RH</h3>
          <p>Greatcall RH</p>
        </div>      
      </div>

      <div class="item">
        <img src="http://www.blog.adp.com.br/wp-content/uploads/sites/8/2016/08/analisar-melhor-os-funcion%C3%A1rios.jpg"  alt="Image">
        <div class="carousel-caption">
          <h3>Greatcall RH</h3>
          <p>Greatcall RH...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container ">    
  <h3>Liste des Candidats</h3><br>
  <div class="row">
    
   <div class="class col-md-12">
     
   <?php 
require_once('bdd.php');
			
				?>
<div class="">
 
            <div class="minheight-right-nav-data form-group ">
              <table id="data_report" class="table table-striped font-res" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" >
                     
  <thead>
                      <tr bgcolor="#3ca8e6">
					  
					  <td>
					  <p style='color:#fff;'>Immatricule</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Nom</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Telephone</p>
					  </td>
					  
					  <td>
					  <p style='color:#fff;'>Situation</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Niveau</p>
					  </td>
					  <td>		  
					  <p style='color:#fff;'>Experience</p>
					  </td>
					 <td>
					  <p style='color:#fff;'>Status</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Detail</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Status</p>
					  </td>
					  <td>
					  <p style='color:#fff;'>Entretien</p>
					  </td>
					 
                     </tr>
					  </thead>
					                          <tbody>
					<?php
					
							
								$sql = 'select * FROM candidat ORDER BY id desc' ;
    foreach  ($bdd->query($sql) as $row) {
								
					?>
								
			   <tr>
						<td><?php echo $row['imatriculation']; ?></td>
							<td><?php echo $row['nom']; ?></td>
							<td><?php echo $row['telephone']; ?></td>							
							<td><?php echo $row['situation']; ?></td>
							<td><?php echo $row['niveau']; ?></td>
							<td><?php echo $row['experience']; ?></td>
							<td><?php echo $row['status']; ?></td>
							
							<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">Détail</button>
</td>
<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myMod<?php echo $row['id']; ?>">Stautue</button>
</td>
<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModent<?php echo $row['id']; ?>">Entretien</button>
</td>
							<!--<a data-toggle="modal" data-target="#mymodal<?php echo $row['id']; ?>"> <img src="./assets/plus.png" ></a>-->
							
							</tr>
						<div class="container">
						<div class="modal fade" id="myModent<?php echo $row['id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Entretien candidat</h4>
        </div>
        <div class="modal-body">
		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" method="POST" action="addEvent.php">
     
		<input type="hidden" value="<?php echo $row['imatriculation']; ?>" id="imatricul" name="imatricul"/>
		
		<input type="hidden" value="<?php echo $row['id']; ?>" id="ida" name="ida"/>
		 <div class="form-group">
      <label class="control-label col-md-2" for="email">Date debut:</label>
      <div class="col-md-10">
	   <input type="datetime-local" class="form-control" id="start" name="start"/>
    <!--<input type="datetime-local" class="form"-->
      </div>
    </div>
		<br>
	<br>
		 <div class="form-group">
      <label class="control-label col-md-2" for="email">Date fin:</label>
      <div class="col-md-10">
	   <input type="datetime-local" class="form-control" id="end" name="end"/>
    <!--<input type="datetime-local" class="form"-->
      </div>
    </div>
	<br>
	<br>
            <div class="form-group">
      <label class="control-label col-md-2" for="email">Nom:</label>
      <div class="col-md-10">
        <input type="text" value="<?php echo $row['nom']; ?>" class="form-control"  id="title" name="title"/>
      </div>
    </div>
			
			     
		</div>
        <div class="modal-footer">
		<button type="submit"  class="btn btn-primary ">Enregistrer</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </form>
		</div>
      </div>
      
    </div>
  </div>
						<!------------------------------->
						
<div class="modal fade" id="myMod<?php echo $row['id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Status candidat</h4>
        </div>
        <div class="modal-body">
		 <form accept-charset="utf-8" method="post" enctype="multipart/form-data" id="UserProfileForm" method="POST" action="abn.php">
     
		<input type="hidden" value="<?php echo $row['id']; ?>" id="ida" name="ida"/>
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
  <!-- Trigger the modal with a button -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $row['id']; ?>" role="dialog">
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
        <div class="col-md-12"><strong>imatriculation :	<?php echo $row['imatriculation']; ?></div>
        <div class="col-md-12"><strong>cin :</strong><?php echo $row['cin']; ?></div>
        <div class="col-md-12"><strong>nom :		</strong>	<?php echo $row['nom']; ?></div>
        <div class="col-md-12"><strong>telephone :</strong>			<?php echo $row['telephone']; ?></div>
		<div class="col-md-12"><strong>1 personne a appler en cas d'accident:</strong>			<?php echo $row['telephone1']; ?></div>
		<div class="col-md-12"><strong>2 personne a appler en cas d'accident :</strong>	<?php echo $row['telephone2']; ?></div>
		<div class="col-md-12"><strong>fixe :</strong>		<?php echo $row['fixe']; ?></div>
		<div class="col-md-12"><strong>adresse :</strong>		<?php echo $row['adresse']; ?></div>
		<div class="col-md-12"><strong>date naissance :</strong>		<?php echo $row['datenaissance']; ?></div>
		<div class="col-md-12"><strong>situation :</strong>		<?php echo $row['situation']; ?></div>
		<div class="col-md-12"><strong>niveau :	</strong>	<?php echo $row['niveau']; ?></div>
		<div class="col-md-12"><strong>experience :</strong>		<?php echo $row['experience']; ?></div>
		<div class="col-md-12"><strong>experience call center :		<?php echo $row['experiencecallcenter']; ?></div>
		<div class="col-md-12"><strong>1langue :</strong>	<?php echo $row['1langue']; ?></div>
		<div class="col-md-12"><strong>2langue :</strong>	<?php echo $row['2langue']; ?></div>
		<div class="col-md-12"><strong>formation :</strong>		<?php echo $row['formation']; ?></div>
		<div class="col-md-12"><strong>source :</strong>		<?php echo $row['source']; ?></div>
		<div class="col-md-12"><strong>datedepot :</strong>		<?php echo $row['datedepot']; ?></div>
		<div class="col-md-12"><strong>Status :</strong>		<?php echo $row['status']; ?></div>
						
      </ul>
		
              </div>
		<!------------------------------>
	<div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <a type="button" class="btn btn-danger" href="./update.php?id=<?php echo $row['id']; ?>"> Modifier</a>
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
  </div>
</div><br>

<footer class="container-fluid text-center">
<p class="text-center">
							© Greatcall All Rights Reserved | By <a href="https://www.instagram.com/yassine.essammah/">Yassine es sammah</a>
						</p>
</footer>

</body>
</html>
