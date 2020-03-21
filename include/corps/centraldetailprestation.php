<?php
    require 'process/t-cat-prestdetail2.php';
    require 'admin/process/noAccent.php';   
?>

<!Doctype html> 
<html lang="fr">
 
            <head>
                    <?php include("include/entete/head.php"); ?>
                    <style type="text/css">

                                body{
                                    background-size: century;
                                }
                                 #nomimages{
                        
                                            font-family: century ;
                                            font-size: large;                    
                                            display: table-cell; /* comportement visuel de cellule */
                                            vertical-align: middle;
                       
                       }
                    </style>
            </head>
      <body>
          <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1></h1>
                        </div>
                    </div>
                </div>      
            </header>

            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                              <div class="container">
                                          <div class="row">
                                                            <?php // On récupère tout le contenu 
                                                                  $donnees = $categ->fetch();
                                                            ?> 
                                                                 <!--on reccupère l'id -->
                                                                  <?php $service_id = $_GET['id'] //récupére l'id de la page précédente ?>                      
                                                                 

                                                            <?php 
                                                                     
                                                                  $categ = $db->prepare('SELECT * FROM service WHERE service_id = ? AND service_active=1'); //requete sql et service_id dans la table service = id récupéré                                         
                                                                  $categ->execute(array($service_id));                                        
                                                                        
                                                                 while ($donnees = $categ->fetch())
                                                                            {
                                                            ?>  
                                                                                      <h2><?php echo $donnees['service_nom']; ?></h2>                                                    
                                                                                           
                                                             <?php
                                                                              }
                                              
                                                                        $categ->closeCursor();
                                                             ?>
                                        </div>
                                        <div class="row">
                                        <?php // On récupère tout le contenu 
                                        $donnees = $cont->fetch();
                                        ?> 
                                        <!--on reccupère l'id -->
                                        <?php $contexte_id = $_GET['id'] //récupére l'id de la page précédente ?>
                                        <?php
                                        $cont = $db->prepare('SELECT * FROM contexte WHERE contexte_serviceid = ? AND contexte_active=1'); //requete sql et service_id dans la table service = id récupéré
                                        $cont->execute(array($contexte_id));
                                    
                                        //affichage des contextes
                                        while ($donnees = $cont->fetch())
                                            {
                                          ?>                 
                                                            
                                                            <div class="row">
                                                                            <div class="col-lg-12">
                                                                             <h3>Contexte</h3>                                 
                                                                                <h4 id="contexte"><?php echo $donnees['contexte_ligne1']; ?></h4> 
                                                                            </div>
                                                            </div>

                                                            <div class="row">
                                                                            <div class="col-lg-offset-1">
                                                                                <h4 id="contexte1"><?php echo $donnees['contexte_ligne2']; ?></h4>
                                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                            <div class="col-lg-offset-1">
                                                                                <h4 id="contexte1"><?php echo $donnees['contexte_ligne3']; ?></h4>
                                                                            </div>
                                                            </div>
                                                            <div class="row"> 
                                                                            <div class="col-lg-offset-1">
                                                                                <h4 id="contexte1"><?php echo $donnees['contexte_ligne4']; ?></h4>
                                                                            </div>                             
                                                            </div>
                                                 
                                                        <?php
                                                        }
                                                          
                                                        $categ->closeCursor();
                                                        ?>
                                            </div>
                                            <div class="row">
                                                
                                                <?php // On récupère tout le contenu
                                                $donnees = $obj->fetch();
                                                ?> 
                                                <!--on reccupère l'id -->
                                                <?php $objectif_id = $_GET['id'] //récupére l'id de la page précédente ?>
                                                <?php
                                                $obj = $db->prepare('SELECT * FROM objectif WHERE objectif_serviceid = ? AND objectif_active=1'); //requete sql et service_id dans la table service = id récupéré
                                                $obj->execute(array($objectif_id));
                                                //affichage des objectifs
                                                while ($donnees = $obj->fetch())
                                                    {
                                                        ?> 
                                                                
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                             <h3>Objectif</h3>
                                                                            <h4 id="objectif"><?php echo $donnees['objectif_ligne1']; ?></h4>
                                                                        </div>
                                                                    </div>
                                                                
                                                                <div class="row">
                                                                      <div class="col-lg-offset-1">
                                                                            <h4 id="objectif1"><?php echo $donnees['objectif_ligne2']; ?></h4>
                                                                       </div>
                                                                </div>
                                                                <div class="row">
                                                                     <div class="col-lg-offset-1">
                                                                            <h4 id="objectif1"><?php echo $donnees['objectif_ligne3']; ?></h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-offset-1">
                                                                            <h4 id="objectif1"><?php echo $donnees['objectif_ligne4']; ?></h4>
                                                                    </div>
                                                                </div>
                                                                
                                                        <?php
                                                    }
                                                    $categ->closeCursor();
                                                    ?>
                                                </div>
                                                <div>
                                                    <h4> &nbsp;</h4>
                                                </div>



                                                <div  class="row">
                                                      <h3>Résultat</h3>
                                                     <!--Affichage des résultats-->

                                                      <div> <?php include('include/corps/exemple.php') ?></div>
                                                      <div class="row"><h3> &nbsp;&nbsp;Rapport technique en français ou en anglais</h3></div> 
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>      
            </header>

      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>