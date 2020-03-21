

<?php
    require 'process/t-ba.php';
      
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      
      <title>Information</title>
    </head>
    <body>
          <header>
                <div class="container">
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="defileParent ">
                                          <div class="defile ">
                                          
                                                 <?php  
                                                           // On affiche chaque entrée une à une
                                                            $donnees = $categ->fetchAll();
                                                            foreach ($donnees as $donnee):
                                                            //retourne la chaine de caractère entrée dans info_message
                                                            $extrait = substr($donnee['info_message'], 0,10000);
                                                            //retourne la chaine de caractère entrée dans service_nom                              
                                                 ?>          
                                                        
                                                            <div class="row">                      
                                                                      <h5> <div class="col-lg-11" style="color:#FF0000;"><center><?php echo $extrait; ?></center></div></h5>       
                                                                
                                                            </div>
                                                        
                                                            <?php endforeach; // Termine le traitement de la requête ?>                
                                          </div>
                                </div>
                            </div>
                      </div>
              </div>    
          </header>
       

    </body>
</html>




		
