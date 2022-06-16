/*-----------------------------------------------------------------------------------
Template Name: Halari – Multipurpose Business Template
Template URI: https://themeforest.net/item/halari-multi-purpose-parallax-business-landing-page-psd-template/24429840
Description: Halari – is a clean and modern HTML business agency template.
Author: ashishmaraviya
Author URI: https://themeforest.net/user/ashishmaraviya
----------------------------------------------------------------------------------- */

$(document).ready(function(){

    //click event on a tag
    $('.wc-list').on("click",function(){
     
      var number =  $(this).data("number");
      var message =  $(this).data("message");
      
      //checking for device type
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          // redirect link for mobile WhatsApp chat awc
          window.open('https://wa.me/'+number+'/?text='+message, '-blank');  
      }
      else{
          // redirect link for WhatsApp chat in website
          window.open('https://web.WhatsApp.com/send?phone='+number+'&text='+message, '-blank'); 
      }
    })
    
    // chat widget open/close duration
    $('wc-style1').launchBtn( { openDuration: 400, closeDuration: 300 } );
});

// chat panel open/close function
(function($) {
  'use strict';

  $.fn.launchBtn = function(options) {
    var mainBtn, panel, clicks, settings, launchPanelAnim, closePanelAnim, openPanel, boxClick;

    mainBtn = $(".wc-button");
    panel = $(".wc-panel");
    clicks = 0;

    //default settings
    settings = $.extend({
      openDuration: 600,
      closeDuration: 200,
      rotate: true
    }, options);

    //Open panel animation
    launchPanelAnim = function() {
      panel.animate({
        opacity: "toggle",
        height: "toggle"
      }, settings.openDuration);
    };

    //Close panel animation
    closePanelAnim = function() {
      panel.animate({
        opacity: "hide",
        height: "hide"
      }, settings.closeDuration);
    };

    //Open panel and rotate icon
    openPanel = function(e) {
      if (clicks === 0) {
        if (settings.rotate) {
          $(this).removeClass('rotateBackward').toggleClass('rotateForward');
        }

        launchPanelAnim();
        clicks++;
      } else {
        if (settings.rotate) {
          $(this).removeClass('rotateForward').toggleClass('rotateBackward');
        }

        closePanelAnim();
        clicks--;
      }
      e.preventDefault();
      return false;
    };

    //Allow clicking in panel
    boxClick = function(e) {
      e.stopPropagation();
    };

    //Main button click
    mainBtn.on('click', openPanel);

    //Prevent closing panel when clicking inside
    panel.click(boxClick);

    //Click away closes panel when clicked in document
    $(document).click(function() {
      closePanelAnim();
	  if (clicks === 1) {
        mainBtn.removeClass('rotateForward').toggleClass('rotateBackward');
      }
      clicks = 0;
    });
  };
}(jQuery));
