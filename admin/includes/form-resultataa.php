<?php 
	if(isset($msg)){
		echo '<div class="alert alert-sucess alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			'.$msg.'
			</div>';
	}
	$target = '/choiqualitycontrol/admin/edit-resultataa.php';
	$path = $_SERVER['SCRIPT_NAME'];

?>

<form method="post" enctype="multipart/form-data" action="" data-parsley-validate novalidate="novalidate">	

	<div class="form-group">
		<label for="type">Service <span style="color: red;">*</span></label>
		<select name="type" class="form-control" data-parsley-required-message = 'Merci de sélectionner une analyse' required>
			<option value="">Sélectionner une analyse</option>
			<?php while ($typ = $type->fetch()) {
			    if (isset($p) && $p['exemple_serviceid'] == $typ['service_id']) {
                    ?>
                    <option value="<?= $typ['service_id'] ?>" selected><?= $typ['service_nom'] ?></option>
                    <?php
                }else{?>
                    <option value="<?= $typ['service_id'] ?>"><?= $typ['service_nom'] ?></option>
                <?php }
			    } ?>
		</select>
	</div>

	
	
		
				<div class="form-group">
					<label for="nom">Description échantillon français  <span style="color: red;">*</span>  </label>
					<input type="text" id="nom" name="nom" class="form-control"data-parsley-required-message="Merci de renseigner une description" placeholder="Nom de l'echantillon" required value="<?php if (isset($p)) echo $p['exemple_nom']; ?>"/>
				</div>
			


	
	<div class="form-group">
		<label for="name">Description échantillon anglais</label>
		<input type="text" id="name" name="name" class="form-control"
               data-parsley-required-message="Merci de renseigner une description"
               placeholder="Nom de l'echantillon" 
               value="<?php if (isset($p)) echo $p['exemple_name']; ?>"
        />
	</div>

	
	

	
	<div class="form-group">
		<label for="photo">Photo de l'échantillon <span style="color: red;">*</span></label>
		<input type="file" id="photo" name="photo" required
               data-parsley-required-message="Merci d'ajouter une photo"
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

