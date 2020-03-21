<?php
    require 'process/t-cat-prest.php';
    require 'admin/process/noAccent.php';
?>

 <?php // On récupère tout le contenu 
 $donnees = $categ->fetch();
 ?> 
 <!--on reccupère l'id -->
  <?php $service_id = $_GET['id'] //récupére l'id de la page précédente ?> 
  





   <html>
 
<head>
<link type='text/css' href='css/demo.css' rel='stylesheet' media='screen' />
</head>
    <body>
    <?php 
         
        $categ = $db->prepare('SELECT * FROM service WHERE service_id = ?'); //requete sql et service_id dans la table service = id récupéré
         
        $categ->execute(array($service_id));
        
            
            while ($donnees = $categ->fetch())
                {
                    //on affiche le nom et la description du service
    ?>  
                       

                        <center>
                            <div> <h2><?php echo $donnees['service_nom']; ?></h2> </div>
                            <div> <?php echo $donnees['service_descriptionfr']; ?> </div>
                        </center>
                <?php
                }  
                $categ->closeCursor();
                ?>
                 
         
    </body>
</html>
              