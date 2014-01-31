$(document).ready(function() {

    /*
     * event.stopPropagation();
<<<<<<< HEAD
     * Stop la propagation du "click sur la page"
     */ 
=======
     * Stop la propagation du "Click sur la page"
     */
>>>>>>> 07fb800f9acb44c907083cc1dfa4fecc7628a036

    //click button nouveau dossier
    $("a#newFolder").on("click", function(event) {
        var trNewFolder = "<tr>";
        trNewFolder += "<td><i class='fa fa-folder folder-color'></i></td>";
        trNewFolder += "<td><input type=\"text\" id='nameNewFolder' class=\"form-control input-sm\" placeholder=\"Nom du dossier\"></td>";
        trNewFolder += "<td>Dossier</td>";
        trNewFolder += "<td>--</td>";
        trNewFolder += "<td>--</td>";
        trNewFolder += "</tr>";
        if ($("#listContents > tr.folder-empty").length) {
            $("#listContents").html(trNewFolder);
            $("#nameNewFolder").focus();
            $("#nameNewFolder").blur(function() {
                if (!$(this).val().length) {
                    $(this).closest("tr").remove();
                    $("#listContents").html("<tr class='folder-empty'><td colspan='5'><i class='fa fa-folder-open-o fa-5x'></i><p style='color: #99999B;'>Ce dossier est vide.</p></td></tr>");
                } else {
                    alert("Il faut créer le dossier");
                }
            });
        } else {
            $("#listContents > tr").first().before(trNewFolder);
            $("#nameNewFolder").focus();
            $("#nameNewFolder").blur(function() {
                if (!$(this).val().length) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Il faut créer le dossier");
                }
            });
        }
        event.preventDefault();
        event.stopPropagation();
    });
<<<<<<< HEAD

=======
    
    //Click renommer dossier
>>>>>>> 07fb800f9acb44c907083cc1dfa4fecc7628a036
    $("a#rename").on("click", function(event) {
        alert("coucou");
        event.preventDefault();
        event.stopPropagation();
    });

    //Click ligne du tableau
    $("tbody#listContents > tr").on("click", function(event) {
        if (!$(this).hasClass("folder-empty")) {
            $("tbody#listContents > tr").removeClass("tr-onclick");
            $(this).addClass("tr-onclick");
            $("#ul-default").hide();
            $("#ul-selected").show();
            event.stopPropagation();
        }
    });

    //Click sur la page
    $('html').click(function() {
        $("tbody#listContents > tr").removeClass("tr-onclick");
        $("#ul-default").show();
        $("#ul-selected").hide();
    });
});