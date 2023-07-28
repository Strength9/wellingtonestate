  jQuery('#EstatesAction').click(function (e) {
   jQuery('#toggle').addClass('open');
   jQuery(this).toggleClass('active');
   jQuery('.business-menu').addClass('open');
    e.stopPropagation();
  });
  
  jQuery('#close-toggle').click(function (e) {
    jQuery(this).toggleClass('open');
    jQuery('#toggle').removeClass('active');
    jQuery('.business-menu').removeClass('open');
    e.stopPropagation();
  });
  
  jQuery('#toggle').click(function (e) {
    jQuery(this).toggleClass('active');
    jQuery('.mobile_menu_overlay').addClass('open');
    e.stopPropagation();
  });
  
  jQuery('#close-toggle-mobile').click(function (e) {
    jQuery('#toggle').removeClass('active');
    jQuery('.mobile_menu_overlay').removeClass('open');
    e.stopPropagation();
  });
  
  jQuery('.open-sub').click(function (e) {
    jQuery(this).toggleClass('active');
    jQuery(this).parents('li').children('.sub-menu').toggleClass('open');
  });
  
  jQuery.fn.isInViewport = function() {
    var elementTop = jQuery(this).offset().top;
    var elementBottom = elementTop + jQuery(this).outerHeight();
  
    var viewportTop = jQuery(window).scrollTop();
    var viewportBottom = viewportTop + jQuery(window).height();
  
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  

if (document.body.classList.contains('dynamicdisplay')) {

    
    jQuery(window).scroll(function () {
        var scroll_top =     jQuery(this).scrollTop();
        if (scroll_top >= 350) {
            jQuery(".wellingtonMenu").addClass("show");
        } else {
            jQuery(".wellingtonMenu").removeClass("show");
        }
    });
    
};
    
    (function($, window) {
        var adjustAnchor = function() {
    
            var $anchor = $(':target'),
                    fixedElementHeight = 100;
    
            if ($anchor.length > 0) {
    
                $('html, body')
                    .stop()
                    .animate({
                        scrollTop: $anchor.offset().top - fixedElementHeight
                    }, 200);
    
            }
    
        };
    
        $(window).on('hashchange load', function() {
            adjustAnchor();
        });
    
    })(jQuery, window);
    

      jQuery('#searchsite').on('click', function(e) {
          jQuery("#searchholder").toggleClass("search-show"); //you can list several class names 
          e.preventDefault();
        });
      
      jQuery("#close-search-toggle").on('click', function(e) {
          jQuery("#searchholder").toggleClass("search-show"); //you can list several class names 
          e.preventDefault();
        });
if ($(".businessslider").length > 0) {
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.businessslider', {
      type  : 'fade',
      rewind: true,
     autoplay:true,
      
    } );
          splide.mount();
          } ); 
};
  
if ($(".jobssslider").length > 0) {
  document.addEventListener( 'DOMContentLoaded', function() {  
      var jobsplide = new Splide( '.jobssslider', {
      type  : 'fade',
      rewind: true,
      arrowPath: 'M422.6 278.6L445.3 256l-22.6-22.6-144-144L256 66.7 210.8 112l22.6 22.6L322.8 224 32 224 0 224l0 64 32 0 290.7 0-89.4 89.4L210.8 400 256 445.3l22.6-22.6 144-144z',
     autoplay:true,

    } );
      jobsplide.mount();
  } );
 }
