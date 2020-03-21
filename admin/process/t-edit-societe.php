<?php
    require 'config.php';
    require('noAccent.php');
    require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        $prest = $db->prepare('SELECT * FROM societe WHERE societe_nom = ? AND societe_id = ?');
        $prest->execute(array($nom, $id));

        $p = $prest->fetch();
      //  var_dump($p);
    }

    // Récupération des types de societe en bd
    $type = $db->prepare('SELECT * FROM type_societe ORDER BY type_societe_id');
    $type->execute();

    $root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

    //variable des fichiers...
    $dest = $root_dir.'media/img/prest/';

    if (isset($_POST['modifier'])){

        //Récupération des variables...
        $categ = htmlspecialchars($_POST['type']);
        $name = htmlspecialchars($_POST['nom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $email = htmlspecialchars($_POST['email']);
        $postal = htmlspecialchars($_POST['postal']);
        $tel = htmlspecialchars($_POST['tel']);

        $ville = htmlspecialchars($_POST['ville']);
        $descfr = htmlspecialchars($_POST['descfr']);
        $descan = htmlspecialchars($_POST['descan']);

        $propriofr = htmlspecialchars($_POST['propriofr']);
        $proprioan = htmlspecialchars($_POST['proprioan']);
       
       $photo = $_FILES['photo'];

        //Test que les champs ne sont pas vide
        if(!empty($categ) && !empty($name)){
            // Cas où, on ne modifie pas l'image : i.e le champ input type=file n'est pas renseigné
            if ($photo['error'] == 4){  // Aucun fichier téléchargé
                $maj = $db->prepare('
                    UPDATE societe SET societe_nom = ?, societe_adresse = ?, societe_email = ?, societe_postal = ?, societe_tel = ?, societe_ville = ?, societe_descriptionfr = ?, societe_descriptionan = ?, societe_propriofr = ?, societe_proprioan = ?, societe_typeid = ?,  societe_date = NOW() WHERE societe_id = ? AND societe_nom = ?');
                $maj->execute(array($name, $adresse,$email,$postal,$tel,$ville,$descfr,$descan,$propriofr,$proprioan, $categ, $id,$nom));

                // Redirection vers la liste des prestations
                header('Location: ./list-societe.php');
            }
            // Cas où on modifie l'image : i.e le champ input type=file est renseigné
            elseif ($photo['error'] == 0){
                $res = uploadFile($photo, $dest, $name);
                if ($res['result']){
                    $maj = $db->prepare('
                    UPDATE societe SET societe_nom = ?, societe_adresse = ?, societe_email = ?, societe_postal = ?,societe_tel = ?,societe_ville= ?,societe_descriptionfr= ?,societe_descriptionan= ?,societe_propriofr= ?,societe_proprioan= ?,societe_typeid = ?,societe_date = NOW(), societe_photo = ? WHERE societe_id = ? AND societe_nom = ?
                    ');
                    $maj->execute(array($name, $adresse,$email,$postal,$tel,$ville,$descfr,$descan,$propriofr,$proprioan, $categ, $res['file'], $id, $nom));

                    // Redirection vers la liste des prestations
                    header('Location: ./list-societe.php');
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
    $prest = $db->prepare('SELECT * FROM societe WHERE societe_nom = ? AND societe_id = ?');
    $prest->execute(array($nom, $id));

    $p = $prest->fetch();
     // Récupération des types en bd
   // $type = $db->prepare('SELECT * FROM type ORDER BY type_id');
   // $type->execute();
?>