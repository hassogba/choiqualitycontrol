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
            $delPrest = $db->prepare('UPDATE qualite SET qualite_active = 0 WHERE qualite_nom = ? AND qualite_id = ?');
            $delPrest->execute(array($nom, $id));
        }elseif ($action == 'enable'){
            $delPrest = $db->prepare('UPDATE qualite SET qualite_active = 1 WHERE qualite_nom = ? AND qualite_id = ?');
            $delPrest->execute(array($nom, $id));
        }
        header('Location: ./list-qualite.php');
        echo "Success";
    }else{
        echo "Failed";
    }

    // Récupère toutes les services en BD
   // $prestations = $db->prepare('SELECT * FROM service AS p, type AS c WHERE p.service_typeid = c.type_id ORDER BY p.service_active DESC');
    //$prestations->execute();


    // Récupère toutes les exemples en BD
    //$prestations = $db->prepare('SELECT * FROM service AS p, exemple AS d WHERE p.service_typeid = d.exemple_id ORDER BY p.service_active DESC');
   // $prestations->execute();

     // Récupère toutes les exemples en BD
    $prestations = $db->prepare('SELECT * FROM qualite ORDER BY qualite_active DESC');
    $prestations->execute();
 ?>