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

var isTouch = Modernizr.touch;
var isIE = false;

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

            if (isMobile != true) {

                buffer_height = 80;

                if (jQuery(window).scrollTop() > buffer_height) {

                    down_count++;
                    if (down_count == 1) {
                        first_run = false;
                        up_count = 0;                        
                        
                        jQuery('#mainHeader').addClass('fixedHeader');
                        //jQuery('.contentContainer').css('paddingTop', '115px');
                    }

                } else {

                    up_count++;
                    if (up_count == 1 && first_run === false) {
                        down_count = 0;
                        
                        jQuery('#mainHeader').removeClass('fixedHeader');
                        //jQuery('.contentContainer').css('paddingTop', '160px');
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
     
    if(isMobile != true){
        resizeColorBoxes();
        resizePicBoxes();
        resizeServicesColumn();
        resizeJournalColumns();
    }
        
    resizeHeroImage();
    
});


var mega_menu_open = false;
var mega_menu_timeout;


jQuery(document).ready(function($) {  
    
    var $about_button = $('#menu-item-17');
    var about_position = $about_button.position();
    var left_space = about_position.left;
    var menu_width = $('#menu-menu-1').outerWidth();
    console.log('menu_width = '+menu_width)
    
    jQuery(window).trigger('resize');
    
     if ($('#formSection').length) {
        //Calls the selectBoxIt method on your HTML select box.

        $("select").selectBoxIt({

        // Hides the first select box option from appearing when the drop down is opened
        defaultText: "please select one:",
        dynamicPositioning: false

        });
    }
    
    // disable the top link in the footer menus
    $('.footerMenu').each(function(){
        var $t = jQuery(this).find('a').first();
        $t.after($t.text());
        $t.remove();
    });
 
    
    $('.dropdown').hover(
      function() {
          // clear timeout
          clearTimeout(mega_menu_timeout);
        $(this).find('.dropdown-menu').first().delay(100).fadeIn(300);

          if (isMobile != true)
          {
          // show mega menu
          showMegaMenu(jQuery(this));
          }
      }, function() {
        $(this).find('.dropdown-menu').first().fadeOut('fast');
          
         if (isMobile != true)
          {
          // hide mega menu
          mega_menu_timeout = setTimeout('hideMegaMenu()', 500);
          }
          
      }
    );
    $('.dropdown a').first().hover(
      function() {
          // clear timeout
          clearTimeout(mega_menu_timeout);
          if (isMobile != true)
          {
          // show mega menu
          showMegaMenu(jQuery(this).parent());
          }
      }, function() {
        
          console.log('rolling out a');
      }
    );
      
    
    
    $( "#searchBtn" ).click(function(event) {
      event.preventDefault();
        showSearchPanel();
    });
    
    $( "#searchBtnMobile" ).click(function(event) {
      event.preventDefault();
        showSearchPanel();
    });
    
     jQuery( "#searchCloseBtn" ).click(function(event) {
      event.preventDefault();
        hideSearchPanel();
    });
    
     jQuery( "#megaMenuCloseBtn" ).click(function(event) {
      event.preventDefault();
        hideMegaMenu();
    });
    
    
   
}); 

if (jQuery('.flexslider').length) {
/*jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
     itemWidth: 380,
      controlNav: false,
    itemMargin: 5
  });
});*/
    
    jQuery(window).load(function($){
  var currentBreakpoint; // default's to blank so it's always analysed on first load
  var didResize  = true; // default's to true so it's always analysed on first load
  var raw_slider = jQuery(".flexslider").html(); // grab the unaltered HTML and store it

  // on window resize, set the didResize to true
  jQuery(window).resize(function() {
    didResize = true;
  });

  // every 1/4 second, check if the browser was resized
  // we throttled this because some browsers fire the resize even continuously during resize
  // that causes excessive processing, this helps limit that
  setInterval(function() {
    if(didResize) {
      didResize = false;

      // inspect the CSS to see what breakpoint the new window width has fallen into
      var newBreakpoint = window.getComputedStyle(document.body, ':after').getPropertyValue('content');

      /* tidy up after inconsistent browsers (some include quotation marks, they shouldn't) */
      newBreakpoint = newBreakpoint.replace(/"/g, "");
      newBreakpoint = newBreakpoint.replace(/'/g, "");

      // if the new breakpoint is different to the old one, do some stuff
      if (currentBreakpoint != newBreakpoint) {

        // remove the old flexslider (which has attached event handlers and adjusted DOM nodes)
        jQuery(".flexslider").remove();

        // now re-insert clean mark-up so flexslider can run on it properly
        jQuery(".flexslider-container").append("<div class='flexslider'></div>");
       jQuery(".flexslider").html(raw_slider);

        // execute JS specific to each breakpoint
        if (newBreakpoint === 'breakpoint_1') {
          // the narrowset breakpoint is now the current breakpoint
          currentBreakpoint = 'breakpoint_1';

          // Slider with one slide
          jQuery(".flexslider").flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 400,
            itemMargin: 0,
            controlNav: false
          });
        }
        if (newBreakpoint === 'breakpoint_2') {
          // the second largest breakpoint is now the current one
          currentBreakpoint = 'breakpoint_2';
          // Slider with two slides
          jQuery(".flexslider").flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 360,
            itemMargin: 0,
            controlNav: false
          });
        }
        if (newBreakpoint === 'breakpoint_3') {
          // the second largest breakpoint is now the current one
          currentBreakpoint = 'breakpoint_3';

          // Slider with two slides
          jQuery(".flexslider").flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 400,
            itemMargin: 0,
            controlNav: false
          });
        }
      }
    }
  }, 250);
}); // $(document).ready
}

