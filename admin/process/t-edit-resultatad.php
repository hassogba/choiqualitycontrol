<?php
    require 'config.php';
    require('noAccent.php');
    require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM exemple WHERE exemple_idnom = ? AND exemple_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();     
    }

    // Récupération des services en bd
    $type = $db->prepare('SELECT * FROM service WHERE service_typeid=2 ORDER BY service_id');
    $type->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //destination des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        //Récupération des variables...
        $type = htmlspecialchars($_POST['type']);
        $name = htmlspecialchars($_POST['nom']);
        $name1 = htmlspecialchars($_POST['name']);
        $photo = $_FILES['photo'];

        //Test que les champs ne sont pas vide
        if(!empty($type) && !empty($name)){
            // Cas où, on ne modifie pas l'image : i.e le champ input type=file n'est pas renseigné
            if ($photo['error'] == 4){  // Aucun fichier téléchargé
                $maj = $db->prepare('
                    UPDATE exemple SET exemple_nom = ?, exemple_name = ?, exemple_serviceid = ?,  exemple_date = NOW() WHERE exemple_id = ? AND exemple_idnom = ?
                ');
                $maj->execute(array($name, $name1, $type, $id, $nom));

                // Redirection vers la liste
                header('Location: ./list-resultatad.php');
            }
            // Cas où on modifie l'image : i.e le champ input type=file est renseigné
            elseif ($photo['error'] == 0){
                $res = uploadFile($photo, $dest, $nom);
                if ($res['result']){
                    $maj = $db->prepare('
                    UPDATE exemple SET exemple_nom = ?, exemple_name = ?, exemple_serviceid = ?, exemple_date = NOW(), exemple_photo = ? WHERE exemple_id = ? AND exemple_idnom = ?
                    ');
                    $maj->execute(array($name, $name1, $type, $res['file'], $id, $nom));

                    // Redirection vers la liste des prestations
                    header('Location: ./list-resultatad.php');
                }
                else{
                    $errorImg = "Une erreur s'est produite lors du téléchargement du fichier";
                }
            }
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }
    $prest = $db->prepare('SELECT * FROM exemple WHERE exemple_idnom = ? AND exemple_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
    
?>