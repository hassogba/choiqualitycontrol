<?php 
	if(isset($msg)){
		echo '<div class="alert alert-sucess alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			'.$msg.'
			</div>';
	}
	$target = 'choiqualitycontrol/admin/edit-societe.php';
	$path = $_SERVER['SCRIPT_NAME'];

?>

<form method="post" enctype="multipart/form-data" action="" data-parsley-validate novalidate="novalidate">
	
	

	<div class="form-group">
		<label for="type">type de société <span style="color: red;">*</span></label>
		<select name="type" class="form-control" data-parsley-required-message = 'Merci de sélectionner un service' required>
			<option value="">Sélectionner un type</option>
			<?php while ($typ = $type->fetch()) {
			    if (isset($p) && $p['societe_typeid'] == $typ['type_societe_id']) {
                    ?>
                    <option value="<?= $typ['type_societe_id'] ?>" selected><?= $typ['type_societe_nom'] ?></option>
                    <?php
                }else{?>
                    <option value="<?= $typ['type_societe_id'] ?>"><?= $typ['type_societe_nom'] ?></option>
                <?php }
			    } ?>
		</select>
	</div>
	
		
			<div class="row">
				<div class="col-lg-4">
					
				<div class="form-group">
					<label for="nom">Nom de la société <span style="color: red;">*</span>  </label>
					<input type="text" id="nom" name="nom" class="form-control"data-parsley-required-message="Merci de renseigner un nom" placeholder="Nom de société" required value="<?php if (isset($p)) echo $p['societe_nom']; ?>"/>
				</div>
				</div>
				<div class="col-lg-4">
					
	<div class="form-group">
		<label for="adresse">Adresse</label>
		<input type="text" id="adresse" name="adresse" class="form-control"
               data-parsley-required-message="Merci de renseigner une adresse"
               placeholder="Adresse" 
               value="<?php if (isset($p)) echo $p['societe_adresse']; ?>" />
	</div>
				</div>
				<div class="col-lg-4">
					
				<div class="form-group">
					<label for="email">E-mail  </label>
					<input type="text" id="email" name="email" class="form-control"data-parsley-required-message="Merci de renseigner un E-mail" placeholder="E-mail"  value="<?php if (isset($p)) echo $p['societe_email']; ?>"/>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
									<div class="form-group">
					<label for="postal">Code postal</label>
					<input type="text" id="postal" name="postal" class="form-control"data-parsley-required-message="Merci de renseigner un code postal" placeholder="Code postal"  value="<?php if (isset($p)) echo $p['societe_postal']; ?>"/>
				</div>
				</div>
				<div class="col-lg-4">
					
				<div class="form-group">
					<label for="tel">N° téléphone  </label>
					<input type="text" id="tel" name="tel" class="form-control"data-parsley-required-message="Merci de renseigner un numéro de téléphone" placeholder="Téléphone"  value="<?php if (isset($p)) echo $p['societe_tel']; ?>"/>
				</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
					<label for="ville">Ville </label>
					<input type="text" id="ville" name="ville" class="form-control"data-parsley-required-message="Merci de renseigner un nom de ville" placeholder="Nom de la ville de la société"  value="<?php if (isset($p)) echo $p['societe_ville']; ?>"/>
				</div>
				</div>
			</div>
		
					
		
				

				<div class="form-group">
					<label for="descfr">Description en français </label>
					<input type="text" id="descfr" name="descfr" class="form-control"data-parsley-required-message="Merci de renseigner une description" placeholder="Description de la société" value="<?php if (isset($p)) echo $p['societe_descriptionfr']; ?>"/>
				</div>

				<div class="form-group">
					<label for="descan">Description en anglais </label>
					<input type="text" id="descan" name="descan" class="form-control"data-parsley-required-message="Merci de renseigner une description" placeholder="Description de la société" value="<?php if (isset($p)) echo $p['societe_descriptionan']; ?>"/>
				</div>

				<div class="form-group">
					<label for="propriofr">Infos Propriétaire en français</label>
					<input type="text" id="propriofr" name="propriofr" class="form-control"data-parsley-required-message="Merci de renseigner les info du propriétaire" placeholder="Infos propriétaire"  value="<?php if (isset($p)) echo $p['societe_propriofr']; ?>"/>
				</div>
				<div class="form-group">
					<label for="proprioan">Infos Propriétaire en anglais</label>
					<input type="text" id="proprioan" name="proprioan" class="form-control"data-parsley-required-message="Merci de renseigner les info du propriétaire" placeholder="Infos propriétaire"  value="<?php if (isset($p)) echo $p['societe_proprioan']; ?>"/>
				</div>
				<!--<div class="form-group">
					<label for="date">Date de création  </label>
					<input type="date" id="date" name="date" class="form-control"data-parsley-required-message="Merci de renseigner la date de création" placeholder="Date de création"  value="<?php// if (isset($p)) echo $p['societe_datecreation']; ?>"/>
				</div>-->
	

	
	<div class="form-group">
		<label for="photo">Photo de la société<span style="color: red;">*</span> </label>
		<input type="file" id="photo" name="photo" 
               data-parsley-required-message="Merci d'ajouter une photo"
        required/>
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

