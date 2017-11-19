<?php 
	// LECTURE des données
	include "../basededonnees.php";
	$SQL_TEMPERATURE = "SELECT * FROM temperature";
	$requeteTemperature = $basededonnees->prepare($SQL_TEMPERATURE);
	$requeteTemperature->execute();
	$temperature = $requeteTemperature->fetch(PDO::FETCH_OBJ);
	
	// AFFICHAGE des données
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';	
?>

<temperature>
    <degres><?=$temperature->temperature_degres?></degres>
    <date><?=$temperature->temperature_date?></date>
</temperature>