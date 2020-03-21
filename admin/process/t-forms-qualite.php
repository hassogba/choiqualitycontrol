<?php 
	require('config.php');
	require('noAccent.php');
	
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM norme WHERE norme_active=1');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM qualite WHERE qualite_active=1');
	$cont->execute();
	

	$root_dir = $_SERVER['DOCUMENT_ROOT'].'choiqualitycontrol/';

	//Contantes des fichiers...
	$dest = $root_dir.'media/img/prest/';
	

	if(isset($_POST['ajouter'])){
		//Récupération des variables...
		

		$nom = htmlspecialchars($_POST['nom']);
		$name = htmlspecialchars($_POST['name']);
		
		//Test que les champs ne sont pas vide
		if(!empty($nom)){
			$insertPrest = $db->prepare('INSERT INTO qualite(qualite_nom,qualite_name, qualite_active,qualite_date) VALUES(?,?,?,NOW())');
				$insertPrest->execute(array($nom,$name,1));
				$msg = "Prestation ajoutée avec succès";



			
		}
		else{
			$error = "Veuillez remplir tous les champs !";
		}
	}

	

	$type = $db->prepare('SELECT * FROM norme WHERE norme_active=1');
	$type->execute();
	$cont = $db->prepare('SELECT * FROM qualite WHERE qualite_active=1');
	$cont->execute();
	

 ?>