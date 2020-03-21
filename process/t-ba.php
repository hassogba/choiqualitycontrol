<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM info WHERE info_active=1 ORDER BY info_id');
     //on exécute la requête
    $categ->execute();

    
     
?>