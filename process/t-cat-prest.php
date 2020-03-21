<?php
    require('config.php');

    // Récupération des catégories en bd
    $categ = $db->prepare('SELECT * FROM contenuaccueil WHERE contenuAccueil_active=1 ORDER BY contenuAccueil_id');
     //on exécute la requête
    $categ->execute();
?>