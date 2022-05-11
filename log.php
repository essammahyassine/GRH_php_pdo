<?php

// Connexion à la base de données
require_once('bdd.php');

session_start();
	
$login = $_POST['email'];
$password = $_POST['passe'];
        

//`id_utilisateur`, `id_candidat`, `email`, `passe`, `type` FROM `utilisateur` 
$sql = "select count(*) FROM utilisateur where passe='$password' AND email='$login'";
$result = $bdd->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn(); 
//echo $number_of_rows;


if($number_of_rows > 0) 
    {
	$sqla = "SELECT * FROM candidat INNER JOIN utilisateur ON  utilisateur.id_candidat=candidat.id_candidat where utilisateur.email='$login' and utilisateur.passe='$password'";



  


foreach  ($bdd->query($sqla) as $row) 
{
	$_SESSION['user_name']=$row['nom'];
	//$_SESSION['user_id']=4;
	$_SESSION['user_id']=$row['id_candidat'];
	$_SESSION['typeuser']=$row['type'];
	if($row['type']="admin"){header('Location: dash.php');}

else if($row['type']="user"){header('Location: demande_conge.php');}
}


//else if($row['type']="user"){header('Location: dashuser.php');}
	
	
	}else
	{
		session_unset();
        session_destroy();
		header('Location: index.php');
		
	}?>


