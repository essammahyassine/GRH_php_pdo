<?php


require_once('bdd.php');
  


$id_candidat=$_POST['id_candidat'];
$affectation=$_POST['affectation'];
$email=$_POST['email'];
$passe=$_POST['passe'];
$type_utilisateur=$_POST['type_utilisateur'];
$date_signature_contrat=$_POST['date_signature_contrat'];



	



	$name_file = $_FILES['pfile']['name'];
	 $tmp_name = $_FILES['pfile']['tmp_name'];
	  $location = 'contrat/'; 
	  move_uploaded_file($tmp_name,$location.$name_file);
	  $pfile=$location.$name_file;



	$sql = "UPDATE candidat SET situation_candidat='Salarier',affectation ='$affectation',date_signature_contrat ='$date_signature_contrat',contrat='$pfile' WHERE id_candidat = $id_candidat ";

	
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



	$sql = "INSERT INTO utilisateur (id_candidat, email, passe,type_utilisateur)VALUES ($id_candidat,'$email','$passe','$type_utilisateur')";
							
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

header('Location: ./candidature.php');

	
?>
