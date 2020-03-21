<?php
    require 'config.php';
    require('noAccent.php');
    //require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier
        echo $nom;

        $prest = $db->prepare('SELECT * FROM info WHERE info_nom = ? AND info_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();

       // var_dump($p);
        //echo $_GET['nom'];

    }


    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //chemin des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        $name = htmlspecialchars($_POST['nom1']);
        $name1 = htmlspecialchars($_POST['name']);
        

        //Test que les champs ne sont pas vide
        if(!empty($name) ){

            $maj = $db->prepare('
                    UPDATE info SET info_message = ?, info_messagean = ?, 
                    info_date = NOW() WHERE info_id = ? AND info_nom = ?
                ');
                $maj->execute(array($name,$name1, $id, $nom));

                // Redirection vers la liste des prestations
                header('Location: ./list-info.php');


           
           
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }

    $prest = $db->prepare('SELECT * FROM info WHERE info_nom = ? AND info_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
?>