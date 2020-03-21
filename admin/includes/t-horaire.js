//$(document).ready(function(){
    //$('#form-horaire').parsley();

    // Pour lundi
    $("select[name=etat-lun]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-lun]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-lun]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-lun]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-lun]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour mardi
    $("select[name=etat-mar]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-mar]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-mar]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-mar]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-mar]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour mercredi
    $("select[name=etat-mer]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-mer]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-mer]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-mer]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-mer]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour jeudi
    $("select[name=etat-jeu]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-jeu]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-jeu]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-jeu]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-jeu]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour vendredi
    $("select[name=etat-ven]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-ven]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-ven]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-ven]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-ven]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour samedi
    $("select[name=etat-sam]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-sam]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-sam]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-sam]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-sam]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });

    // Pour dimanche
    $("select[name=etat-dim]").on('change', function () {
        //console.log($(this).val());
        if ($(this).val() === 'o') {
            $("input[name=o-dim]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
            $("input[name=f-dim]")
                .css('display', 'block')
                .attr('data-parsley-required', 'true')
                .attr('data-parsley-required-message', 'Obligatoire')
                .parsley();
        } else {
            $("input[name=o-dim]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
            $("input[name=f-dim]")
                .css('display', 'none')
                .removeAttr('data-parsley-required')
                .parsley().destroy();
        }
    });
//});