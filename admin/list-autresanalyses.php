<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }

    require('process/t-list-autresanalyses.php');
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
                            Liste des autres analyses
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\choiqualitycontrol\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des autres analyses</small>
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
                                    <th>Nom du service</th>
                                    <th class="text-center">Durée du service</th>
                                    <th class="text-center">Prix du service</th>
                                    <!-- <th>Photo de la prestation</th> -->
                                    <th class="text-center">Etat du service</th>
                                    <!--<th class="text-center">Image du service</th>-->
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>                                        
                                        <td><?= $prest['service_nom']?></td>
                                        <td class="text-center"><?= $prest['service_duree']?></td>
                                        <td class="text-center"><?= $prest['service_prix']?></td>
                                        <td class="text-center">
                                            <?php 
                                                if($prest['service_active'] == 1){
                                                    echo '<span class="label label-success">Publiée</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Non publiée</span>';
                                                } 
                                            ?>
                                        </td>
                                       
                                        <td class="text-center">
                                            <span>
                                                <a role="button" title="Modifier l'analyse" href="\choiqualitycontrol\admin\edit-autresanalyses.php?nom=<?= $prest['service_nom'];?>&id=<?= $prest['service_id']?>"
                                                   class="edit fa fa-pencil" id="edit-<?= $prest['service_id']?>"></a>
                                            </span>

                                            <span>
                                                <?php if ($prest['service_active'] == 1) {?>
                                                <a role="button" title="Désactier l'analyse" href="\choiqualitycontrol\admin\list-autresanalyses.php?act=disable&nom=<?= $prest['service_nom'];?>&id=<?= $prest['service_id']?>"
                                                   class="del fa fa-fw fa-trash" id="del-<?= $prest['service_id']?>"></a>
                                                <?php }else {?>
                                                <a role="button" title="Actier l'analyse" href="\choiqualitycontrol\admin\list-autresanalyses.php?act=enable&nom=<?= $prest['service_nom'];?>&id=<?= $prest['service_id']?>"
                                                   class="del fa fa-fw fa-level-up" id="del-<?= $prest['service_id']?>"></a>
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