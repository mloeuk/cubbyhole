/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    /* Clique sur le lien S'inscire */
    $("a#linkInscription").on("click", function() {
        if ($("#formInscription").is(':hidden')) {
            $("#formConnexion").fadeOut("fast", function() {
                $("#formInscription").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

    /* Clique sur le lien Se connecter */
    $("a#linkConnexion").on("click", function() {
        if ($("#formConnexion").is(':hidden')) {
            $("#formInscription").fadeOut("fast", function() {
                $("#formConnexion").slideToggle("fast");
            });
        }
        event.preventDefault();
    });

});