<?php
    if (isset($_GET["xmlProximite"])) {
        include "../basededonnees.php";
        $xmlProximite = new SimpleXMLElement($_GET["xmlProximite"]);

        foreach($xmlProximite as $proximites){
            $SQL_INSERT_PROXIMITE = "INSERT INTO proximite (proximite_valeur, proximite_date) VALUES (:valeur, :date)";
            $requeteProximite = $basededonnees->prepare($SQL_INSERT_PROXIMITE);
            $requeteProximite->bindParam(":valeur", $proximites->valeur);
            $requeteProximite->bindParam(":date", $proximites->date);
            $requeteProximite->execute();
        }
    }
?>