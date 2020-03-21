<?php
    require 'config.php';

    // Recupération des coordonnees en bd
    $coord = $db->prepare('SELECT * FROM societe WHERE societe_active = 1 AND societe_typeid=1 ORDER BY societe_id');
    $coord->execute();

    $c = $coord->fetch();
?>