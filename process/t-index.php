<?php
    require 'process/config.php';

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM contenuaccueil WHERE contenuAccueil_active=1 ORDER BY contenuAccueil_id');
    $categ->execute();

    // Recupération des partenanires en bd
    $coord = $db->prepare('SELECT * FROM societe WHERE societe_id = 1 ORDER BY societe_id');
    $coord->execute();

    $c = $coord->fetch();
?>