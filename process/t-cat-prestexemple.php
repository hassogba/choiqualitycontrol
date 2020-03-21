<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1 ORDER BY exemple_id');
     //on exécute la requête
    $categ->execute();
?>