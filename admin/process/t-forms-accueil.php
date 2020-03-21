<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');
	//require('../../const.php');

	// Récupération des catégories en bd
	//$categ = $db->prepare('SELECT * FROM contenuaccueil ');
	//$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM type ORDER BY type_nom ASC');
	$type->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		

		$service_nom = htmlspecialchars($_POST['nom1']);
		$service_name = htmlspecialchars($_POST['name']);

				
		

		//Test que les champs ne sont pas vide
		if(!empty($service_nom)){
			$insertPrest = $db->prepare('INSERT INTO contenuaccueil(contenuaccueil_titre,contenuaccueil_titrean,contenuaccueil_active ,contenuaccueil_date) VALUES(?,?,?,NOW())');
				$insertPrest->execute(array($service_nom,$service_name,1));


				
		}
	}

	// Récupération des services de l'accueil en bd
	$categ = $db->prepare('SELECT * FROM contenuaccueil ');
	$categ->execute();
	

 ?>