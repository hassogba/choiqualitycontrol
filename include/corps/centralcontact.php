<?php require 'process/t-contact.php'; ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		  <title>Contact</title>
      <style type="text/css">
        #form{
          box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7),
            -1px 2px 20px rgba(255, 255, 255, 0.6) inset; 

        }
      </style>

		  <meta charset="utf-8" />
		  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
		  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
    
               <div  class="col-lg-12">
                    <!-- Coordonnées de Lisa -->
                    <div id="form" class="col-lg-offset-2 col-lg-12">

                          <div class="col-lg-12">
                    <!-- Message résultant de l'action -->
                                <div id="result" style="display: none;"></div>
                
                       <!-- Formulaire de contact -->
                                      <form method="post" novalidate="" data-parsley-validate="" id="form-contact" action="process/t-form-contact.php">
                                                <center>  <legend><h2>Formulaire de contact</h2></legend>                                                   

                                                   <div class="col-lg-4">
                                                       <div class="form-group">
                                                            <label for="nom">Nom <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" id="nom" required name="nom"
                                                                   placeholder="Nom" data-parsley-required-message="Nom manquant" />
                                                        </div>
                                                   </div>
                                                   <div class="col-lg-4">
                                                       <div class="form-group">
                                                            <label for="email">E-mail <span style="color: red">*</span></label>
                                                            <input type="email" class="form-control" id="email" required name="email"
                                                                   placeholder="Adresse email" data-parsley-required-message="Email manquant">
                                                        </div>
                                                   </div>
                                                   <div class="col-lg-4">
                                                       <div class="form-group">
                                                            <label for="phone">Téléphone<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" id="phone" required name="phone"
                                                                   placeholder="Numéro de téléphone" data-parsley-required-message="Numéro manquant">
                                                        </div>
                                                   </div>
                                      
                                                       <div class="col-lg-4">
                                                             <div class="form-group">
                                                                <label for="adresse">Adresse<span style="color: red">*</span></label>
                                                                <input type="text" class="form-control" id="adresse" required name="adresse"
                                                                       placeholder="Adresse" data-parsley-required-message="Adresse manquante">
                                                              </div>
                                                       </div>

                                                       <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="code">Code postal<span style="color: red">*</span></label>
                                                                <input type="text" class="form-control" id="code" required name="code"
                                                                       placeholder="Code postal" data-parsley-required-message="Code manquant">
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-4">
                                                           <div class="form-group">
                                                                <label for="societe">Société<span style="color: red">*</span></label>
                                                                <input type="text" class="form-control" id="societe" required name="societe"
                                                                       placeholder="Nom de votre société" data-parsley-required-message="Nom manquant">
                                                            </div>
                                                       </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="msg">Message <span style="color: red">*</span></label>
                                                                            <textarea name="msg" id="msg" cols="30" rows="7" class="form-control" required
                                                                                      placeholder="Message" data-parsley-required-message="Message manquant"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="submit" class="btn btn-primary" name="send" value="Envoyer le message"/>
                                                                        </div>
                                                                        <p style="color: red">(*) <i>Champs obligatoires</i></p>
                                                                    </div>

                                                                    <!-- Coordonnées de cqc --> 
                                                      <div class="col-lg-6">
                                                      
                                                                <div class="row">
                                                                     <span><i class="fa fa-3x fa-fw fa-map-marker"></i> <?php echo " " . $c['societe_postal']." ".$c['societe_ville']; ?></span>
                                                                </div>
                                                                <div class="row">
                                                                    <br><span><i class="fa fa-3x fa-fw fa-phone"></i> <?= $c['societe_tel']; ?></span>
                                                                </div>
                                                                <div class="row">
                                                                    <br><span><i class="fa fa-3x fa-fw fa-envelope"></i> <?php echo " " . $c['societe_email']; ?></span>
                                                                </div>
                                                      </div> 
                                                      </center>                 
                                      </form>
                                </div>
                      
                 
                    <div class="col-lg-2"></div>
             
                          </div>
                    </div>
                </div>

	    
		<!-- Pieds de page -->
	    
	      <!-- /Pieds de page -->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
	  	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <script src="assets/js/parsley.min.js"></script>

        <!-- Traitement en ajax du formulaire de contact -->
        <script>
            $(document).ready(function () {
                $("#nom").focus(); // Donner le focus au champ nom au chargement de la page
                /* Masquage du message d'erreur en cas de presse dur une touche clavier */
                $("#nom").on('keyup', function () {
                    $("#result").css('display', 'none');
                });
                $("#email").on('keyup', function () {
                    $("#result").css('display', 'none');
                });
                $("#phone").on('keyup', function () {
                    $("#result").css('display', 'none');

                });
                $("#adresse").on('keyup', function () {
                    $("#result").css('display', 'none');
                });
                $("#code").on('keyup', function () {
                    $("#result").css('display', 'none');
                });
                $("#societe").on('keyup', function () {
                    $("#result").css('display', 'none');
                });

                $("#msg").on('keyup', function () {
                    $("#result").css('display', 'none');
                });
                /* Masquage du message d'erreur en cas de presse dur une touche clavier */

                /* Traitement du formulaire à la soumission */
                $("#form-contact").on('submit', function () {
                    var nom = $("#nom").val();
                    var email = $("#email").val();
                    var tel = $("#phone").val();
                    var adresse = $("#adresse").val();
                    var code = $("#code").val();
                    var societe = $("#societe").val();
                    var msg = $("#msg").val();

                    $.post(
                        // Chmin vers le script php
                        "process/t-form-contact.php",
                        // Transmission des variable au script php
                        {
                          name: nom,
                          mail: email,
                          tel: tel,
                          adresse: adresse,
                          code: code,
                          societe: societe,
                          message: msg
                        },
                        // Récupération du retour
                        function (data) {
                            $('#result').html('<?php ?>')

                            if (data==="Succes"){
                                $('#result')
                                    .html('<p>Votre message a bien été envoyé</p>')
                                    .addClass('alert alert-success')
                                    .css('display', 'block');
                                // Vide les champs après envoi réussi
                                $("#nom").val("");
                                $("#email").val("");
                                $("#phone").val("");
                                $("#adresse").val("");
                                $("#code").val("");
                                $("#societe").val("");
                                $("#msg").val("");
                            }else{
                                $('#result')
                                    .html('<p>Message non envoyé </p>')
                                    .addClass('alert alert-danger')
                                    .css('display', 'block');
                            }
                            var page = for(i = 1; i <= 5; i++){<a href='page.php'></a>};
                            $('#result').html('+ page +');
                        },
                    )
                    return false;
                });
            });
        </script>
	</body>
</html>