<?php
    require 'config.php';
    require('noAccent.php');
    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier
        $prest = $db->prepare('SELECT * FROM objectif WHERE objectif_ligne1 = ? AND objectif_id = ?');
        $prest->execute(array( $nom,$id));

        $p = $prest->fetch();
    }
    // Récupération des services en bd
    $type = $db->prepare('SELECT * FROM service where service_typeid=1 ORDER BY service_id');
    $type->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //chemin des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

         $type = htmlspecialchars($_POST['type']);

        $ligne1 = htmlspecialchars($_POST['l1']);
        $line1 = htmlspecialchars($_POST['ln1']);
        $ligne2 = htmlspecialchars($_POST['l2']);
        $line2 = htmlspecialchars($_POST['ln2']);
        $ligne3 = htmlspecialchars($_POST['l3']);
        $line3 = htmlspecialchars($_POST['ln3']);
        $ligne4 = htmlspecialchars($_POST['l4']);
        $line4 = htmlspecialchars($_POST['ln4']);        

        //Test que les champs ne sont pas vide
        if(!empty($id) ){

            $maj = $db->prepare('
                    UPDATE objectif SET objectif_ligne1 = ?, objectif_line1 = ?, objectif_ligne2 = ?, objectif_line2 = ?,objectif_ligne3 = ?,objectif_line3 = ?, objectif_ligne4 = ?,objectif_line4 = ?,objectif_serviceid = ?,
                    objectif_date = NOW() WHERE objectif_id = ?');
                $maj->execute(array($ligne1,$line1,$ligne2,$line2,$ligne3, $line3,$ligne4,$line4,$type, $id));

                // Redirection vers la liste des prestations
                header('Location: ./list-objectifea.php');          
           
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }

    $prest = $db->prepare('SELECT * FROM objectif WHERE objectif_ligne1 = ? AND objectif_id = ?');
    $prest->execute(array($nom,$id));

    $p = $prest->fetch();
?>