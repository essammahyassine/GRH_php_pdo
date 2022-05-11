<?php
			
			require_once('bdd.php');
			
                $id =$_POST['id'];
				$imatriculation = $_POST['imatriculation'];
				
				$nom =$_POST['nom'];
				
				$cin =$_POST['cin'];
				$telephone =$_POST['telephone'];
				$telephone1 =$_POST['telephone1'];
				$telephone2 =$_POST['telephone2'];
				$fixe =$_POST['fixe'];
				$adresse =$_POST['adresse'];
				$datenaissance =$_POST['datenaissance'];
				$situation =$_POST['situation'];
				$niveau =$_POST['niveau'];
				$experience =$_POST['experience'];
				$experiencecallcenter =$_POST['experiencecallcenter'];
				$plangue =$_POST['1langue'];
				$dlangue =$_POST['2langue'];
				$formation =$_POST['formation'];
				$source =$_POST['source'];
				$descriptionsource =$_POST['descriptionsource'];
				$affectation =$_POST['affectation'];
				$dateaffectation =$_POST['dateaffectation'];
				$debutformation =$_POST['debutformation'];
				$finformation =$_POST['finformation'];
				$debutstage =$_POST['debutstage'];
				$finstage =$_POST['finstage'];
				$datedepot =$_POST['datedepot'];
				$cnsscontrat =$_POST['cnsscontrat'];
				
 
				$sql = "UPDATE candidat SET  nom = '$nom',cin='$cin',telephone='$telephone',telephone1='$telephone1',telephone2='$telephone2',fixe='$fixe', adresse='$adresse',datenaissance='$datenaissance',situation='$situation',niveau='$niveau',experience='$experience',experiencecallcenter='$experiencecallcenter', 1langue='$plangue',2langue='$dlangue',formation='$formation',source='$source',descriptionsource='$descriptionsource',affectation='$affectation',dateaffectation='$dateaffectation',debutformation='$debutformation' ,finformation='$finformation',debutstage='$debutstage' ,finstage='$finstage' ,datedepot='$datedepot' WHERE imatriculation = '$imatriculation'";

	
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
							header('location: index.php');

				
			
		?>
	
