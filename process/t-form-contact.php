<?php
    require 'config.php';
    require 'mailer.php';
    $name = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $code = htmlspecialchars($_POST['code']);
    $societe = htmlspecialchars($_POST['societe']);
    $msg = htmlspecialchars($_POST['msg']);
    $mesg = stripslashes(nl2br($msg));

    if (!empty(isset($name)) && !empty(isset($mail)) && !empty(isset($phone)) && !empty(isset($adresse))&& !empty(isset($code))&& !empty(isset($societe)) && !empty(isset($mesg))){
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $cont = $db->prepare('INSERT INTO contact(contact_nom, contact_email, contact_tel,contact_societe,contact_adresse,contact_postal, contact_message, contact_date) VALUES(?,?,?,?, ?, ?, ?, NOW())');
            $ex = $cont->execute(array($name, $mail, $phone,$societe,$adresse,$code, $mesg));
            if ($ex){
                /* Variables du mail */
                $subject = "Nouveau message";

                sendMail('essohjean88@gmail.com', $subject, $msg, $msg);
            }
            echo "Succes";
        }else{
            echo "Echec";
        }
    }
    ?>


