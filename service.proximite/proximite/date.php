<?php
//print_r($_GET);
if (date('Y-m-d H:i:s', strtotime($_GET["dateDebut"])) != "1970-01-01 00:00:00"
    && date('Y-m-d H:i:s', strtotime($_GET["dateFin"])) != "1970-01-01 00:00:00"
) {
    include "../basededonnees.php";

    $dateDebut = $_GET["dateDebut"];
    $dateFin = $_GET["dateFin"];
    $SQL_PROXIMITE = "SELECT * FROM proximite WHERE proximite_date BETWEEN :date_debut AND :date_fin";
    $requeteProximite = $basededonnees->prepare($SQL_PROXIMITE);
    $requeteProximite->bindParam(":date_debut", $dateDebut);
    $requeteProximite->bindParam(":date_fin", $dateFin);
    $requeteProximite->execute();
    $proximites = $requeteProximite->fetchAll(PDO::FETCH_OBJ);
    header("Content-type: text/xml");
    echo '<?xml version="1.0" encoding="UTF-8"?>';

    ?>
    <listeProximite><?php
    foreach ($proximites as $proximite) {
        ?>
        <proximite>
            <valeur><?= $proximite->proximite_valeur ?></valeur>
            <date><?= $proximite->proximite_date ?></date>
        </proximite>
        <?php
    }
    ?></listeProximite><?php
}
?>