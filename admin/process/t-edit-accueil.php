<?php
    require 'config.php';
    require('noAccent.php');
    //require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier
        echo $nom;

        $prest = $db->prepare('SELECT * FROM contenuaccueil WHERE contenuAccueil_nom = ? AND contenuAccueil_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      

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
                    UPDATE contenuaccueil SET contenuAccueil_titre = ?, contenuAccueil_titrean = ?, 
                    contenuAccueil_date = NOW() WHERE contenuAccueil_id = ? AND contenuAccueil_nom = ?
                ');
                $maj->execute(array($name,$name1, $id, $nom));

                // Redirection vers la liste des prestations
                header('Location: ./list-accueil.php');


           
           
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }

    $prest = $db->prepare('SELECT * FROM contenuaccueil WHERE contenuAccueil_nom = ? AND contenuAccueil_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
?>