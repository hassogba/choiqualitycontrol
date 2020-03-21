<?php
    require 'process/t-cat-prestdetail1.php';
    require 'admin/process/noAccent.php';
?>
<!Doctype html>
<html lang="fr">
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
        <div class="col-lg-10">
           <div class="col-lg-10">

               <h3>Analyses défaillances</h3>
           </div>
        </div>

      </div>
    </div> 
    <?php  
   // On affiche chaque entrée une à une
    $donnees = $categ->fetchAll();
    foreach ($donnees as $donnee):
    //retourne la chaine de caractère entrée dans service_descriptionfr
        $extrait = substr($donnee['service_nom'], 0,100);
        //retourne la chaine de caractère entrée dans service_nom
        $extrait1 = substr($donnee['service_nom'], 0,100);
     ?>       
              <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-6 mb-4">
                        <div>

                            <div  class="">

                                <a class="btn btn-link btn-lg active" href="detailprestation.php?id=<?php echo $donnee['service_id'] ?>" ><?php echo $extrait; ?></a>
                            </div> 
                        </div>

                        </div>
                      
                  </div>
              </div>
            <?php endforeach; // Termine le traitement de la requête ?>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>