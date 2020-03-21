<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }

    require('process/t-list-admin.php');
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
                            Liste des administrateurs
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\choiqualitycontrol\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des administrateurs</small>
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
                                    <th>#</th>
                                    <th>Nom </th>
                                    <th class="text-center">Prénoms</th>
                                    <th class="text-center">Login</th>                                   
                                    <th class="text-center">Etat</th>                                 
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>
                                        <td><?= $prest['user_id']?></td>
                                        <td><?= $prest['user_nom']?></td>
                                        <td class="text-center"><?= $prest['user_prenom']?></td>
                                        <td class="text-center"><?= $prest['username']?></td>
                                        <td class="text-center">
                                            <?php 
                                                if($prest['admin'] == 1){
                                                    echo '<span class="label label-success">Publiée</span>';
                                                }
                                                else{
                                                    echo '<span class="label label-warning">Non publiée</span>';
                                                } 
                                            ?>
                                        </td>
                                       
                                        <td class="text-center">
                                            <span>
                                                <a role="button" title="Modifier l'administrateur" href="\choiqualitycontrol\admin\edit-admin.php?nom=<?= $prest['user_nom'];?>&id=<?= $prest['user_id']?>"
                                                   class="edit fa fa-pencil" id="edit-<?= $prest['user_id']?>"></a>
                                            </span>

                                            <span>
                                                <?php if ($prest['admin'] == 1) {?>
                                                <a role="button" title="Désactier l'administrateur" href="\choiqualitycontrol\admin\list-admin.php?act=disable&nom=<?= $prest['user_nom'];?>&id=<?= $prest['user_id']?>"
                                                   class="del fa fa-fw fa-trash" id="del-<?= $prest['user_id']?>"></a>
                                                <?php }else {?>
                                                <a role="button" title="Actier l'administrateur" href="\choiqualitycontrol\admin\list-admin.php?act=enable&nom=<?= $prest['user_nom'];?>&id=<?= $prest['user_id']?>"
                                                   class="del fa fa-fw fa-level-up" id="del-<?= $prest['user_id']?>"></a>
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