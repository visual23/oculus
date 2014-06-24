/*      _                 _  ____  _____ 
 __   _(_)___ _   _  __ _| ||___ \|___ / 
 \ \ / / / __| | | |/ _` | |  __) | |_ \ 
  \ V /| \__ \ |_| | (_| | | / __/ ___) |
   \_/ |_|___/\__,_|\__,_|_||_____|____/ 
 
  Robb Bennett - www.visual23.com

 */


try {
    console.log('init console... done');
} catch (e) {
    console = {
        log: function () {}
    }
}

var isMobile;
var isTouch = Modernizr.touch;
var isIE = false;

if (Modernizr.mq('only all and (max-width: 979px)')) {
    isMobile = true;
} else {
    isMobile = false;
}

var ie = (function () {

    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');

    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );

    return v > 4 ? v : undef;

}());

if (ie < 9) {
    isIE = true;
    
   // showIEPopUp();

}

function showIEPopUp(){
    alert('You are using an outdated verson of Internet Explorer that is not supported anymore. Please upgrade your browser. ');
}

//var is_home;

function initMain(){    
    
    // Play carousel
    //$('#myCarousel').carousel('cycle'); 
    
    
}


/*
|--------------------------------------------------------------------------
| EVENTS TRIGGER AFTER ALL IMAGES ARE LOADED
|--------------------------------------------------------------------------
*/
jQuery(window).load(function () {
    
    "use strict";
    /*
    |--------------------------------------------------------------------------
    | PRELOADER
    |--------------------------------------------------------------------------
    */
    

    jQuery('#status').fadeOut(); // will first fade out the loading animation
    jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    jQuery('body').delay(350).css({'overflow':'visible'});
       /* $("#preloader").animate({
            // opacity: 0,
            height: '498px'
        }, 800, function () {
            // Animation complete.
            $(this).fadeOut('slow');
            
        });
        $('body').delay(350).css({
            'overflow': 'visible'
        });*/


    initMain();
    
    
   

        var down_count = 0;
        var up_count = 0;
        var first_run = true;
        var buffer_height;
        
        jQuery(window).bind('scroll',function(e) {

            if (Modernizr.mq('only all and (max-width: 979px)')) {
                isMobile = true;
            } else {
                isMobile = false;
            }
            
            if (jQuery(window).width() > 979) {

                buffer_height = 80;

                if (jQuery(window).scrollTop() > buffer_height) {

                    down_count++;
                    if (down_count == 1) {
                        first_run = false;
                        up_count = 0;                        
                        
                        jQuery('#mainHeader').addClass('fixedHeader');
                    }

                } else {

                    up_count++;
                    if (up_count == 1 && first_run === false) {
                        down_count = 0;
                        
                        jQuery('#mainHeader').removeClass('fixedHeader');
                    }
                }
            }
            
           
        });
        //END WINDOW SCROLL	
       
            

            var $offset = '';
            if (jQuery(window).width() > 980) {

                $offset = 82;

            } else {

                $offset = 82;
            }

            if (jQuery('.localscroll').length) {
                jQuery('.localscroll').localScroll({
                    lazy: true,
                    lock: true,
                    hash: false,
                    offset: {
                        top: -($offset)
                    }
                });
            }

        var isMobile = false;

        if (Modernizr.mq('only all and (max-width: 1024px)')) {
            isMobile = true;
        }


       /* if (isMobile === false) {
            $(window).stellar({
                horizontalScrolling: false,
                responsive: true,
                parallaxElements: true
            });
        }*/
      
      if (jQuery('#formSection').length) {
          jQuery('#selectMenu').find('.help-block').last().remove();
          jQuery('#selectMenu').find('.form-control-feedback').last().remove();
      }
   
    //END WINDOW LOAD
});



jQuery(window).resize(function () {
    resizePicBoxes();   
    resizeColorBoxes();
    resizeCServicesColumn();
});





