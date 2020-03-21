<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM societe WHERE societe_typeid =1 AND societe_active=1 ORDER BY societe_id');
     //on exécute la requête
    $categ->execute();
?>