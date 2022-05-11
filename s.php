<?php
			
			require_once('bdd.php');
			

				$id_candidat = $_POST['id_candidat'];
				
				$date_debut=$_POST['date_debut'];
				
				$date_fin=$_POST['date_fin'];
				
					
	
     								
				$sql = "INSERT INTO stage ( id_candidat, date_debut, date_fin)
				VALUES ('$id_candidat','$date_debut','$date_fin')";
							
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
							
													
				$sql = "UPDATE candidat SET  situation_candidat = 'En stage' WHERE id_candidat = $id_candidat";

	
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
							header('location: liste_retenue.php');

				
			
		?>
	
