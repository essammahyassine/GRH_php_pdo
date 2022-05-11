<?php
			
			require_once('bdd.php');
			
			
				
				
				$id_candidat =$_POST['id_candidat'];
				
				$demande_document=$_POST['demande_document']; 
				
			
				
               
     								
				$sql = "INSERT INTO document ( id_candidat, demande_document,statu_demande)
				VALUES ($id_candidat,'$demande_document','en cours')";
							
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
							header('location: mes_demande_document.php');

				
			
		?>
	
