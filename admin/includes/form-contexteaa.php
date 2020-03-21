<?php 
	if(isset($msg)){
		echo '<div class="alert alert-sucess alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			'.$msg.'
			</div>';
	}
	$target = '/choiqualitycontrol/admin/edit-contexteaa.php';
	$path = $_SERVER['SCRIPT_NAME'];

?>

<form method="post" enctype="multipart/form-data" action="" data-parsley-validate novalidate="novalidate">
	
	

	<div class="form-group">
		<label for="type">Autre analyse<span style="color: red;">*</span></label>
		<select name="type" class="form-control" data-parsley-required-message = 'Merci de sélectionner une analyse' required>
			<option value="">Sélectionner une analyse</option>
			<?php while ($typ = $type->fetch()) {
			    if (isset($p) && $p['contexte_serviceid'] == $typ['service_id']) {
                    ?>
                    <option value="<?= $typ['service_id'] ?>" selected><?= $typ['service_nom'] ?></option>
                    <?php
                }else{?>
                    <option value="<?= $typ['service_id'] ?>"><?= $typ['service_nom'] ?></option>
                <?php }
			    } ?>
		</select>
	</div>

	

		<div><h3>Contexte en français</h3></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="form-group">
					<label for="l1">Ligne 1 <span style="color: red;">*</span> </label>
					<input type="text" id="l1" name="l1" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte" required value="<?php if (isset($p)) echo $p['contexte_ligne1']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="l2">Ligne 2 </label>
					<input type="text" id="l2" name="l2" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_ligne2']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="l3">Ligne 3 </span> </label>
					<input type="text" id="l3" name="l3" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_ligne3']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="l4">Ligne 4 </span> </label>
					<input type="text" id="l4" name="l4" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_ligne4']; ?>"/>
				</div>
			</div>
		</div>


	

		<div><h3>Contexte en anglais</h3></div>
		<div class="row">
			<div class="col-lg-3">
				<div class="form-group">
					<label for="ln1">Line 1  </label>
					<input type="text" id="ln1" name="ln1" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_line1']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="ln2">Line 2 </label>
					<input type="text" id="ln2" name="ln2" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_line2']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="ln3">Line 3 </span> </label>
					<input type="text" id="ln3" name="ln3" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_line3']; ?>"/>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<label for="ln4">Line 4 </span> </label>
					<input type="text" id="ln4" name="ln4" class="form-control"data-parsley-required-message="Merci de renseigner un contexte" placeholder="Contexte"  value="<?php if (isset($p)) echo $p['contexte_line4']; ?>"/>
				</div>
			</div>
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

