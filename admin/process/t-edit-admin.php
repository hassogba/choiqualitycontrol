<?php
    require 'config.php';
    require('noAccent.php');
   // require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM user WHERE user_nom = ? AND user_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      //  var_dump($p);
    }

    // Récupération des types en bd
    //$categ = $db->prepare('SELECT * FROM type ORDER BY type_id');
   // $categ->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //Contantes des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        $user_nom = htmlspecialchars($_POST['nom']);
        $user_prenom = htmlspecialchars($_POST['prenom']);
        $login = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['pass']);
       // $photo = $_FILES['photo'];

        //Test que les champs ne sont pas vide
        if(!empty($login) && !empty($pass)){


             $maj = $db->prepare('
                    UPDATE user SET user_nom = ?, user_prenom = ?, username = ?, password = ?,user_date = NOW() WHERE user_id = ? AND user_nom = ?
                ');
                $maj->execute(array($user_nom,$user_prenom, $login, $pass, $id, $nom));

                // Redirection vers la liste des prestations
                header('Location: ./list-admin.php');



            
          
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }
   $prest = $db->prepare('SELECT * FROM user WHERE user_nom = ? AND user_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
     // Récupération des types en bd
   // $type = $db->prepare('SELECT * FROM type ORDER BY type_id');
   // $type->execute();
?>