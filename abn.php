<?php


require_once('bdd.php');
  
if (isset($_POST['abondantformation'])){
$abondant ='Il a abondonner la formation'; }
if (isset($_POST['abondantstage'])){
$abondant ='Il a abondonner le stage'; }
if (isset($_POST['abondantposte'])){
$abondant ='Il a abondonner le poste'; }
$id_candidat=$_POST['id_candidat'];
//$abondant ='aaa';
	$sql = "UPDATE candidat SET situation_candidat='$abondant' WHERE id_candidat = $id_candidat ";

	
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


header('Location: ./liste_candidat.php');

	
?>
