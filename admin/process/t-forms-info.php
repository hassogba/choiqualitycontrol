<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');
	//require('../../const.php');

	// Récupération des catégories en bd
	$categ = $db->prepare('SELECT * FROM info ');
	$categ->execute();
	// Récupération des types en bd
	//$type = $db->prepare('SELECT * FROM info ORDER BY type_nom ASC');
	//$type->execute();

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		

		$info_nom = htmlspecialchars($_POST['nom1']);
		$info_name = htmlspecialchars($_POST['name']);
		

				
		

		//Test que les champs ne sont pas vide
		if(!empty($info_nom)){
			$insertPrest = $db->prepare('INSERT INTO info(info_message,info_messagean,info_active ,info_date) VALUES(?,?,?,NOW())');
				$insertPrest->execute(array($info_nom,$info_name,1));


				
		}
	}

	// Récupération des catégories en bd
	$categ = $db->prepare('SELECT * FROM info ');
	$categ->execute();
	

 ?>