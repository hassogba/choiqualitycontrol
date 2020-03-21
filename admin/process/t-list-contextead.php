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
            $delPrest = $db->prepare('UPDATE contexte SET contexte_active = 0 WHERE  contexte_id = ?');
            $delPrest->execute(array($id));
        }elseif ($action == 'enable'){
            $delPrest = $db->prepare('UPDATE contexte SET contexte_active = 1 WHERE  contexte_id = ?');
            $delPrest->execute(array( $id));
        }
        header('Location: ./list-contextead.php');
        echo "Success";
    }else{
        echo "Failed";
    }

    // Récupère toutes les contextes en BD
    $prestations = $db->prepare('SELECT * FROM contexte AS p, service AS c WHERE c.service_typeid=2 AND p.contexte_serviceid = c.service_id ORDER BY p.contexte_active DESC');
    $prestations->execute();

 ?>