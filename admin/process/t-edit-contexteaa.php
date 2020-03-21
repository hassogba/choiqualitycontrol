<?php
    require 'config.php';
    require('noAccent.php');
   // require('uploadFile.php');

    if (!empty(isset($_GET['nom'])) && !empty(isset($_GET['id'])) && $_GET['id'] > 0){
        $nom = htmlspecialchars($_GET['nom']);
        $id = intval($_GET['id']); // Récupere en castant en entier

        //echo $nom;

        $prest = $db->prepare('SELECT * FROM contexte WHERE contexte_ligne1 = ? AND contexte_id = ?');
        $prest->execute(array( $nom,$id));

        $p = $prest->fetch();

       // var_dump($p);
        //echo $_GET['nom'];

    }
    // Récupération des services en bd
    $type = $db->prepare('SELECT * FROM service WHERE service_typeid=3 ORDER BY service_id');
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
                    UPDATE contexte SET contexte_ligne1 = ?, contexte_line1 = ?, contexte_ligne2 = ?, contexte_line2 = ?,contexte_ligne3 = ?,contexte_line3 = ?, contexte_ligne4 = ?,contexte_line4 = ?,contexte_serviceid = ?,
                    contexte_date = NOW() WHERE contexte_id = ?');
                $maj->execute(array($ligne1,$line1,$ligne2,$line2,$ligne3, $line3,$ligne4,$line4,$type, $id));

                // Redirection vers la liste des prestations
                header('Location: ./list-contexteaa.php');          
           
        }
        else{
            $error = "Veuillez remplir tous les champs !";
        }
    }

    $prest = $db->prepare('SELECT * FROM contexte WHERE contexte_ligne1 = ? AND contexte_id = ?');
    $prest->execute(array($nom,$id));

    $p = $prest->fetch();
?>