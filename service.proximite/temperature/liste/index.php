<?php 

	// LECTURE des données
	include "../../basededonnees.php";
	$SQL_LISTE_TEMPERATURE = "SELECT temperature_degres, temperature_date FROM temperature";
	$requeteListeTemperature = $basededonnees->prepare($SQL_LISTE_TEMPERATURE);
	$resultat = $requeteListeTemperature->execute();
	$listeTemperature = $requeteListeTemperature->fetchAll(PDO::FETCH_OBJ);

	
	// AFFICHAGE des données
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<listeTemperature>
<?php
	foreach($listeTemperature as $temperature)
	{
		?>
		<temperature>
			<degres><?=$temperature->temperature_degres?></degres>
			<date><?=$temperature->temperature_date?></date>
		</temperature>
		<?php
	}
?>
</listeTemperature>
