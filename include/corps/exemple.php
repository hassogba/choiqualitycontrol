
<?php  require 'process/t-cat-prestexemple.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Exemple</title>
    <style type="text/css">

                .img-cat{
                            width:130% ;
                            height:30% ;                             

                       }
                #footerindex{

                            margin-top:120px;
                       }
                #nomimages{
                        
                        font-family: century ;
                        font-size: large;                    
                        display: table-cell; /* comportement visuel de cellule */
                        vertical-align: middle;
                       
                       } 

            </style>

</head>
<body >  
 


   
    <?php // On récupère tout le contenu 
 $donnees = $categ->fetch();
 ?> 
 <!--on reccupère l'id -->
 <?php $exemple_id = $_GET['id'] //récupére l'id de la page précédente ?>
 <?php
 $cont = $db->prepare('SELECT * FROM exemple WHERE exemple_serviceid = ? AND exemple_active=1'); //requete sql et service_id dans la table service = id récupéré
 $cont->execute(array($exemple_id));
 while ($cat = $cont->fetch())
    {
        ?>
        
        <div class="image">
            <div class="row">
            <div class="col-lg-12">
                 
            </div>
        </div>
        
            <?php
            $imgcat = $cat['exemple_photo'];
            $nomcateg = $cat['exemple_nom'];
            $nomcateg = strtolower(noAccent($nomcateg));
            $nomcat = str_replace(' ', '-', $nomcateg);
             $nomcat = str_replace('%', '-', $nomcateg);
             $nomcat = str_replace('?', '-', $nomcateg);
            echo '
                    <div class="row" >

                                                 
                                        <div id="nomimages" class="col-lg-6 ">'.$cat['exemple_nom'].'</div>

                                        <div class="col-lg-6"> <img src="/choiqualitycontrol\media\img\prest\\'.$imgcat.'" class="img-cat"/> </div>
                    </div>

                    ';
                    ?>
                </div>
                <?php } ?>
        
                <?php
                
                  
                $categ->closeCursor();
                ?>
             
</body>
</html>