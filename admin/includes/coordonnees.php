<!-- Formulaire d'adresse -->
<form method="post" id="form-adresse" data-parsley-validate novalidate>
    <div class="form-group">
        <label for="adress" class="control-label">Adresse</label>
        <input type="text" class="form-control" name="adress" required data-parsley-required-message="Veuillez renseigner l'adresse" />
    </div>
    <div class="form-group">
        <label for="code" class="control-label">Code postal</label>
        <input type="text" class="form-control" name="code" required data-parsley-required-message="Veuillez renseigner le code postal" />
    </div>
    <div class="form-group">
        <label for="ville" class="control-label">Ville</label>
        <input type="text" class="form-control" name="ville" required data-parsley-required-message="Veuillez renseigner la ville" />
    </div>
    <div class="form-group">
        <label for="mail" class="control-label">Email</label>
        <input type="email" class="form-control" name="mail" required
               data-parsley-required-message="Veuillez renseigner l'adresse email"
               data-parsley-type-message="Veuillez entrer une adresse email valide"
        />
    </div>
    <div class="form-group">
        <label for="tel" class="control-label">Téléphone</label>
        <input type="text" class="form-control" name="tel" required data-parsley-required-message="Veuillez renseigner le téléphone" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="submit-adress" value="Enregistrer"/>
    </div>
</form>