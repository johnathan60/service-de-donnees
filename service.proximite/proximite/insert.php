<?php
    if (isset($_GET["xmlProximite"])) {
        include "../basededonnees.php";
        $xmlProximite = new SimpleXMLElement($_GET["xmlProximite"]);

        $valeur = $xmlProximite->valeur;
        $date = $xmlProximite->date;

        $SQL_INSERT_PROXIMITE = "INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (:valeur, :date)";
        $requeteProximite = $basededonnees->prepare($SQL_INSERT_PROXIMITE);
        $requeteProximite->bindParam(":valeur", $valeur);
        $requeteProximite->bindParam(":date", $date);
        $requeteProximite->execute();
    }
?>
