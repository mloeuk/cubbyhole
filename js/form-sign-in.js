$(document).ready(function() {

    /* Clique sur le lien S'inscire */
    $("a#linkInscription").on("click", function(event) {
        if ($("#divInscription").is(':hidden')) {
            $("#divConnexion").fadeOut("fast", function() {
                $("#divInscription").slideToggle("fast");
                if ($("#error-sign-in-ins").is(':visible')) {
                    $("#error-sign-in-ins").hide().empty();
                }
            });
        }
        event.preventDefault();
    });

    /* Clique sur le lien Se connecter */
    $("a#linkConnexion").on("click", function(event) {
        if ($("#divConnexion").is(':hidden')) {
            $("#divInscription").fadeOut("fast", function() {
                $("#divConnexion").slideToggle("fast");
                if ($("#error-sign-in-cnx").is(':visible')) {
                    $("#error-sign-in-cnx").hide().empty();
                }
            });
        }
        event.preventDefault();
    });
    
    /* Envoie du formulaire de connexion */
    $("#formConnexion").on("submit", function(event) {
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            async: false,
            success: function(json) {
                if (json.reponse === 0) {
                    $("#error-sign-in-cnx").text(json.erreur).fadeIn();
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
        event.preventDefault();
    });

    /* Envoie du formulaire d'inscription */
    $("#formInscription").on("submit", function(event) {
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            async: false,
            success: function(json) {
                if (json.reponse === 0) {
                    $("#error-sign-in-ins").text(json.erreur).fadeIn();
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
        event.preventDefault();
    });

});