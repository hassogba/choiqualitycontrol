<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM service WHERE service_active=1 AND service_typeid=3 ORDER BY service_id');
     //on exécute la requête
    $categ->execute();
?>