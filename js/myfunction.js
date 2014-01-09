/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($) {

    //Si visible, on cache...
    $.fn.isVisible = function() {
        if ($(this).is(':visible'))
            $(this).hide();
    };

    $.fn.isHidden = function() {
        if ($(this).is(':hidden'))
            $(this).show();
    };

})(jQuery);