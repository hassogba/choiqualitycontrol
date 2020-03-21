<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM qualite WHERE qualite_active=1 ORDER BY qualite_id');
     //on exécute la requête
    $categ->execute();

     // Récupération des catégories en bd
    $norm = $db->prepare('SELECT * FROM  norme WHERE norme_active=1  ORDER BY norme_id');
     //on exécute la requête
    $norm->execute();
?>