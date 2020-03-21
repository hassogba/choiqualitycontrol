
<?php
    require 'process/t-cat-societe.php';
    require 'admin/process/noAccent.php';
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>La société</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-10">

					<h1></h1>
				</div>
			</div>
		</div>		
	</header>

	
		<div class="container">
			<div class="row">
				<div class="col-lg-10">

					<h1>La société</h1>
				</div>
			</div>
		</div>		
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
		           <?php  
						   // On affiche chaque entrée une à une
						    $donnees = $categ->fetchAll();
						    foreach ($donnees as $donnee):
						    //retourne la chaine de caractère entrée dans service_descriptionfr
						     $extrait = substr($donnee['societe_nom'], 0,100);
						        //retourne la chaine de caractère entrée dans service_nom
						     $extrait1 = substr($donnee['societe_nom'], 0,100);
				     ?> 
						     <p><font size="4"><?php echo $donnee['societe_descriptionfr'] ?></font></p>
						     <div>
						     	<h5>&nbsp;</h5>
						     </div>
						     <p><font size="4"><?php echo $donnee['societe_propriofr'] ?></font></p>
						     
						     <?php endforeach; // Termine le traitement de la requête ?>			
											 
			</div>
		</div>
	</div>	

</body>
</html>