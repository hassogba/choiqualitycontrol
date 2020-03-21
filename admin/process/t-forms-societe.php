<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');
	//require('../../const.php');

	// Récupération des catégories en bd
	//$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	//$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM type_societe WHERE type_societe_active=1');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM societe WHERE societe_active=1');
	$cont->execute();
	// Récupération des types en bd
	//$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	//$obj->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		//Récupération des variables...
		//$categ = htmlspecialchars($_POST['categ']);
		$type = htmlspecialchars($_POST['type']);


		$societe_nom = htmlspecialchars($_POST['nom']);
		$societe_adresse = htmlspecialchars($_POST['adresse']);
		$societe_email = htmlspecialchars($_POST['email']);
		$societe_postal = htmlspecialchars($_POST['postal']);

		$societe_ville = htmlspecialchars($_POST['ville']);
		$societe_descriptionfr = htmlspecialchars($_POST['descfr']);
		$societe_descriptionan = htmlspecialchars($_POST['descan']);
		$societe_propriofr = htmlspecialchars($_POST['propriofr']);
		$societe_proprioan = htmlspecialchars($_POST['proprioan']);
		$societe_tel = htmlspecialchars($_POST['tel']);
		//$societe_datecreation = htmlspecialchars($_POST['date']);


		
		
				

			
		
		$photo = $_FILES['photo'];

		//Test que les champs ne sont pas vide
		if(!empty($type) && !empty($societe_nom)&& !empty($photo)){
			$res = uploadFile($photo, $dest, $societe_nom);
			if ($res['result']) {
				$insertPrest = $db->prepare('INSERT INTO societe
(societe_nom,societe_adresse,societe_email,societe_postal,societe_ville,societe_descriptionfr,societe_descriptionan,societe_propriofr,societe_proprioan,societe_tel,societe_typeid,societe_photo,societe_active,societe_date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())');
				$insertPrest->execute(array($societe_nom,$societe_adresse,$societe_email,$societe_postal,$societe_ville,$societe_descriptionfr,$societe_descriptionan,$societe_propriofr,$societe_proprioan, $societe_tel, $type,$res['file'],1));
				$msg = "Prestation ajoutée avec succès";
			}
			else{
				$errorImg = "Une erreur s'est produite lors du téléchargement du fichier";
			}
		}
		else{
			$error = "Veuillez remplir tous les champs !";
		}
	}

	

	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM type_societe WHERE type_societe_active=1');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM societe WHERE societe_active=1');
	$cont->execute();
	
 ?>