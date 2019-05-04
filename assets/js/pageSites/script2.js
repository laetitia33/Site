// forEach method
var forEach = function (array, callback, scope) {
  for (var i = 0; i < array.length; i++) {
    callback.call(scope, i, array[i]); 
  }
};

var spinner = document.querySelector("#spinner"),
angle = 0,
images = document.querySelectorAll("#spinner figure"),
numpics = images.length,
degInt = 360 / numpics,
start = 0,
current = 1;

forEach (images, function (index, value) {
    images[index].style.webkitTransform = "rotateY(-"+start+"deg)";
    images[index].style.transform = "rotateY(-"+start+"deg)";
    images[index].addEventListener("click", function() { 
       if (this.classList.contains('current')) {
        this.classList.toggle("focus");
       }
    })
    start = start + degInt;
});

function setCurrent(current) { 
  document.querySelector('figure#spinner figure:nth-child('+current+')').classList.add('current'); 
}

function galleryspin(sign) { 
  forEach (images, function (index, value) {
    images[index].classList.remove('current');
    images[index].classList.remove('focus');
    images[index].classList.remove('caption'); 
  })
 
  if (!sign) { angle = angle + degInt; 
           current = (current+1);
            if (current > numpics) { current = 1; }
        } else { 
            angle = angle - degInt; 
            current = current - 1;
              if (current == 0) { current = numpics; } 
           }
  
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg)");
  setCurrent(current);
}



document.body.onkeydown = function(e){
    switch(e.which) {
        case 37: // left cursor
        galleryspin('-');
        break;

        case 39: // right cursor
        galleryspin('');
        break;

        case 90: // Z - zoom image in forefront image
        document.querySelector('figure#spinner figure.current').classList.toggle('focus');
        break;
        
        case 67: // C - show caption for forefront image
        document.querySelector('figure#spinner figure.current').classList.toggle('caption');
        break;
        
        default: return; // exit this handler for other keys
    }
    e.preventDefault();
}

setCurrent(1);
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