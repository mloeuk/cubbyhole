$(document).ready(function() {

    /* Clique sur le lien S'inscire */
    $("a#linkInscription").on("click", function(event) {
        if ($("#formInscription").is(':hidden')) {
            $("#formConnexion").fadeOut("fast", function() {
                $("#formInscription").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

    /* Clique sur le lien Se connecter */
    $("a#linkConnexion").on("click", function(event) {
        if ($("#formConnexion").is(':hidden')) {
            $("#formInscription").fadeOut("fast", function() {
                $("#formConnexion").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

});