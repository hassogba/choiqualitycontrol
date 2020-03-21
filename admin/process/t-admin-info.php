<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');
	//require('../../const.php');

	// Récupération des exemples en bd
	//$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	//$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM contact ');
	$type->execute();
	// Récupération des contextes en bd
	$cont = $db->prepare('SELECT * FROM contexte WHERE contexte_active=1');
	$cont->execute();
	// Récupération des objectifs en bd
	$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	$obj->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		//Récupération des variables...
		//$categ = htmlspecialchars($_POST['categ']);
		$type = htmlspecialchars($_POST['type']);


		$service_nom = htmlspecialchars($_POST['nom']);
		$service_name = htmlspecialchars($_POST['name']);
		$service_prix = htmlspecialchars($_POST['Prix']);
		$service_duree = htmlspecialchars($_POST['duree']);


		//$service_descriptionfr = htmlspecialchars($_POST['descriptionfr']);
		//$service_descriptionan = htmlspecialchars($_POST['descriptionan']);
		//$service_objectiffr = htmlspecialchars($_POST['objectiffr']);
		//$service_objectifan = htmlspecialchars($_POST['objectifan']);
		

		
		
				

			
		
		//$photo = $_FILES['photo'];

		//Test que les champs ne sont pas vide
		if(!empty($type) && !empty($service_nom)){
			$insertPrest = $db->prepare('INSERT INTO service
(service_nom,service_name,service_prix,service_typeid,service_duree,service_active ,service_date) VALUES(?,?,?,?,?,?,NOW())');
				$insertPrest->execute(array($service_nom,$service_name,$service_prix,$type,$service_duree,1));

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
	$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM contact ');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM contexte WHERE contexte_active=1');
	$cont->execute();
	// Récupération des types en bd
	$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	$obj->execute();

 ?>