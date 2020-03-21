
<?php
    require 'process/t-cat-qualite.php';
    require 'admin/process/noAccent.php';
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>La qualité</title>
</head>
<body>
	        <header>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

							<h1></h1>
						</div>
					</div>
				</div>		
			</header>

			<header>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

							<h1>La qualité</h1>
						</div>
					</div>
				</div>		
			</header>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">

						        <?php  
										   // On affiche chaque entrée une à une
										    $donnees = $categ->fetchAll();
										       

										    foreach ($donnees as $donnee):
								    
							    ?> 

										     <p> <h4><?php echo $donnee['qualite_nom'] ?></h4></p> 
										     
										     
											 <?php endforeach; // Termine le traitement de la requête ?>
											 
											 
											 <h3>Les normes :</h3>
								 
								<?php  
										   // On affiche chaque entrée une à une
										    $donnees = $norm->fetchAll();
										    foreach ($donnees as $donnee):    
								?>     
										    <p><h4><?php echo $donnee['norme_nom'] ?></h4></p>   
										    <?php endforeach; // Termine le traitement de la requête ?> 
												 
					</div>
				</div>
			</div>
	
</body>
</html>