<?php
    require 'config.php';
    require('noAccent.php');
   // require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM norme WHERE norme_nom = ? AND norme_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      //  var_dump($p);
    }

    // Récupération des services en bd
    $type = $db->prepare('SELECT * FROM qualite ORDER BY qualite_id');
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
                    UPDATE norme SET norme_nom = ?, norme_name = ?,norme_date = NOW() WHERE norme_id = ? AND norme_nom = ?');
                $maj->execute(array($nom1, $name, $id,$nom));
                // Redirection vers la liste des prestations
                header('Location: ./list-norme.php');

            // Cas où, on ne modifie pas l'image : i.e le champ input type=file n'est pas renseigné
           
            
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }
    $prest = $db->prepare('SELECT * FROM norme WHERE norme_nom = ? AND norme_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
     // Récupération des types en bd
   // $type = $db->prepare('SELECT * FROM type ORDER BY type_id');
   // $type->execute();
?>