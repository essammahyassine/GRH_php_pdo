<?php

require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id_entretien'])){
	
	
	$id = $_POST['id_entretien'];
	
	$sql = "DELETE FROM entretien WHERE id_entretien = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	header('Location: entretien_telephonique.php');
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id = $id ";

	
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
header('Location: index.php');
}

elseif (isset($_POST['retenue']) ){
	
	$id = $_POST['id_candidat'];
	
	
	$sql = "UPDATE candidat SET  situation_candidat = 'Retenue' WHERE id_candidat = $id ";

	
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
header('Location: listeretenue.php');
}
elseif (isset($_POST['nonretenue']) ){
	
	$id = $_POST['id_candidat'];
	
	
	$sql = "UPDATE candidat SET situation_candidat = 'Non Retenue'  WHERE id_candidat = $id";

	
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
header('Location: listenonretenue.php');
}


if (isset($_POST['entretienphysique'])){
	
	$id_candidat = $_POST['id_candidat'];
	$id_entretien = $_POST['id_entretien'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE entretien SET  type_entretien='Entretien Physique' , debut='$start', fin='$end' 
	WHERE id_candidat = $id_candidat and id_entretien = $id_entretien";


	
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
header('Location: entretien_physique.php');
}







if (isset($_POST['entretientelephonique'])){
	
	$id_candidat = $_POST['id_candidat'];
	$id_entretien = $_POST['id_entretien'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE entretien SET  type_entretien='Entretien Telephonique' , debut='$start', fin='$end'  
	WHERE id_candidat = $id_candidat and id_entretien = $id_entretien";

	
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
header('Location: entretien_telephonique.php');
}
	
?>
