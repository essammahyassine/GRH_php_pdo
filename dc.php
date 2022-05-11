<?php
			
			require_once('bdd.php');
			
			
				
				
				$id_candidat =$_POST['id_candidat'];
				
				$type_conge=$_POST['type_conge']; 
				
				$date_debut=$_POST['date_debut'];
				
				$nombre_de_jour=$_POST['nombre_de_jour'];
				
                            	
	
     								
				$sql = "INSERT INTO conge ( id_candidat, type_conge, date_debut,nombre_de_jour,statu_demande)
				VALUES ($id_candidat,'$type_conge','$date_debut','$nombre_de_jour','en cours')";
							
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
							header('location: mes_demande_conge.php');

				
			
		?>
	
