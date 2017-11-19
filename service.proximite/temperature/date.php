<?php
//print_r($_GET);
if (date('Y-m-d H:i:s', strtotime($_GET["dateDebut"])) != "1970-01-01 00:00:00"
    && date('Y-m-d H:i:s', strtotime($_GET["dateFin"])) != "1970-01-01 00:00:00"
)
{
    include "../basededonnees.php";

    $dateDebut = $_GET["dateDebut"];
    $dateFin = $_GET["dateFin"];
    $SQL_TEMPERATURE = "SELECT * FROM temperature WHERE temperature_date BETWEEN :date_debut AND :date_fin";
    $requeteTemperature = $basededonnees->prepare($SQL_TEMPERATURE);
    $requeteTemperature->bindParam(":date_debut", $dateDebut);
    $requeteTemperature->bindParam(":date_fin", $dateFin);
    $requeteTemperature->execute();
    $temperatures = $requeteTemperature->fetchAll(PDO::FETCH_OBJ);
    header("Content-type: text/xml");
    echo '<?xml version="1.0" encoding="UTF-8"?>';

    ?>
    <listeTemperature>
        <?php
            foreach($temperatures as $temperature)
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
    <?php
    }
?>