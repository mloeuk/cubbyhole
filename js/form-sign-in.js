$(document).ready(function() {

    var height = $(window).height();
    $("#home-form").css("height", height);
    $("#home-plus").css("height", height);

    /* Clique sur le lien S'inscire */
    $("a#linkInscription").on("click", function(event) {
        if ($("#divInscription").is(':hidden')) {
            $("#divConnexion").fadeOut("fast", function() { //Cache le formulaire connexion
                $("#divInscription").slideToggle("fast", function() {   //Affiche le formulaire inscription
                    $(this).find("input").first().focus();  //Focus sur le premier champ du formulaire
                });
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
                $("#divConnexion").slideToggle("fast", function() {
                    $(this).find("input").first().focus();
                });
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
                if (json.connexion === false) {
                    $("#error-sign-in-cnx").text(json.reponse).fadeIn();
                } else if(json.connexion === true) {
                    document.location.href = json.reponse;
                }
            },
            error: function(xhr, status, error) {
                $("#error-sign-in-cnx").html(xhr.responseText).fadeIn();
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
                if (json.inscription === false) {
                    $("#error-sign-in-ins").text(json.reponse).fadeIn();
                } else if(json.inscription === true) {
                    document.location.href = json.reponse;
                }
            },
            error: function(xhr, status, error) {
                $("#error-sign-in-ins").html(xhr.responseText).fadeIn();
            }
        });
        event.preventDefault();
    });

});