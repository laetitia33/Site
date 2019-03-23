
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


//fenetre modale ouvrant la page youtube
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

//arreter la video a la fermeture de la modale
jQuery('[data-popup-close]').click(function (e) {
  var $videoEl = jQuery(this).closest('.popup-inner').find('iframe');
  $videoEl.attr('src', $videoEl.attr('src'));
});

  
});