if (jQuery('#contact-form').length) {
jQuery(document).ready(function() {
    
     jQuery('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' // optional
  });
    
    jQuery('#contact-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a valid phone number'
                    }
                }
            },
            topic: {
                validators: {
                    notEmpty: {
                        message: 'Please select a topic from the list'
                    }
                }
            }
        },
        submitHandler: function(validator, form, submitButton) {
            // Show loading image
			jQuery('#loader').show();

			// Submit data via AJAX
			jQuery.ajax({
				type: 'POST',
				url: '<?php echo get_template_directory_uri(); ?>/includes/contact_form.php',
				data: jQuery('#demo-form').serialize(),
				dataType: 'json',
				success: function( message ) {
					//createCaptcha();

					jQuery('#messages').append('<div class="alert alert-dissmisable alert-'+ message.type +'"><button type="button" id="formMessageClose" class="close">&times;</button> '+ message.content +'</div>').hide().fadeToggle('slow');
                    jQuery( "#formMessageClose" ).click(function() {
                       jQuery("#messages").hide();     // dismiss the dialog
                    });
				},
				error: function( data ) {
					//createCaptcha();

					jQuery('#messages').append('<div class="alert alert-danger"><button type="button" class="close" id="formMessageClose">&times;</button><strong>Error:</strong> There has been an unknown error, please let us know immediately. Thank you.</div>').hide().fadeToggle('slow');
                    jQuery( "#formMessageClose" ).click(function() {
                       jQuery("#messages").hide();     // dismiss the dialog
                    });
				}
			});

			// Hide loading image
			jQuery('#loader').hide();
        }
    });
});
}

function showSearchPanel()
{
    //
    jQuery('#searchPanelWrapper').show();
    
    // fade in and resize white area
    // get the dropdown menu height

    jQuery('#searchPanel').show();
    jQuery("#searchPanel").animate({
        height: 300
      }, 500, function() {
        // Animation complete.
          // set focus on input
    jQuery('#searchPanel .form-control').focus();
          
      });
   // jQuery('#searchPanel').css('height', '300px');
    
    
    
    // fade in the darkened BG
    jQuery('#searchPanelFade').css('height', jQuery(window).height());
    jQuery('#searchPanelFade').fadeIn(200);
}

function hideSearchPanel()
{
   // $('#megaMenuWrapper').hide();
    jQuery("#searchPanelWrapper").animate({
        opacity: 0
      }, 500, function() {
        // Animation complete.
          // reset all
          jQuery(this).css('display', 'none');
          jQuery(this).css('opacity', 1);
          jQuery('#searchPanel').css('height', '1px');
          jQuery('#searchPanel').css('display', 'none');
          jQuery('#searchPanelFade').css('display', 'none');
      });
}



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
function resizeServicesColumn(){

    jQuery('.servicesSubListTitleWrapper').each(function() {        
        jQuery(this).width(jQuery(this).parent().width());
    });
}

function resizeHeroImage(){
    jQuery('.heroImage img').css('width', jQuery(window).width());
}

function resizeJournalColumns(){

    jQuery('.sidebar').height(jQuery('.main-content').height())
}



