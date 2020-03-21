<?php
    session_start();
    if ($_SESSION['statut'] != 1){
        header('Location: /index.php');
    }

    require('process/t-list-contact.php');
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
                            Liste des clients
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="\choiqualitycontrol\admin\index.php"><i class="fa fa-dashboard"></i> Accueil</a> > <small>Liste des clients</small>
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
                                   
                                    <th>Client</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">N° Tel</th>
                                    <th class="text-center">Société</th>

                                    <th class="text-center">Adresse</th>
                                    <th class="text-center">CP</th>
                                    <th class="text-center">Message</th>
                                     <th class="text-center">Date</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($prest = $prestations->fetch()) { ?>
                                    <tr>
                                        
                                        <td><?= $prest['contact_nom']?></td>
                                        <td class="text-center"><?= $prest['contact_email']?></td>
                                        <td class="text-center"><?= $prest['contact_tel']?></td>
                                        <td class="text-center"><?= $prest['contact_societe']?></td>
                                        <td class="text-center"><?= $prest['contact_adresse']?></td>
                                        <td class="text-center"><?= $prest['contact_postal']?></td>
                                        <td class="text-center"><?= $prest['contact_message']?></td>
                                         <td class="text-center"><?= $prest['contact_date']?></td>
                                       
                                       
                                       
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