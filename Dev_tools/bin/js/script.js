
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
  
  jQuery(window).on('resize scroll', function() {
   jQuery('.fade-in').each(function() {
      if (jQuery(this).isInViewport()) {
        jQuery(this).addClass('is-visible');
      }
    });
  });



    
    jQuery(window).scroll(function () {
        var scroll_top =     jQuery(this).scrollTop();
        if (scroll_top >= 350) {
            jQuery(".wellingtonMenu").addClass("show");
        } else {
            jQuery(".wellingtonMenu").removeClass("show");
        }
    });
    
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
