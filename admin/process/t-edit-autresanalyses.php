<?php
    require 'config.php';
    require('noAccent.php');
   // require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM service WHERE service_nom = ? AND service_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      //  var_dump($p);
    }

    // Récupération des types en bd
    $categ = $db->prepare('SELECT * FROM type ORDER BY type_id');
    $categ->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //Contantes des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        //Récupération des variables...
        $type = 3;
        $name = htmlspecialchars($_POST['nom']);
        $name1 = htmlspecialchars($_POST['name']);
        $duree = htmlspecialchars($_POST['duree']);
        $prix = htmlspecialchars($_POST['Prix']);
       // $photo = $_FILES['photo'];

        //Test que les champs ne sont pas vide
        if(!empty($type) && !empty($name)){


             $maj = $db->prepare('
                    UPDATE service SET service_nom = ?, service_name = ?, service_prix = ?, service_duree = ?, service_typeid = ?, 
                    service_date = NOW() WHERE service_id = ? AND service_nom = ?
                ');
                $maj->execute(array($name,$name1, $prix, $duree, $type, $id, $nom));

                // Redirection vers la liste des prestations
                header('Location: ./list-autresanalyses.php');



            
          
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }
    $prest = $db->prepare('SELECT * FROM service WHERE service_nom = ? AND service_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
     // Récupération des types en bd
    $type = $db->prepare('SELECT * FROM type ORDER BY type_id');
    $type->execute();
?>