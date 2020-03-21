<form method="post" id="form-horaire" novalidate data-parsley-validate>
    <table>
        <!-- En-tête du tableau -->
            <thead>
                <tr>
                    <th>Jour <span style="color: red">*</span></th>
                    <th>Etat <span style="color: red">*</span></th>
                    <th>Heure O. <span style="color: red">*</span></th>
                    <th>Heure F. <span style="color: red">*</span></th>
                </tr>
            </thead>
        <!--./ En-tête du tableau -->
        <!-- lundi-->
        <tr>
            <td>
                <input type="text" class="form-control" name="lundi" id="lundi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Lundi" disabled />
            </td>
            <td>
                <select name="etat-lun" id="etat" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>

            </td>
            <td>
                <input type="time" class="form-control" name="o-lun" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-lun"  style="display: none;" />
            </td>
        </tr>
        <!--./ Lundi -->
        <!-- Mardi -->
        <tr>
            <td>
                <input type="text" class="form-control" name="mardi" id="mardi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Mardi" disabled />
            </td>
            <td>
                <select name="etat-mar" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-mar" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-mar" style="display: none;" />
            </td>
        </tr>
        <!-- ./ Mardi-->
        <!-- Mercredi -->
        <tr>
            <td>
                <input type="text" class="form-control" name="mercredi" id="mercredi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Mercredi" disabled />
            </td>
            <td>
                <select name="etat-mer" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-mer" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-mer" style="display: none;" />
            </td>
        </tr>
        <!--./ Mercredi -->
        <!--Jeudi-->
        <tr>
            <td>
                <input type="text" class="form-control" name="jeudi" id="jeudi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Jeudi" disabled />
            </td>
            <td>
                <select name="etat-jeu" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-jeu" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-jeu" style="display: none;" />
            </td>
        </tr>
        <!--./ Jeudi-->
        <!--Vendredi -->
        <tr>
            <td>
                <input type="text" class="form-control" name="vendredi" id="vendredi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Vendredi" disabled />
            </td>
            <td>
                <select name="etat-ven" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-ven" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-ven" style="display: none;" />
            </td>
        </tr>
        <!--./ Vendredi -->
        <!--Samedi -->
        <tr>
            <td>
                <input type="text" class="form-control" name="samedi" id="samedi" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Samedi" disabled />
            </td>
            <td>
                <select name="etat-sam" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-sam" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-sam" style="display: none;" />
            </td>
        </tr>
        <!--./ Samedi -->
        <!--Dimanche -->
        <tr>
            <td>
                <input type="text" class="form-control" name="dimanche" id="dimanche" required
                       data-parsley-required-message="Merci de renseigner ce champ" value="Dimanche" disabled />
            </td>
            <td>
                <select name="etat-dim" class="form-control">
                    <option value="">Etat</option>
                    <option value="o">Ouvert</option>
                    <option value="f">Fermé</option>
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="o-dim" style="display: none;" />
            </td>
            <td>
                <input type="time" class="form-control" name="f-dim" style="display: none;" />
            </td>
        </tr>
        <!--./ Dimanche -->
        <!-- Soumission -->
        <tr style="height: 15px;"><td></td></tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" class="btn btn-primary" name="submit-horaire" value="Enregistrer" />
            </td>
        </tr>
    </table>
</form>

<script>

</script>