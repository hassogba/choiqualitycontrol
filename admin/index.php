<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Authenfication - Administration</title>

        <!-- Bootstrap Core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome Core -->
        <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="media/f-icon/favicon.ico">
        <link rel="icon" type="image/gif" href="media/fi-con/animated_favicon1.gif">
        <!-- Custom Style -->
        <!--<link rel="stylesheet" type="text/css" href="../assets/css/style.css">-->
        <style>
            body{
                background-color: pink;
            }
            #admin-auth{
                background-color: #ffffff;
                box-shadow: #dddddd;
                margin-top: 150px;
            }
            h3{
                margin-bottom: 25px;
                text-align: center;
            }
            .parsley-errors-list li.parsley-required {
                background: red;
                padding: 3px;
                color: #fff;
                width: 70%;
            }
            #error{
                display: none;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" id="admin-auth">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Authentification</h3>
                    </div>
                    <div class="col-lg-12" id="error">
                        <span  class="alert alert-danger">Identifiant et/ou mot de passe incorrects !</span>
                    </div>
                    <div style="height: 10px;"></div>
                </div>
                <div style="height: 10px;"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post" class="form-horizontal" novalidate data-parsley-validate id="form-auth">
                            <div class="form-group"  style="margin: auto;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                    <input type="text" name="username" placeholder="Nom d'utilisateur"
                                           class="form-control" id="username"
                                           required data-parsley-required-message="Veuillez remplir ce champ"/>
                                </div>
                            </div>
                            <div style="height: 10px;"></div>
                            <div class="form-group" style="margin: auto;">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                    <input type="password" name="passwd" placeholder="Mot de passe" class="form-control"
                                           required data-parsley-required-message="Veuillez remplir ce champ" id="passwd"
                                           />
                                </div>
                            </div>
                            <div style="height: 10px;"></div>
                            <div class="form-group" style="margin: auto; margin-bottom: 15px;">
                                <input type="submit" name="submit" class="form-control btn btn-success" value="Connexion" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

        <!-- jQuery -->
        <script src="../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/parsley.min.js"></script>

        <script>
            $(document).ready(function () {
                // Sélectionner le champ username au chargement de la page
                $('#username').focus();
                // A chaque pressage de touche clavier, cacher le msg d'erreur
                $("#username").on('keyup', function () {
                    $("#error").css('display', '');
                });
                // A chaque pressage de touche clavier, cacher le msg d'erreur
                $("#passwd").on('keyup', function () {
                    $("#error").css('display', '');
                });

                // A la soumission du formulaire
                $('#form-auth').on('submit', function(){
                    $username = $("#username").val(); // Récupère le username
                    $passwd = $("#passwd").val(); // Récupère le password
                   $.post(
                       "/choiqualitycontrol/admin/process/auth.php", // La page de traitement du formulaire
                       { // les variables
                           username: $username,
                           passwd : $passwd
                       },

                       function (data) { // La function de résultat
                            if (data === "Echec"){
                                $("#error").css('display', 'block'); // Affiche le message d'erreur en cas d'echec
                            }
                            else{;
                                window.location.href = "/choiqualitycontrol/admin/accueil.php"; // Redirige en cas de succes
                            }
                       }
                   );
                   return false;
                });
            });
        </script>
    </body>
</html>