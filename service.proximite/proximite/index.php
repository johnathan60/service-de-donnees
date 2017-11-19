<?php 
	// LECTURE des données
	include "../basededonnees.php";
	$SQL_PROXIMITE = "SELECT * FROM proximite";
	$requeteProximite = $basededonnees->prepare($SQL_PROXIMITE);
	$requeteProximite->execute();
	$proximite = $requeteProximite->fetch(PDO::FETCH_OBJ);
	
	// AFFICHAGE des données
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';	
?>

<proximite>
    <valeur><?=$proximite->proximite_valeur?></valeur>
    <date><?=$proximite->proximite_date?></date>
</proximite>
