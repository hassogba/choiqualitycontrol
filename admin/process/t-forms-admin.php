<?php 
	require('config.php');
	require('noAccent.php');
	//require('uploadFile.php');
	//require('../../const.php');

	// Récupération des exemples en bd
	//$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	//$categ->execute();
	// Récupération des types en bd
	//$type = $db->prepare('SELECT * FROM type ');
	//$type->execute();
	// Récupération des contextes en bd
	$cont = $db->prepare('SELECT * FROM user WHERE admin=1');
	$cont->execute();
	// Récupération des objectifs en bd
	//$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	//$obj->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	//$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		//Récupération des variables...
		//$categ = htmlspecialchars($_POST['categ']);
		//$type = htmlspecialchars($_POST['type']);


		$user_nom = htmlspecialchars($_POST['nom']);
		$user_prenom = htmlspecialchars($_POST['prenom']);
		$login = htmlspecialchars($_POST['login']);
		$pass = htmlspecialchars($_POST['pass']);

		//Test que les champs ne sont pas vide
		if(!empty($login) && !empty($pass)){
			$insertPrest = $db->prepare('INSERT INTO user
(user_nom,user_prenom,username,password,admin ,user_date) VALUES(?,?,?,?,?,NOW())');
				$insertPrest->execute(array($user_nom,$user_prenom,$login,$pass,1));

				$msg = "Service ajoutée avec succès";


			//$res = uploadFile($photo, $dest, $service_nom);
			//if ($res['result']) {
				
				//$msg = "service ajoutée avec succès";
			//}
			//else{
				//$errorImg = "Une erreur s'est produite lors du téléchargement du fichier";
			//}
		//}
		//else{
			//$error = "Veuillez remplir tous les champs !";
		}
		$error = "Veuillez remplir tous les champs !";
	}

	// Récupération des catégories en bd
	//$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	//$categ->execute();
	// Récupération des types en bd
	//$type = $db->prepare('SELECT * FROM type ');
	//$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM user WHERE admin=1');
	$cont->execute();
	// Récupération des types en bd
	//$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	//$obj->execute();

 ?>