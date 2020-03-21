<?php //require 'process/t-index.php'; ?>
<!DOCTYPE html>
<html lang="fr">
        <head>
            <title>Laboratoire d'analyse micrographique</title>            
           

            <style type="text/css">
                .img-cat{
                            width:50% ;
                            height:100px ;       
                       }
                       #footerindex{
                margin-top:120px;

                }
        body{   
                 font-family: century;
                  width: 795px;
                   font-size: 14px;
                }
        #footerdetail{

                    margin-top:2px;

                }
        #menu{
                    
                     margin-top: 10%;
                     border-width:0px 0px 4px 4px;
                     border-style:solid solid;
                     border-color:#e73e01 #e73e01;
                     padding:0 10px;
              }
        .barreh{
                      background-color: #e73e01;
                      width: 1450px;
                      height: 4px;
                }
        
                }
        #centraldetail{   
     
                      border-width:0px 0px 0px 4px;
                     border-style:solid solid;
                     border-color:#e73e01 #e73e01;
                     
                }
        #titresite{ 
     
                     border-width:0px 0px 0px 4px;
                     border-style:solid solid;
                     border-color:#e73e01 #e73e01;
                     
                }
                 #titresite1{ 
     
                     border-width:0px 0px 0px 4px;
                     border-style:solid solid;
                     border-color:#e73e01 #e73e01;
                     
                }
        footer{
                    border-width:4px 0px 0px 0px;
                    border-style:solid solid;
                    border-color:#e73e01 #e73e01;
                     width: 1450px;
                }
        #labo{
                    width: 1000px;
                }

                                    
     </style>          
            <?php include("include/entete/head.php"); ?>
        </head>
        <body>
    <!-- entete du corps-->
                  <header>               
                        <div class="row">
                                <div class="col-lg-4">
                                    <?php include ("include/entete/logo.php"); ?>
                                </div>
                                <div id="titresite" class="col-lg-8">
                                    <div id="labo" class="row"><?php include("include/entete/titre.php"); ?></div>                                  
                                    <div class="row"><?php include("include/entete/barrivee.php") ?></div>                                          
                                </div>
                        </div>
                        <div class="barreh"></div>           
                    
            </header>

             <!--corps-->
                        
                            <div id="corps" class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <?php include("include/corps/menu.php") ?>

                                    </div>                                 
                                </div>
                                <div id="titresite1" class="col-lg-8">
                                        <?php include("include/corps/centraldetailprestation.php") ?>                                   
                                </div>                      
                             </div>
                        
            
            <!--pieds de page-->
            <footer >
                        <div id="footerdetail" >                             
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10"><?php include("include/footer.php"); ?></div>
                                    <div class="col-lg-1"></div>
                        </div>
                
            </footer>


</body>
</html>