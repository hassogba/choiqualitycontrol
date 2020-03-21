

<?php 
	if(isset($msg)){
		echo '<div class="alert alert-sucess alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			'.$msg.'
			</div>';
	}
	$target = '/choiqualitycontrol/admin/edit-accueil.php';
	$path = $_SERVER['SCRIPT_NAME'];

?>

<form method="post" enctype="multipart/form-data" action="" data-parsley-validate novalidate="novalidate">
	
	<div class="form-group">
		<label for="nom1">Nom du service en français <span style="color: red;">*</span> </label>
		<input type="text" id="nom1" name="nom1" class="form-control"
               data-parsley-required-message="Merci de renseigner un nom"
               placeholder="Nom du service" required
               value="<?php if (isset($p)) echo $p['contenuAccueil_titre']; ?>"
        />
	</div>


	<div class="form-group">
		<label for="name">Nom du service en anglais </label>
		<input type="text" id="name" name="name" class="form-control"
               data-parsley-required-message="Merci de renseigner un nom"
               placeholder="Nom du service" 
               value="<?php if (isset($p)) echo $p['contenuAccueil_titrean']; ?>"
        />
	</div>

	
	
	<!-- Bouton de soumission -->
	<div class="form-group">
        <?php if ($path != $target){?>
            <!-- Ajout d'une prestation -->

            <button class="btn btn-primary ladda-button pull-right" name="ajouter" data-style="zoom-out" type="submit">
                <span class="ladda-label">Ajouter</span>
            </button>
        <?php }else { ?>
            <!-- Modification d'une prestation -->
            <button class="btn btn-warning ladda-button pull-right" name="modifier" data-style="zoom-out" type="submit">
                <span class="ladda-label">Modifier</span>
            </button>
        <?php } ?>
	</div>
	
</form>

<input type="hidden" id="path" value="<?= $path; ?>" />
<input type="hidden" id="target" value="<?= $target; ?>" />

