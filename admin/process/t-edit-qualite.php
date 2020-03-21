<?php
    require 'config.php';
    require('noAccent.php');
    require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM qualite WHERE qualite_nom = ? AND qualite_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      //  var_dump($p);
    }

    // Récupération des services en bd
    $type = $db->prepare('SELECT * FROM norme ORDER BY norme_id');
    $type->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //Contantes des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        //Récupération des variables...
        
        $nom1 = htmlspecialchars($_POST['nom']);
        $name = htmlspecialchars($_POST['name']);
       
        //Test que les champs ne sont pas vide
        if(!empty($nom1)){


            $maj = $db->prepare('
                    UPDATE qualite SET qualite_nom = ?, qualite_name = ?,qualite_date = NOW() WHERE qualite_id = ? AND qualite_nom = ?');
                $maj->execute(array($nom1, $name, $id,$nom));
                // Redirection vers la liste des prestations
                header('Location: ./list-qualite.php');

            // Cas où, on ne modifie pas l'image : i.e le champ input type=file n'est pas renseigné
           
            
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }
    $prest = $db->prepare('SELECT * FROM qualite WHERE qualite_nom = ? AND qualite_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
     // Récupération des types en bd
   // $type = $db->prepare('SELECT * FROM type ORDER BY type_id');
   // $type->execute();
?>