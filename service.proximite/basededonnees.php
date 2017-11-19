<?php
    $usager = 'postgres';
    $motdepasse = 'root';
    $hote = 'localhost';
    $base = 'proximite';
    $basededonnees = new PDO("pgsql:host=$hote;dbname=$base", $usager, $motdepasse);
?>
