<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }
    require('process/t-list-societe.php');
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
                            Liste des sociétés
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des sociétés</small>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- <div class="col-lg-1"></div> -->
                    <div class="col-lg-12">
                        <table class="table striped-table">
                            <thead>
                                <tr>                                  
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>E-mail</th>
                                    <th>Code postal</th>
                                    <th>Ville</th>                            
                                    <th>Téléphone</th> 
                                    <th class="text-center">Etat</th>
                                    <th class="text-center">Logo</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>                                        
                                        <td><?= $prest['societe_nom']?></td>
                                        <td><?= $prest['societe_adresse']?></td>
                                        <td><?= $prest['societe_email']?></td>
                                        <td><?= $prest['societe_postal']?></td>
                                        <td><?= $prest['societe_ville']?></td>
                                        <td><?= $prest['societe_tel']?></td>                                                                       
                                        <td class="text-center">
                                            <?php 
                                                if($prest['societe_active'] == 1){
                                                    echo '<span class="label label-success">Publiée</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Non publiée</span>';
                                                } 
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <img src="/choiqualitycontrol/media/img/prest/<?= $prest['societe_photo'];?>"
                                                 style="width: 60px; height: 60px"/>
                                        </td>
                                        <td class="text-center">
                                            <span>
                                                <a role="button" title="Modifier la prestation" href="\admin\edit-societe.php?nom=<?= $prest['societe_nom'];?>&id=<?= $prest['societe_id']?>"
                                                   class="edit fa fa-pencil" id="edit-<?= $prest['societe_id']?>"></a>
                                            </span>

                                            <span>
                                                    <?php if ($prest['societe_active'] == 1) {?>
                                                    <a role="button" title="Désactier la prestation" href="\admin\list-societe.php?act=disable&nom=<?= $prest['societe_nom'];?>&id=<?= $prest['societe_id']?>"
                                                       class="del fa fa-fw fa-trash" id="del-<?= $prest['societe_id']?>"></a>
                                                    <?php }else {?>
                                                    <a role="button" title="Actier la prestation" href="\admin\list-societe.php?act=enable&nom=<?= $prest['societe_nom'];?>&id=<?= $prest['societe_id']?>"
                                                       class="del fa fa-fw fa-level-up" id="del-<?= $prest['societe_id']?>"></a>
                                                    <?php }?>
                                            </span>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>                    
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