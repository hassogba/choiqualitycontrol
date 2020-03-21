






<?php
    require 'process/t-cat-prest.php';
    require 'admin/process/noAccent.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  
  <title>Accueil</title>
</head>
<body>
              <header>
                          <div class="container">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <h3>
                                         
                                    </h3>
                                  </div>
                                </div>
                           </div>     
              </header>

  
              <div class="container">
                    <div class="row">
                      <div class="col-lg-11">

                        <h3>
                              <a href="societe.php" title="informations sur la société"><font size="5" color="#FF0000">Choi Quality Control(CQC)</font></a> vous propose une expertise d’analyse micrographique pour assurer la qualité de vos produits ainsi que la stabilité de votre ligne de production. 
                        </h3>
                      </div>
                    </div>
               </div>     
  
               <div class="container">
                  <div class="row">
                       <div class="col-lg-11">
                       
                         <font size="5">Les services d’analyses vous proposent :</font>
                       </div>
                   </div>
               </div>
                          <?php  
                                     // On affiche chaque entrée une à une
                                      $donnees = $categ->fetchAll();
                                      foreach ($donnees as $donnee):
                                      
                                          //retourne la chaine de caractère entrée dans service_nom
                                          $extrait = substr($donnee['contenuAccueil_titre'], 0,100);
                                       ?> 

                                      <div class="container">
                                            <div  class="row">
                                                    
                                                    <h4><div class="col-lg-offset-1"><li><font size="4"><?php echo $extrait; ?></font></li></div></h4>
                                            </div>
                                      </div>      

                               
                        <?php endforeach; // Termine le traitement de la requête ?>
                              
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</body>
</html>