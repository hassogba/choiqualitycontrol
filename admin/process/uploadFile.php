<?php 
	/**
	*	$fileName nom récupérer après soumission
	*	$destination le repertoire cible
	*	$name nom de la prestation pour former le nom de l'image en bd
	*/
	function uploadFile($fileName, $destination, $name){
		//Contantes des fichiers...
		$tailleMax = 2097152; //2M taille maximale autorisé par le serveur apache
		$extensionsValides = array('jpg', 'jpeg', 'gif', 'png'); // Les extensions acceptées

		$imgName = $fileName['name']; // le nom du fichier
		$imgSize = $fileName['size']; // la taille du fichier
		$imgTmpName = $fileName['tmp_name']; // le nom temporaire du fichier
		

		$date = date('dmYHis'); // Récupère la date et l'heure courante
		$nom = str_replace(' ', '-', strtolower(noAccent($name))); // Mettre en miniscule, retirer les accents et remplacer les espaces par '-'

		$img = $date.'-'.$nom; // Constitue le nom qui sera enregistré en bd
		$newImg = '';
		$moveResult = '';

		if ($imgSize <= $tailleMax) {
			// On récupère l'extension du fichier
			$imgExtension = strtolower(substr(strrchr($imgName, '.'), 1));

			// On vérifie que l'extension est parmi celles autorisées
			if (in_array($imgExtension, $extensionsValides)) {
				// Chemin de l'image + le nom de l'image
				$path = $destination.$img.'.'.$imgExtension;
				
				// Récupère le nouveau nom du fichier
				$newImg = $img.'.'.$imgExtension;

				$moveResult = move_uploaded_file($imgTmpName, $path);
			}
		}

		return array('result' => $moveResult, 'file' => $newImg);
	}
 ?>