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

});