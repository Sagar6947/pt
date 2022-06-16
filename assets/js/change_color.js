/* 
Template Name: Halari – Multipurpose Business Template
Template URI: https://themeforest.net/item/halari-multi-purpose-parallax-business-landing-page-psd-template/24429840
Description: Halari – Multi purpose Business landing page template for Service, corporate, agency, Consulting, startup.
Author: ashishmaraviya
Author URI: https://themeforest.net/user/ashishmaraviya
*/

$(function () {
	'use strict';

	(function() {
        $('<div class="skin-switcher">'+
        '<a href="#" class="color-option-box in-out">'+
                '<i class="fa fa-cog fa-spin"></i>'+
        '</a>'+
        '<div class="option-box-title">'+
                '<h3>Select Color</h3>'+
            '</div>'+
        '<ul>'+
            '<li class="colors"><span class="color" id="color-1"></span></li>'+
            '<li class="colors"><span class="color" id="color-2"></span></li>'+
            '<li class="colors"><span class="color" id="color-3"></span></li>'+
            '<li class="colors"><span class="color" id="color-4"></span></li>'+
            '<li class="colors"><span class="color" id="color-5"></span></li>'+
            '<li class="colors"><span class="color" id="color-6"></span></li>'+
        '</ul>'+
    '</div>').appendTo($('body'));
	})();

	$(".color-option-box").on("click", function (e) {
        e.preventDefault();
        if ($(this).hasClass("in-out")) {
            $(".skin-switcher").stop().animate({right: "0px"}, 100);
        } else {
            $(".skin-switcher").stop().animate({right: "-158px"}, 100);
        }
        
        $(this).toggleClass("in-out");
        return false;
        
    });

	$('.color').on('click', function(e) {
        var id = $(this).attr("id");        
       $("#skin-switcher-css").attr("href", "assets/css/" + id + ".css");
        e.preventDefault();
    });
});