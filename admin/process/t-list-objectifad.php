<?php 
    require('config.php');

    // Supprime des pages une prestation, celle-ci est toujours en BD.
    // En effet, la suppression ici consiste à changer l'attribut 'active' de 1 à 0
    // On récupère d'abord les variables passées passées dans l'url puis en exécute la requete
    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && !empty(isset($_GET['act']))){
        $nom = htmlspecialchars($_GET['nom']);
        $id = htmlspecialchars($_GET['id']);
        $action = htmlspecialchars($_GET['act']);

        if ($action == 'disable'){
            $delPrest = $db->prepare('UPDATE objectif SET objectif_active = 0 WHERE  objectif_id = ?');
            $delPrest->execute(array($id));
        }elseif ($action == 'enable'){
            $delPrest = $db->prepare('UPDATE objectif SET objectif_active = 1 WHERE  objectif_id = ?');
            $delPrest->execute(array( $id));
        }
        header('Location: ./list-objectifad.php');
        echo "Success";
    }else{
        echo "Failed";
    }

    // Récupère toutes les objectifs en BD
    $prestations = $db->prepare('SELECT * FROM objectif AS p, service AS c WHERE c.service_typeid=2 AND p.objectif_serviceid = c.service_id ORDER BY p.objectif_active DESC');
    $prestations->execute();
 ?>