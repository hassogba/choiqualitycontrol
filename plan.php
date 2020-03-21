<?php //require 'process/t-index.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Laboratoire d'analyse micrographique</title>
    <meta charset="utf-8" />
    <title>Laboratoire d'analyse micrographique</title>
    <meta charset="utf-8" />

    <style type="text/css">
                body{   
                 font-family: century;
                  width: 795px;
                   font-size: 14px;
                }
                
                #footersociete{
                        margin-top:280px;
                        }
                #menu{
                     border-style:;
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
                #central{   
     
                     border-width:0px 0px 0px 4px;
                     border-style:solid solid;
                     border-color:#e73e01 #e73e01;
                     
                }
                #titresite{ 
     
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
                                <div id="central" class="col-lg-8">
                                	<div class="row">
                                        
                                        <?php include("include/corps/centralplan.php") ?>
                                        
                                     </div>                                    
                                </div>                      
                             </div>
    <!--<div class="barreb"></div>-->
    <!--pieds de page-->
    <footer >
                        <div id="footerindex" >                             
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10"><?php include("include/footer.php"); ?></div>
                                    <div class="col-lg-1"></div>
                        </div>
                
            </footer>

</body>
</html>
