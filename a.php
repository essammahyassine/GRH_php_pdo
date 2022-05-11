<?php
			
			require_once('bdd.php');
			

				$id_candidat = $_POST['id_candidat'];
				$id_formation =$_POST['id_formation'];
				$datedebut=$_POST['datedebut']; 
				$datefin=$_POST['datefin'];
				
			
			
     								
				$sql = "INSERT INTO affectation_formation ( id_candidat, id_formation, datedebut,datefin)
				VALUES ('$id_candidat','$id_formation','$datedebut','$datefin')";
							
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
							
							
				$sql = "UPDATE candidat SET  situation_candidat = 'En formation' WHERE id_candidat = '$id_candidat'";

	
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
	
