jQuery("#EstatesAction").click((function(e){jQuery("#toggle").addClass("open"),jQuery(this).toggleClass("active"),jQuery(".business-menu").addClass("open"),e.stopPropagation()})),jQuery("#close-toggle").click((function(e){jQuery(this).toggleClass("open"),jQuery("#toggle").removeClass("active"),jQuery(".business-menu").removeClass("open"),e.stopPropagation()})),jQuery("#toggle").click((function(e){jQuery(this).toggleClass("active"),jQuery(".mobile_menu_overlay").addClass("open"),e.stopPropagation()})),jQuery("#close-toggle-mobile").click((function(e){jQuery("#toggle").removeClass("active"),jQuery(".mobile_menu_overlay").removeClass("open"),e.stopPropagation()})),jQuery(".open-sub").click((function(e){jQuery(this).toggleClass("active"),jQuery(this).parents("li").children(".sub-menu").toggleClass("open")})),jQuery.fn.isInViewport=function(){var e=jQuery(this).offset().top,o=e+jQuery(this).outerHeight(),s=jQuery(window).scrollTop(),t=s+jQuery(window).height();return o>s&&e<t},document.body.classList.contains("dynamicdisplay")&&jQuery(window).scroll((function(){jQuery(this).scrollTop()>=350?jQuery(".wellingtonMenu").addClass("show"):jQuery(".wellingtonMenu").removeClass("show")})),function($,e){$(e).on("hashchange load",(function(){var e;(e=$(":target")).length>0&&$("html, body").stop().animate({scrollTop:e.offset().top-100},200)}))}(jQuery,window),jQuery("#searchsite").on("click",(function(e){jQuery("#searchholder").toggleClass("search-show"),e.preventDefault()})),jQuery("#close-search-toggle").on("click",(function(e){jQuery("#searchholder").toggleClass("search-show"),e.preventDefault()}));