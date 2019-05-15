
//ancre du bouton entrez vers projets realisés

$(document).ready(function() {
     $('a[href=#réalisés]').click(function(){
          $('html, body').animate({scrollTop:$("#réalisés").offset().top}, 'slow');
          return false;
     });
});


//ancre du bas vers lehaut de la page
$(document).ready(function(){
    // Condition d'affichage du bouton
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100){

            $('.scroll-to ').show();   
        }
        else{
            $('.scroll-to ').hide();  
        }
    });
    // Evenement au clic
    $('.scroll-to ').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
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