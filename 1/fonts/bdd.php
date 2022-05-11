<?php
try
{
	$bdd = new PDO('mysql:host=sql302.hostkda.com;dbname=hkda_19319952_RH;charset=utf8', 'hkda_19319952', 'Xyawyawx');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
