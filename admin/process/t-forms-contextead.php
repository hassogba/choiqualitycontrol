<?php 
	require('config.php');
	require('noAccent.php');
	require('uploadFile.php');
	//require('../../const.php');

	// Récupération des services en bd
	$type = $db->prepare('SELECT * FROM service WHERE service_active=1 AND service_typeid=2');
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
		$type = htmlspecialchars($_POST['type']);
		$contexte_l1 = htmlspecialchars($_POST['l1']);
		$contexte_l2 = htmlspecialchars($_POST['l2']);
		$contexte_l3 = htmlspecialchars($_POST['l3']);
		$contexte_l4 = htmlspecialchars($_POST['l4']);
		$contexte_ln1 = htmlspecialchars($_POST['ln1']);
		$contexte_ln2 = htmlspecialchars($_POST['ln2']);
		$contexte_ln3 = htmlspecialchars($_POST['ln3']);
		$contexte_ln4 = htmlspecialchars($_POST['ln4']);
		//Test que les champs ne sont pas vide
		if(!empty($type)){
			$insertPrest = $db->prepare('INSERT INTO contexte
(contexte_ligne1,contexte_line1,contexte_ligne2,contexte_line2,contexte_ligne3,contexte_line3,contexte_ligne4,contexte_line4,contexte_serviceid,contexte_active,contexte_date) VALUES(?,?,?,?,?,?,?,?,?,?,NOW())');
				$insertPrest->execute(array($contexte_l1,$contexte_ln1,$contexte_l2,$contexte_ln2,$contexte_l3,$contexte_ln3,$contexte_l4,$contexte_ln4,$type,1));
			
		}
	}

	// Récupération des catégories en bd
	$categ = $db->prepare('SELECT * FROM exemple WHERE exemple_active=1');
	$categ->execute();
	// Récupération des types en bd
	$type = $db->prepare('SELECT * FROM service WHERE service_active=1 AND service_typeid=2');
	$type->execute();
	// Récupération des types en bd
	$cont = $db->prepare('SELECT * FROM contexte WHERE contexte_active=1');
	$cont->execute();
	// Récupération des types en bd
	$obj = $db->prepare('SELECT * FROM objectif WHERE objectif_active=1');
	$obj->execute();

 ?>