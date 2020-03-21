<?php 
	if(isset($msg)){
		echo '<div class="alert alert-sucess alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			'.$msg.'
			</div>';
	}
	$target = '/choiqualitycontrol/admin/edit-admin.php';
	$path = $_SERVER['SCRIPT_NAME'];

?>

<form method="post" enctype="multipart/form-data" action="" data-parsley-validate novalidate="novalidate">

	

	<div class="form-group">
		<label for="nom">Nom  <span style="color: red;">*</span> </label>
		<input type="text" id="nom" name="nom" class="form-control"
               data-parsley-required-message="Merci de renseigner un nom"
               placeholder="Nom de l'admin" required
               value="<?php if (isset($p)) echo $p['user_nom']; ?>"
        />
	</div>


	<div class="form-group">
		<label for="prenom">Prénoms <span style="color: red;">*</span></label>
		<input type="text" id="prenom" name="prenom" class="form-control"
               data-parsley-required-message="Merci de renseigner un prénom"
               placeholder="Prénoms de l'admin" required  
               value="<?php if (isset($p)) echo $p['user_prenom']; ?>"
        />
	</div>

	<div class="form-group">
		<label for="login">Login <span style="color: red;">*</span></span> </label>
		<input type="text" id="login" name="login" class="form-control"
               data-parsley-required-message="Merci de renseigner un login"
               placeholder="login de l'admin" required
               value="<?php if (isset($p)) echo $p['username']; ?>"
        />
	</div>


	<div class="form-group">
		<label for="pass">Pass <span style="color: red;">*</span></label>
		<input type="text" id="pass" name="pass" class="form-control"
               data-parsley-required-message="Merci de renseigner un mot de passe"
               placeholder="Mot de passe de l'admin" required
               value="<?php if (isset($p)) echo $p['password']; ?>"
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

