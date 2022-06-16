/*-----------------------------------------------------------------------------------
	Template Name: Halari � Multipurpose Business Template
	Template URI: https://themeforest.net/item/halari-multi-purpose-parallax-business-landing-page-psd-template/24429840
	Description: Halari � is a clean and modern HTML business agency template.
	Author: ashishmaraviya
	Author URI: https://themeforest.net/user/ashishmaraviya
----------------------------------------------------------------------------------- */
// 01. Page loader
// 02. Skill section progress radial chart
// 03. Portfolio section js
// 04. Counter section js
// 05. Back to top button
// 06. Dropdown menus js
// 07. Blog text limit
// 08. All slider
// 		- Hero slider
// 		- Other page hero slider
// 		- Team slider
// 		- Pricing slider
// 		- Testimonial slider
// 		- blog slider
// 		- Instagram slider

"use strict";
AOS.init();

/*=====================
    01 . Page loader
==========================*/
$(window).on('load', function() {
    setTimeout(function() {
        $('body').addClass('loaded');
	}, 100);
});


/*=====================
    02 . Skill section progress radial chart
==========================*/

var forEach = function (array, callback, scope) {
    for (var i = 0; i < array.length; i++) {
        callback.call(scope, i, array[i]);
    }
};

var a = 0;
var b = 0;
var oTop = 0;
var progress = $('#progress');
$(window).scroll(function() {
	if (progress.length) {
	    var oTop = progress.offset().top - window.innerHeight;
	    if (b == 0 && $(window).scrollTop() > oTop) {
	        
	        var max = -219.99078369140625;
	        forEach(document.querySelectorAll('.progress'), function (index, value) {
	            var percent = value.getAttribute('data-progress');
	            value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
	            value.querySelector('.value').innerHTML = percent + '%';
	        });

	        b = 1;
	    }
    }
});

/*=====================
    03 . Portfolio section js
==========================*/
$('.popup-gallery').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true,
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });

/*=====================
    04 . Counter section js
==========================*/
var counter = $('#counter');
$(window).scroll(function() {
	if (counter.length) {
		var scrolTop = counter.offset().top - window.innerHeight;
	  	if (a == 0 && $(window).scrollTop() > scrolTop) {
	    	$('.counter-value').each(function() {
	      		var $this = $(this),
	        	countTo = $this.attr('data-count');
	      		$({
	        		countNum: $this.text()
	      		}).animate({
	          		countNum: countTo
	        	},
	        	{
	          		duration: 2000,
	          		easing: 'swing',
	          		step: function() {
	            		$this.text(Math.floor(this.countNum));
	          		},
		          	complete: function() {
		            	$this.text(this.countNum);
		            	//alert('finished');
		          	}
	        	});
	    	});
	   	 	a = 1;
	  	}
	}
});

/*=====================
    05 . Back to top button
==========================*/
var btn = $('#return-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.fadeIn(500);
  } else {
    btn.fadeOut(500);
  }
});

btn.on('click', function(evnt) {
  evnt.preventDefault();
  $('html, body').animate({scrollTop:0}, '500');
});

/*=====================
    06 . Dropdown menus js
==========================*/
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

$('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

/*=====================
    07 . Blog text limit
==========================*/
$(".text-length").each(function(i){
        var len=$(this).text().trim().length;
        if(len>85)
        {
            $(this).text($(this).text().substr(0,85)+'...');
        }
});

/*=====================
    08 . All slider
==========================*/

/* Hero slider js */
var owl = $('.hero_slider_1');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:true,
    nav:true,
    smartSpeed: 1000,
    autoplay:false,
    items:5,
    responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		767: {
			items: 1
		},
		992: {
			items: 1
		},
		1000: {
			items:1,
		}
	}
});

/* Hero slider other pages js */
var owl = $('.hero_slider_2, .hero_slider_3, .hero_slider_4');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:false,
    nav:true,
    smartSpeed: 1000,
    autoplay:false,
    items:5,
    responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		767: {
			items: 1
		},
		992: {
			items: 1
		},
		1000: {
			items:1,
		}
	}
});

/* Team slider js */
var owl = $('.team_slider');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:false,
    nav:true,
    smartSpeed: 1000,
    autoplay:true,
    items:3,
    responsive: {
		0: {
			items: 1,
			margin:28,
			dots:true,
			nav:false
		},
		481: {
			items: 2,
			margin:28,
			dots:true,
			nav:false
		},
		576: {
			items: 2,
			dots:true,
			nav:false
		},
		768: {
			items: 3,
			dots:true,
			nav:false
		},
		992: {
			items: 3,
			dots:true,
			nav:true
		},
		1000: {
			items: 3,
			dots:true,
			nav:true
		},
		1200: {
			items: 3,
			dots:true,
			nav:true
		},
		1367: {
			items: 4,
			dots:true,
			nav:true
		}
	}
});

/* Pricing slider js */
var owl = $('.package_slider');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:false,
    nav:true,
    center:true,
    smartSpeed: 1000,
    autoplay:false,
    items:5,
    responsive: {
		0: {
			items: 1,
			margin:15,
			dots:true,
			nav:false
		},
		481: {
			items: 2,
			dots:true,
			nav:false
		},
		768: {
			items: 2,
			dots:true,
			nav:true
		},
		992: {
			items: 3,
			dots:true,
			nav:true
		},
		1200: {
			items: 3,
			dots:true,
			nav:true
		},
		1367: {
			items: 3,
			dots:true,
			nav:true
		}
	}
});

/* Testimonial slider js */
var owl = $('.testimonial_slider');
owl.owlCarousel({
    margin:20,
    loop: true,
    dots:false,
    nav:true,
    smartSpeed: 1000,
    autoplay:true,
    items:5,
    responsive: {
		0: {
			items: 1,
			nav:false
		},
		600: {
			items: 1,
			nav:false
		},
		768: {
			items: 1,
			nav:false
		},
		992: {
			items: 1,
			nav:true
		},
		1000: {
			items:3,
			nav:true
		},
		1367: {
			items: 3,
			nav:true
		}
	}
});

/* Blog slider js */
var owl = $('.blog_slider');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:false,
    nav:true,
    smartSpeed: 1000,
    autoplay:false,
    items:3,
    responsiveClass: true,
    responsive: {
		0: {
			items: 1,
			dots:true,
			nav:false
		},
		576: {
			items: 2,
			dots:true,
			nav:false
		},
		768: {
			items: 2,
			dots:true,
			nav:false
		},
		992: {
			items: 3,
			dots:true,
			nav:false
		},
		1200: {
			items:3,
			dots:true,
			nav:false
		},
		1367: {
			items: 3,
			dots:true,
			nav:false
		}
	}
});

/* Instagram slider js */
var owl = $('.insta_slider');
owl.owlCarousel({
    margin:0,
    loop: true,
    dots:false,
    nav:true,
    smartSpeed: 1000,
    autoplay:true,
    items:5,
    responsive: {
		0: {
			items: 1,
			margin:30,
			nav:false
		},
		421: {
			items: 2,
			margin:30,
			nav:false
		},
		576: {
			items: 2,
			nav:false
		},
		600: {
			items: 2,
			nav:false
		},
		768: {
			items: 3,
			nav:false
		},
		992: {
			items: 4,
			nav:false
		},
		1000: {
			items:4,
			nav:false
		}
		,
		1367: {
			items: 4,
			nav:false
		}
	}
});


