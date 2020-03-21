<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }

    require('process/t-list-objectifad.php');
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
            <?php include("includes/menu-l.html"); ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Liste des objectifs des analyses défaillances
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\choiqualitycontrol\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des objectifs des analyses défaillances</small>
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
                                    <th>Nom du service </th>
                                     <th>Ligne 1</th>
                                      <th>Line 1</th>
                                      <th>Ligne 2</th>
                                       <th>Line 2</th>
                                       <th>Ligne 3</th>
                                        <th>Line 3</th>
                                        <th>Ligne 4</th>
                                         <th>Line 4</th>
                                   
                                    <th class="text-center">Etat du service</th>
                                   
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>                                       
                                        <td><?= $prest['service_nom']?></td>
                                        <td><?= $prest['objectif_ligne1']?></td>
                                         <td><?= $prest['objectif_line1']?></td>
                                         <td><?= $prest['objectif_ligne2']?></td>
                                          <td><?= $prest['objectif_line2']?></td>
                                          <td><?= $prest['objectif_ligne3']?></td>
                                           <td><?= $prest['objectif_line3']?></td>
                                           <td><?= $prest['objectif_ligne4']?></td>
                                            <td><?= $prest['objectif_line4']?></td>  

                                            <td class="text-center">

                                            <?php 
                                                if($prest['objectif_active'] == 1){
                                                    echo '<span class="label label-success">Publiée</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Non publiée</span>';
                                                } 
                                            ?>

                                        </td>                                       
                                        <td class="text-center">
                                            <span>
                                                <a role="button" title="Modifier la l'objectif" href="\choiqualitycontrol\admin\edit-objectifad.php?nom=<?= $prest['objectif_ligne1'];?>&id=<?= $prest['objectif_id']?>"
                                                   class="edit fa fa-pencil" id="edit-<?= $prest['objectif_id']?>"></a>
                                            </span>

                                            <span>
                                                <?php if ($prest['objectif_active'] == 1) {?>
                                                <a role="button" title="Désactier l'objectif" href="\choiqualitycontrol\admin\list-objectifad.php?act=disable&nom=<?= $prest['objectif_ligne1'];?>&id=<?= $prest['objectif_id']?>"
                                                   class="del fa fa-fw fa-trash" id="del-<?= $prest['objectif_id']?>"></a>
                                                <?php }else {?>
                                                <a role="button" title="Actier l'objectif" href="\choiqualitycontrol\admin\list-objectifad.php?act=enable&nom=<?= $prest['objectif_ligne1'];?>&id=<?= $prest['objectif_id']?>"
                                                   class="del fa fa-fw fa-level-up" id="del-<?= $prest['objectif_id']?>"></a>
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