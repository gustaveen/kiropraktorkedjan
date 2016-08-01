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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      var src = "wp-content/themes/kiropraktorkedjan/assets/img/";
      var skeleton_bg = $('#skeleton').css('background-image');

      $(".annotation.front").popover({placement: 'right', html: true, animation: false});
      $(".annotation.back").popover({placement: 'left', html: true, animation: false});


      $('.annotation').on('show.bs.popover', function (e) {
        $('.annotation').not(this).popover('hide');
        var $button = $(this);
        
        $('.skeleton img').attr('src', src + $button.attr('id') + '.png');
        // $('#skeleton').css('background-image', 'url(' + src + $button.attr('id') + '.png), ' + skeleton_bg);
        console.log($('.skeleton'));
      });

      $('.annotation').on('hide.bs.popover', function (e) {
        $('.skeleton img').attr('src', src + 'bg.gif');
        //$('#skeleton').css('background-image', skeleton_bg);
      });
          
      $('.skeleton-wrap').on( 'click', '.og-close', function(e) {
        $('.annotation').popover('hide');
        $('.skeleton img').attr('src', src + 'bg.gif');
      });

      if ($('main > .container').outerHeight(true) > ($('.symptom-header').outerHeight(true) + 80) +  ($('footer').outerHeight(true))) {
        $('#my-affix').affix({

        offset: {
          top: function() {
            return $('.symptom-header').outerHeight(true) + 80;
          },
          bottom: function() {
            return $('footer').outerHeight(true);
          }
        }
      });
      }

      //Shrink navbar on scroll
      // $(window).scroll(function() {
      //   if ($(document).scrollTop() > 50) {
      //     $('header').addClass('shrink');
      //   } else {
      //     $('header').removeClass('shrink');
      //   }
      // });

      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });

    // $('div[data-type="background"]').each(function(){
    //     var $bgobj = $(this); // assigning the object
    //     console.log($bgobj);
    //     var $window = $(window);
    //     $(window).scroll(function() {
    //       var yPos = -($window.scrollTop() / $bgobj.data('speed'));
    //       // Put together our final background position

    //       var coords = '50% '+ yPos + 'px';
    //       // Move the background
    //       $bgobj.css({ backgroundPosition: coords });
    //     });
    // });

      
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      $(".btn-city").click(function(e) {
        var city = $(this).data('city');
        $(".btn-city").removeClass('aktiv');
        $(this).addClass('aktiv');
        $(".city").toggleClass('is_active');
      });

      // var $introtext = $('.pufftext');

      // $(window).scroll(function() {
      //   var mTop = -($(window).scrollTop() / 5);
      //   // Put together our final background position
      //   var coords = mTop + 'px';
      //   var opac = 1 + ((mTop/100)/2  );
      //   $introtext.css({"margin-top": coords, "opacity": opac });
      // });

      //Hover puffar
      $('.service a').hover(function() {
        $(this).children('.read-more').addClass('active');
      }, function() {
        $(this).children('.read-more').removeClass('active');
      });
    
//       $('.navbar').removeClass('navbar-static-top');
//       $('.navbar').addClass('navbar-fixed-top');
//       var num = 540;
//     $(window).bind('scroll', function () {
//       console.log($(window).scrollTop());
//     if ($(window).scrollTop() > num) {
//         $('.navbar').removeClass('navbar-fixed-top');
//         $('.navbar').addClass('navbar-absolute');
//     } else {
//         $('.navbar').removeClass('navbar-absolute');
//         $('.navbar').addClass('navbar-fixed-top');
//     }
// });

    }
  },
  om_oss: {
    init: function() {
      //Toggle city buttons
      $(".btn-city").click(function(e) {
        var city = $(this).data('city');
        $(".btn-city").removeClass('aktiv');
        $(this).addClass('aktiv');
        $(".city").toggleClass('is_active');
      });
    }
  },

  priser: {
    init: function() {
      $(".btn-city").click(function(e) {
        var city = $(this).data('city');
        $(".btn-city").removeClass('aktiv');
        $(this).addClass('aktiv');
        $('.prices').removeClass('is_active');
        $(city).addClass('is_active');
      });
    }
  },

  // About us page, note the change from about-us to about_us.
  page_template: {
    init: function() {
      // JavaScript to be fired on the about us page
        // $('#my-affix').affix({
        //   offset: {
        //     top: 480,
        //     bottom: 400
        //   }
        // });

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
