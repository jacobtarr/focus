/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

	// Use this variable to set up the common and page specific functions. If you
	// rename this variable, you will also need to rename the namespace below.
	var Sage = {
		// Adding touch support to home carousel
		'touchSupport': {
			init: function() {
				jQuery('#home-carousel').hammer().on('swipeleft', function(){
		  			jQuery(this).carousel('next'); 
		  		});
		  		jQuery('#home-carousel').hammer().on('swiperight', function(){
		  			jQuery(this).carousel('prev'); 
		  		});
			}
		},
		// All pages
		'common': {
			init: function() {
				objectFitImages();

				var url = window.location.pathname, 
		        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
		        // now grab every link from the navigation
		        if (!jQuery('body').hasClass('home')) {
		        	jQuery('.navbar-nav .nav-link').each(function(){
			            // and test its normalized href against the url pathname regexp
			            if(urlRegExp.test(this.href.replace(/\/$/,''))){
			                jQuery(this).addClass('active');
			            }
			        });
		        }

		        $('.work-section .nav-link').click(function (e) {
				    var tab = $(this);
				    if(tab.hasClass('active')){
				        window.setTimeout(function(){
				            $(".tab-pane").removeClass('active in');
				            tab.removeClass('active');
				            $('.nav-link').removeClass('active')
				        },1);
				    }
				});

				$('#bxslider1').bxSlider({
					pagerCustom: '#bx-pager1'
				});

				$('a[href="#workItem2"]').on('shown.bs.tab', function (e) {
					$('#bxslider2').bxSlider({
						pagerCustom: '#bx-pager2'
					});
				});

				$('a[href="#workItem3"]').on('shown.bs.tab', function (e) {
					$('#bxslider3').bxSlider({
						pagerCustom: '#bx-pager3'
					});
				});

				$('a[href="#workItem4"]').on('shown.bs.tab', function (e) {
					$('#bxslider4').bxSlider({
						pagerCustom: '#bx-pager4'
					});
				});

				$('a[href="#workItem5"]').on('shown.bs.tab', function (e) {
					$('#bxslider5').bxSlider({
						pagerCustom: '#bx-pager5'
					});
				});

				$('a[href="#workItem6"]').on('shown.bs.tab', function (e) {
					$('#bxslider6').bxSlider({
						pagerCustom: '#bx-pager6'
					});
				});

				$('a[href="#workItem7"]').on('shown.bs.tab', function (e) {
					$('#bxslider7').bxSlider({
						pagerCustom: '#bx-pager7'
					});
				});

				$('a[href="#workItem8"]').on('shown.bs.tab', function (e) {
					$('#bxslider8').bxSlider({
						pagerCustom: '#bx-pager8'
					});
				});

				$('a[href="#workItem9"]').on('shown.bs.tab', function (e) {
					$('#bxslider9').bxSlider({
						pagerCustom: '#bx-pager9'
					});
				});

				$('a[href="#workItem10"]').on('shown.bs.tab', function (e) {
					$('#bxslider10').bxSlider({
						pagerCustom: '#bx-pager10'
					});
				});

				$('a[href="#workItem11"]').on('shown.bs.tab', function (e) {
					$('#bxslider11').bxSlider({
						pagerCustom: '#bx-pager11'
					});
				});

				$('a[href="#workItem12"]').on('shown.bs.tab', function (e) {
					$('#bxslider12').bxSlider({
						pagerCustom: '#bx-pager12'
					});
				});
			},
			finalize: function() {
				// JavaScript to be fired on all pages, after page specific JS is fired
			}
		},
		'foobar': {
			init: function() {
				// console.log('hello');
			}
		},
		// Home page
		'home': {
			init: function() {
				// JavaScript to be fired on the home page
			},
			finalize: function() {
				// JavaScript to be fired on the home page, after the init JS
			}
		},
		// About us page, note the change from about-us to about_us.
		'about_us': {
			init: function() {
				// JavaScript to be fired on the about us page
			}
		}
	};

	// The routing fires all common scripts, followed by the page specific scripts.
	// Add additional events for more control over timing e.g. a finalize event
	var UTIL = {
		fire: function(func, funcname, args) {
			var fire;
			var namespace = Sage;
			funcname = (funcname === undefined) ? 'init' : funcname;
			fire = func !== '';
			fire = fire && namespace[func];
			fire = fire && typeof namespace[func][funcname] === 'function';

			if (fire) {
				namespace[func][funcname](args);
			}
		},
		loadEvents: function() {
			// Fire common init JS
			UTIL.fire('common');
			UTIL.fire('foobar');
			UTIL.fire('touchSupport');

			// Fire page-specific init JS, and then finalize JS
			$.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
				UTIL.fire(classnm);
				UTIL.fire(classnm, 'finalize');
			});

			// Fire common finalize JS
			UTIL.fire('common', 'finalize');
		}
	};

	// Load Events
	$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
