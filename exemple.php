<?php require 'process/t-index.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Laboratoire d'analyse micrographique</title>
	<?php include("include/entete/head.php"); ?>
</head>
<body>
	<!-- entete du corps-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<?php include ("include/entete/logo.php"); ?>
				</div>
				<div class="col-lg-9">
					<?php include("include/entete/titre.php"); ?>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-1">
						<?php include("include/entete/an.php") ?>
					</div>
					<div class="col-lg-11">
						<?php include("include/entete/barrivee.php") ?>						
					</div>
				</div>
			</div>
		</div>		
	</header>
	<!--corps-->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="row">
					<?php include("include/corps/menu.php") ?>
				</div>
				<div class="row">
					<?php include("include/corps/partenaire.php") ?>
				</div>
			</div>



			<div class="col-lg-6"><?php include("include/corps/centraldetailprestation.php") ?></div>
			<div class="col-lg-3"><?php include("include/corps/droit.php") ?></div>
		</div>
	</div>
	<!--pieds de page-->
	<footer>
		<div class="container">
			<div class="row">
				<!--pieds de page gauche-->
				<div class="col-lg-3">
					
				</div>
				<!--pieds de page central-->
				<div class="col-lg-6">
					
				</div>
				<!--pieds de page droit-->
				<div class="col-lg-3">
					
				</div>

			</div>
			
		</div>
	</footer>

</body>
</html>