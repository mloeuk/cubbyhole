$(document).ready(function() {

    /* Clique sur le lien S'inscire */
    $("a#linkInscription").on("click", function(event) {
        if ($("#divInscription").is(':hidden')) {
            $("#divConnexion").fadeOut("fast", function() {
                $("#divInscription").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

    /* Clique sur le lien Se connecter */
    $("a#linkConnexion").on("click", function(event) {
        if ($("#divConnexion").is(':hidden')) {
            $("#divInscription").fadeOut("fast", function() {
                $("#divConnexion").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

    $("#formConnexion").on("submit", function(event) {
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            async: false,
            success: function(json) {
                if (json.reponse === 0) {
                    $("#error-sign-in").html("<div class=\"alert alert-danger\">" + json.erreur + "</div>");
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
        event.preventDefault();
    });
    
    $("#formInscription").on("submit", function(event) {
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            async: false,
            success: function(json) {
                if (json.reponse === 0) {
                    alert('Tout est bon');
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
        event.preventDefault();
    });

});