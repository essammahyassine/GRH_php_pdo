<?php
try
{
	//$bdd = new PDO('mysql:host=sql203.hostkda.com;dbname=hkda_20949969_rh;charset=utf8', 'hkda_20949969', 'Xyawyawx');
	//$bdd = new PDO('mysql:host=sql307.hostkda.com;dbname=hkda_24013369_rh;charset=utf8', 'hkda_24013369', 'Xyawyawx');
	//$bdd = new PDO('mysql:host=localhost;dbname=rh_miage;charset=utf8', 'root', '');
	$bdd = new PDO('mysql:host=localhost;dbname=greatcal_miage;charset=utf8', 'greatcal_yassine', '6ew.QrdnP4T}');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
