
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

   var controller;
        
        jQuery(window).on("resize", function(e) {
           if (jQuery(window).width() < 900 && (controller !== undefined || controller !== null)) {
             controller = controller.destroy(true)
           } else if (controller === undefined || controller === null) {
             console.log('init scroll');
             initialise()
           }
         });
        
         jQuery(function() {
           initialise()
         });
        
         function initialise() {
           if (!Modernizr.touch && jQuery( window ).width() >= 900) { // check not mobile
             // init
             controller = new ScrollMagic.Controller();
        
             var scaleBg1 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax1 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg2 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax2 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg3 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax3 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg4 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax4 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg5 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax5 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg6 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax6 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
             var scaleBg7 = new TimelineMax()
               .add([
                 TweenMax.to("#parallax7 .bg", 1, {scale: "1.1", ease: Linear.easeNone}),
               ])
        
        
        
        
             // pin container
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               duration: "2700"
             })
               .setPin("#pinContainer")
               // .addIndicators({name: "pin Container", indent: 0})
               .addTo(controller);
        
        
             //keep first slide active
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "300",
               duration: "6000"
             })
               .setClassToggle("#parallax1", "in-scene")
               .addTo(controller);
        
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "-100",
               duration: "400"
             })
               .setTween(scaleBg1)
               // .addIndicators({name: "slide 1", indent: 150})
               .addTo(controller);
        
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "300",
               duration: "400"
             })
               .setTween(scaleBg2)
               .setClassToggle("#parallax2", "active")
               // .addIndicators({name: "slide 2", indent: 300})
               .addTo(controller);
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "700",
               duration: "400"
             })
               .setClassToggle("#parallax3", "active")
               .setTween(scaleBg3)
               // .addIndicators({name: "slide 3", indent: 450})
               .addTo(controller);
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "1100",
               duration: "400"
             })
               .setClassToggle("#parallax4", "active")
               .setTween(scaleBg4)
               // .addIndicators({name: "slide 4", indent: 600})
               .addTo(controller);
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "1500",
               duration: "400"
             })
               .setClassToggle("#parallax5", "active")
               .setTween(scaleBg5)
               // .addIndicators({name: "slide 5", indent: 750})
               .addTo(controller);
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "1900",
               duration: "400"
             })
               .setClassToggle("#parallax6", "active")
               .setTween(scaleBg6)
               // .addIndicators({name: "slide 6", indent: 800})
               .addTo(controller);
        
        
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "2300",
               duration: "400"
             })
               .setClassToggle("#parallax7", "active")
               .setTween(scaleBg7)
               // .addIndicators({name: "slide 7", indent: 800})
               .addTo(controller);
        
        
             // keep finalslide active
             new ScrollMagic.Scene({
               triggerElement: "#pinContainer",
               triggerHook: "onLeave",
               offset: "2300",
               duration: "6000"
             })
               .setClassToggle("#parallax7", "active")
               // .addIndicators({name: "final slide", indent: 200})
               .addTo(controller);
        
           } //endcheck
         }
        
    