<?php
			
			require_once('bdd.php');
			
		
			 
		
			  
				
				
				$cin =$_POST['cin'];
				
				$nom=$_POST['nom']; 
				
				$telephone=$_POST['telephone'];
				
				$telephone1=$_POST['telephone1'];
				
				$telephone2=$_POST['telephone2'];
				
				$fix=$_POST['fix'];
				
				$adresse=$_POST['adresse'];
				
				$date_naissance=$_POST['date_naissance'];
			
				$situation_familiale=$_POST['situation_familiale'];
				
				$niveau_etude=$_POST['niveau_etude'];
				
				$experience_pro=$_POST['experience_pro'];
				
				$experience_cc=$_POST['experience_cc'];
				
				$p_langue=$_POST['p_langue'];
				
				$d_langue=$_POST['d_langue'];
				
				$formation=$_POST['formation'];
				$source=$_POST['source'];
				$disponibilite=$_POST['disponibilite'];
				

                   	
	$name_file = $_FILES['pfile']['name'];
	 $tmp_name = $_FILES['pfile']['tmp_name'];
	  $location = 'cv/'; 
	  move_uploaded_file($tmp_name,$location.$name_file);
	  $pfile=$location.$name_file;
     								
				$sql = "INSERT INTO candidat (id_candidat, cin, nom, telephone, telephone1, telephone2, fix, adresse, date_naissance, situation_familiale, niveau_etude, experience_pro, experience_cc, p_langue, d_langue, formation, source, disponibilite,cv,situation_candidat)
				VALUES (NULL, '$cin','$nom','$telephone','$telephone1','$telephone2','$fix','$adresse','$date_naissance','$situation_familiale','$niveau_etude','$experience_pro','$experience_cc','$p_langue','$d_langue','$formation','$source','$disponibilite','$pfile','attente')";
			





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
							header('location: candidature.php');

				
			
		?>
	
