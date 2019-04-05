
//animation slider controle

$(function(){
 $('#slider3')
  .anythingSlider()
  .anythingSliderFx({
   // '.selector' : [ 'caption', 'distance/size', 'time', 'easing' ]
   // 'distance/size', 'time' and 'easing' are optional parameters
   '.caption-top'    : [ 'caption-Top', '50px' ],
   '.caption-right'  : [ 'caption-Right', '130px', '1000', 'easeOutBounce' ],
   '.caption-bottom' : [ 'caption-Bottom', '50px' ],
   '.caption-left'   : [ 'caption-Left', '130px', '1000', 'easeOutBounce' ]
  })
  /* add a close button (x) to the caption */
  .find('div[class*=caption]')
    .css({ position: 'absolute' })
    .prepend('<span class="close">x</span>')
    .find('.close').click(function(){
      var cap = $(this).parent(),
       ani = { bottom : -50 }; // bottom
      if (cap.is('.caption-top')) { ani = { top: -50 }; }
      if (cap.is('.caption-left')) { ani = { left: -150 }; }
      if (cap.is('.caption-right')) { ani = { right: -150 }; }
      cap.animate(ani, 400, function(){ cap.hide(); } );
    });
});


//ancre du bouton entrez vers services

$(document).ready(function() {
     $('a[href=#welcome]').click(function(){
          $('html, body').animate({scrollTop:$("#welcome").offset().top}, 'slow');
          return false;
     });
});


// ancre du menu vers services
$(document).ready(function() {
     $('#serv').click(function(){
          $('html, body').animate({scrollTop:$("#welcome").offset().top}, 'slow');
          return false;
     });
});


//page login/inscription
 $('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});
 //ouverture/fermeture des mentions légales

$( "#legal" ).click(function() {
  $( "#legalnotice" ).fadeIn( "slow", function() {
    // Animation complete
  });
});


$( "#closelegal" ).click(function() {
  $( "#legalnotice" ).fadeOut( "slow", function() {
    // Animation complete.
  });
});

//menu flottant au scroll
$(document).ready(function() {
      // grab the initial top offset of the navigation 
        var stickyNavTop = $('.nav').offset().top;
        
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function(){
          var scrollTop = $(window).scrollTop(); // our current vertical position from the top
               
          // if we've scrolled more than the navigation, change its position to fixed to stick to top,
          // otherwise change it back to relative
          if (scrollTop > stickyNavTop) { 
              $('.nav').addClass('sticky');
          } else {
              $('.nav').removeClass('sticky'); 
          }
      };

      stickyNav();
      // and run it again every time you scroll
      $(window).scroll(function() {
        stickyNav();
      });
    });
  
//faire apparaitre et disparaitre le menu en responsive
  $(function() {
    $('#show_menu').click(function() {
      $('#mainmobil').first().show('slow', function showNextOne() {
        $(this).next('#mainmobil').show('slow', showNextOne);
      });    
    });
    $('#closemenu').click(function() {
      $('#mainmobil').first().hide('slow', function hideNextOne() {
        $(this).next('#mainmobil').hide('slow', hideNextOne);

      });
          
    });
  });



//ancre vers l'acceuil

$(document).ready(function(){
    // Condition d'affichage du bouton
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100){

            $('#btntop').fadeIn();
        }
        else{
            $('#btntop').fadeOut();
        }
    });
    // Evenement au clic
    $('#btntop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});



//div contact qui suit au scroll

function fixDiv() {
  var $cache = $('#volet_clos1'); 
  if ($(window).scrollTop() > 200) 
    $cache.css({'position': 'fixed', 'bottom': '30%'}); 
  else
    $cache.css({'position': 'relative', 'bottom': 'auto'});
}
$(window).scroll(fixDiv);
fixDiv();

//fermeture du message alerte
$(document).ready(function(){
    setTimeout(function(){$("#message").fadeOut('normal');}, 5000);
});


//menu responsive
// On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler').click(function()
  {
      jQuery('#toggle').toggle(400);
      return false;
   });
});



//ouverture de la meteo page information

 $(".accordion").on("click", ".accordion-header", function() {
  $(this).toggleClass("active").next().slideToggle();
 });


//fenetre modale ouvrant la page mentions legales
//----OPEN
$(function() {

  $('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE

  $('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);


    e.preventDefault();

  });


  
});



