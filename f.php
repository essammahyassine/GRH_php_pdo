<?php
			
			require_once('bdd.php');
			
			
				
				
				$formateur =$_POST['formateur'];
				
				$projet=$_POST['projet']; 
				
				$date_debut=$_POST['date_debut'];
				
				$date_fin=$_POST['date_fin'];
				
			
                   	
	
     								
				$sql = "INSERT INTO formation ( formateur, projet, date_debut,date_fin)
				VALUES ('$formateur','$projet','$date_debut','$date_fin')";
							
								$query = $bdd->prepare( $sql );
							if ($query == false) {
							 print_r($bdd->errorInfo());
							 die ('Erreur prepare');
							}
							$sth = $query->execute();
							if ($sth == false) {
							 print_r($query->errorInfo());
							die ('Erreur execute');
							
							}
							header('location: liste_formation.php');

				
			
		?>
	
