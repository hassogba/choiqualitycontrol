<?php
    require 'config.php';

    $user = htmlspecialchars($_POST['username']);
    $pwd = htmlspecialchars($_POST['passwd']);
    if (!empty(isset($user)) && !empty(isset($pwd))){

        $auth = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ? AND admin = 1');
        $auth->execute(array($user, $pwd));

        $adminExist = $auth->rowCount();

        if ($adminExist == 1){
            $admin = $auth->fetch();

            session_start();
            $_SESSION['id'] = $admin['idadmin'];
            $_SESSION['username'] = $admin['username'];
            $_SESSION['password'] = $admin['password'];
            $_SESSION['statut'] = $admin['admin'];

            echo "Connecté";
        }else{
           echo "Echec";
        }
    }
?>