<?php 
	require('config.php');

    // Supprime un service, celui-ci est toujours en BD.
    // En effet, la suppression ici consiste à changer l'attribut 'active' de 1 à 0
    // On récupère d'abord les variables passées passées dans l'url puis on exécute la requete
    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && !empty(isset($_GET['act']))){
        $nom = htmlspecialchars($_GET['nom']);
        $id = htmlspecialchars($_GET['id']);
        $action = htmlspecialchars($_GET['act']);

        if ($action == 'disable'){
            $delPrest = $db->prepare('UPDATE contenuaccueil SET contenuAccueil_active = 0 WHERE contenuAccueil_nom = ? AND contenuAccueil_id = ?');
            $delPrest->execute(array($nom, $id));
        }elseif ($action == 'enable'){
            $delPrest = $db->prepare('UPDATE contenuaccueil SET contenuAccueil_active = 1 WHERE contenuAccueil_nom = ? AND contenuAccueil_id = ?');
            $delPrest->execute(array($nom, $id));
        }
        header('Location: ./list-accueil.php');
        echo "Success";
    }else{
        echo "Failed";
    }

    // Récupère toutes les services de l'accueil en BD
    $prestations = $db->prepare('SELECT * FROM contenuaccueil ORDER BY contenuAccueil_active DESC');
    $prestations->execute();
 ?>