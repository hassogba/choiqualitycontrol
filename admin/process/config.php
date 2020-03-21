<?php
	//Variables de connexions...
	$sgbd = 'mysql'; //SGBD
	$host = '127.0.0.1'; // serveur de base données
	$dbname = 'choiqualitycontrol'; // nom de la base de données
	$user = 'root'; // nom d'utilisateur
	$pwd = ''; // Mot de passe

	try{
		$mysl_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		$db = new PDO('mysql:host=127.0.0.1;dbname=choiqualitycontrol', $user, $pwd, $mysl_options);//$pdo_options,
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Connexion établie avec la base de données";
	}
	catch(Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>