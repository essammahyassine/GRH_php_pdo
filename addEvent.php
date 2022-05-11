<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];

	$id_candidat= $_POST['id_candidat'];
	$nom_candidat = $_POST['nom_candidat'];
	$debut = $_POST['start'];
	$end = $_POST['end'];
	$fin = $_POST['fin'];
	$type_entretien = $_POST['type_entretien'];
	$color = '#0071c5';
	
	$sql = "INSERT INTO entretien(id_candidat, nom_candidat, color, debut, fin, type_entretien) values ($id_candidat, '$nom_candidat', '$color', '$debut','$end','$type_entretien')";
	
	echo $sql;
	
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


header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