jQuery(document).ready(function() {  
    
    var $about_button = jQuery('#menu-item-17');
    var about_position = $about_button.position();
    var left_space = about_position.left;
    var menu_width = jQuery('#menu-menu-1').outerWidth();
    console.log('menu_width = '+menu_width)
    
     if (jQuery('#formSection').length) {
    //Calls the selectBoxIt method on your HTML select box.
    jQuery("select").selectBoxIt({

    // Hides the first select box option from appearing when the drop down is opened
    defaultText: "please select one:",
    dynamicPositioning: false

  });
     }
    
    
    

    // go through all links that have children and position the dropdown.
    jQuery( ".menu-item-has-children.dropdown" ).each(function( i ) {
        var $button = jQuery(this);
        var position = $button.position();
        var has_third_level = false;
        // position menu
        console.log('total = '+(position.left-menu_width/2+310))
        if(jQuery(this).attr('id') == 'menu-item-17')
        {
            console.log('at 1')
            $button.find('ul.dropdown-menu').first().css('left', 0-left_space);
        }
        else
        {
            $button.find('ul.dropdown-menu').first().css('left', '-'+(position.left)+'px');
        }
        
        $button.find('ul.dropdown-menu').first().css('paddingTop', '60px');
        $button.find('ul.dropdown-menu').first().css('paddingLeft', '170px');
        $button.find('ul.dropdown-menu').first().css('width', jQuery('#topBarContainer').outerWidth());
        
        // if there's a submenu
        if(jQuery(this).find('ul.dropdown-menu li').hasClass('dropdown-submenu'))
        {
            jQuery(this).find('ul.dropdown-menu li.dropdown-submenu').each(function( i ) {
                // position the menu up top.
                var $li = jQuery(this);
                var li_position = $li.position();
                jQuery(this).find('ul.dropdown-menu').css('top', '-'+(li_position.top+2)+'px');
                jQuery(this).find('ul.dropdown-menu').css('left', '310px');
                jQuery(this).find('ul.dropdown-menu').first().css('paddingTop', '60px');
                
                // set height 
                jQuery(this).find('ul.dropdown-menu').css('height', jQuery(this).parent().outerHeight(true));
               // console.log( "li_position: " + li_position.top )
                has_third_level = true;
               // console.log('has_third_level = '+has_third_level)
                });            
        }
        
        if(has_third_level == false)
        {
           // console.log('has_third_level2 = '+has_third_level)
            // make the 1st ul.dropdown-menu width 620
            jQuery(this).find('ul.dropdown-menu').addClass('wideMenu');
            jQuery(this).find('ul.dropdown-menu li').css('border', 'none');
        }
        
        //console.log( 'counting' )
        
    });
    
    // hide dropdowns
    jQuery('.dropdown-menu').css('display', 'none');
    
    /*$('.dropdown').hover(
      function() {
        $(this).find('.dropdown-menu').first().delay(500).fadeIn(500);
          // clear timeout
          clearTimeout(mega_menu_timeout);
          // show mega menu
          showMegaMenu($(this));
      }, function() {
        $(this).find('.dropdown-menu').first().fadeOut();
          // hide mega menu
          mega_menu_timeout = setTimeout('hideMegaMenu()', 1000);
          
      }
    );
    
    // 2nd tier
    $('.dropdown-submenu').hover(
      function() {
        $(this).find('.dropdown-menu').first().show();
      }, function() {
        $(this).find('.dropdown-menu').first().hide();
      }
    );*/
    
   
    
    
    resizePicBoxes();   
    resizeColorBoxes();
    resizeCServicesColumn();
    
   
}); 

jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 400,
      controlNav: false,
    itemMargin: 5
  });
});

var mega_menu_open = false;
var mega_menu_timeout;

function showMegaMenu($menu)
{
    console.log('showMegaMenu')
    //
    jQuery('#megaMenuWrapper').show();
    
    // fade in and resize white area
    // get the dropdown menu height

    jQuery('#megaMenu').show();
    jQuery('#megaMenu').css('height', $menu.find('ul.dropdown-menu').first().outerHeight(true)+40);
    
    // fade in the darkened BG
    jQuery('#megaMenuFade').css('height', jQuery(window).height());
    jQuery('#megaMenuFade').fadeIn(200);
}

function hideMegaMenu()
{
    console.log('hideMegaMenu')
   // $('#megaMenuWrapper').hide();
    jQuery("#megaMenuWrapper").animate({
        opacity: 0
      }, 500, function() {
        // Animation complete.
          // reset all
          jQuery(this).css('display', 'none');
          jQuery(this).css('opacity', 1);
          jQuery('#megaMenu').css('height', '1px');
          jQuery('#megaMenu').css('display', 'none');
          jQuery('#megaMenuFade').css('display', 'none');
      });
}

function resizePicBoxes(){
    
    // set height on picGridText
   jQuery('.picGrid').each(function() {
        // get height
        var height = jQuery(this).find('.picBox img ').height();
        // set height of picBoxText  
        jQuery(this).find('.picBoxText').css('height', height )
    }); 
}


function resizeColorBoxes(){

    jQuery('.colorBoxes').each(function() {
        var maxHeight = -1;
        
        jQuery(this).find('.colorBox').each(function() {
            console.log('here')
            maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
        });
        
        jQuery(this).find('.colorBox').each(function() {
           jQuery(this).height(maxHeight);
       });
    });
}
function resizeCServicesColumn(){

    jQuery('.servicesSubListTitleWrapper').each(function() {        
        jQuery(this).width(jQuery(this).parent().width());
    });
}




