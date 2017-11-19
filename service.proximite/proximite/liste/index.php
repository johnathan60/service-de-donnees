<?php 

	// LECTURE des données
	include "../../basededonnees.php";
	$SQL_LISTE_PROXIMITE = "SELECT proximite_valeur, proximite_date FROM proximite";
	$requeteListeProximite = $basededonnees->prepare($SQL_LISTE_PROXIMITE);
	$resultat = $requeteListeProximite->execute();
	$listeProximite = $requeteListeProximite->fetchAll(PDO::FETCH_OBJ);

	
	// AFFICHAGE des données
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<listeProximite>
<?php
	foreach($listeProximite as $proximite)
	{
		?>
		<proximite>
			<valeur><?=$proximite->proximite_valeur?></valeur>
			<date><?=$proximite->proximite_date?></date>
		</proximite>
		<?php
	}
?>
</listeProximite>
