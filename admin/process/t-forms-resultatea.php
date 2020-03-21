<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');

	
	// Récupération des services en bd
	$type = $db->prepare('SELECT * FROM service WHERE  service_typeid=1 AND service_active=1');
	$type->execute();
	// Récupération des exemples en bd
	$cont = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	$cont->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//destination des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		//Récupération des variables...		
		$type = htmlspecialchars($_POST['type']);
		$service_nom = htmlspecialchars($_POST['nom']);
		$exemple_name = htmlspecialchars($_POST['name']);		
		$photo = $_FILES['photo'];

		//Test que les champs ne sont pas vide
		if(!empty($type) && !empty($service_nom)&& !empty($photo)){
			$res = uploadFile($photo, $dest, $service_nom);
			if ($res['result']) {
				$insertPrest = $db->prepare('INSERT INTO exemple (exemple_nom,exemple_name,exemple_serviceid,exemple_photo,exemple_active,exemple_date) VALUES(?,?,?,?,?,NOW())');
				$insertPrest->execute(array($service_nom, $exemple_name, $type, $res['file'],1));
				$msg = "Résultat ajouté avec succès";
			}
			else{
				$errorImg = "Une erreur s'est produite lors du téléchargement du fichier";
			}
		}
		else{
			$error = "Veuillez remplir tous les champs !";
		}
	}

	// Récupération des catégories en bd
	$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM service WHERE service_typeid=1 AND service_active=1');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	$cont->execute();
	

 ?>