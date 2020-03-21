<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }

    require('process/t-list-accueil.php');
    require '../process/urlRewrite.php';
    require 'process/noAccent.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="media/f-icon/favicon.ico">
    <link rel="icon" type="image/gif" href="media/fi-con/animated_favicon1.gif">

    <title>Administration - Choi quality control</title>

    <!-- Including style file link -->
    <?php include("includes/style.html"); ?>
   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include("includes/menu-h.html"); ?>
            <?php include("includes/menu-l.html"); ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Liste des services de l'accueil
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\choiqualitycontrol\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des services de l'accueil</small>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <table class="table striped-table">
                            <thead>
                                <tr>
                                   
                                    <th>Nom du service en français</th>
                                     <th>Nom du service en anglais</th>
                                   
                                    <th class="text-center">Etat du service</th>
                                   
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>  <!-- Affichage -->
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>
                                        
                                        <td><?= $prest['contenuAccueil_titre']?></td>
                                        <td><?= $prest['contenuAccueil_titrean']?></td>
                                       
                                        <td class="text-center">
                                            <?php 
                                                if($prest['contenuAccueil_active'] == 1){
                                                    echo '<span class="label label-success">Publiée</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Non publiée</span>';
                                                } 
                                            ?>
                                        </td>
                                       <!-- modification du service -->
                                        <td class="text-center">
                                            <span>
                                                <a role="button" title="Modifier le service" href="\choiqualitycontrol\admin\edit-accueil.php?nom=<?= $prest['contenuAccueil_nom'];?>&id=<?= $prest['contenuAccueil_id']?>"
                                                   class="edit fa fa-pencil" id="edit-<?= $prest['contenuAccueil_id']?>"></a>
                                            </span>
                                              <!-- activer ou désactiver un service -->

                                            <span>
                                                <?php if ($prest['contenuAccueil_active'] == 1) {?>
                                                <a role="button" title="Désactier la prestation" href="\choiqualitycontrol\admin\list-accueil.php?act=disable&nom=<?= $prest['contenuAccueil_nom'];?>&id=<?= $prest['contenuAccueil_id']?>"
                                                   class="del fa fa-fw fa-trash" id="del-<?= $prest['contenuAccueil_id']?>"></a>
                                                <?php }else {?>
                                                <a role="button" title="Actier la prestation" href="\choiqualitycontrol\admin\list-accueil.php?act=enable&nom=<?= $prest['contenuAccueil_nom'];?>&id=<?= $prest['contenuAccueil_id']?>"
                                                   class="del fa fa-fw fa-level-up" id="del-<?= $prest['contenuAccueil_id']?>"></a>
                                                <?php }?>
                                            </span>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="col-lg-1"></div> -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- Including scripts file link -->
    <?php include("includes/script.html"); ?>   
</body>

</html>