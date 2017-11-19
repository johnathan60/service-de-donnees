<?php 
    if(isset($_GET["xmlTemperature"])) 
    {
        include "../basededonnees.php";
        $xmlTemperature = new SimpleXMLElement($_GET["xmlTemperature"]);

        $degres = $xmlTemperature->degres;
        $date = $xmlTemperature->date;
        
        $SQL_INSERT_TEMPERATURE = "INSERT INTO temperature (temperature_degres, temperature_date) VALUES (:degres, :date)";
        $requeteTemperature = $basededonnees->prepare($SQL_INSERT_TEMPERATURE);
        $requeteTemperature->bindParam(":degres", $degres);
        $requeteTemperature->bindParam(":date", $date);
        $requeteTemperature->execute();
    }
?>