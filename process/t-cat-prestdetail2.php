<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM service WHERE service_active=1 ORDER BY service_id');
     //on exécute la requête
    $categ->execute();

    // Récupération des catégories en bd
    $cont = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1 ORDER BY objectif_id');
     //on exécute la requête
    $cont->execute();

    // Récupération des catégories en bd
    $obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1 ORDER BY objectif_id');
     //on exécute la requête
    $obj->execute();

     
?>