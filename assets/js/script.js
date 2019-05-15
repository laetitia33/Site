


//accessibilité
      $('#b1').click(function(){
            $('html').css({
                   
                'filter': 'sepia(150%)'
            });
      });


      $('#b2').click(function(){
            $('html').css({
                   
                'filter': 'grayscale(80%)'
            });
      });


      $('#b3').click(function(){
              $('html').css({
                     
                  'filter': 'invert(100%)'
              });
      });

      $('#b4').click(function(){
              $('html').css({
                     
                  'filter': 'saturate(10)'
              });
      });


      $('#b5').click(function(){
          $('html').css({
                 
                  'filter': 'brightness(1.2)'
          });
      });


      $('#b6').click(function(){
              $('html').css({
                     
                  'filter': 'contrast(200%)'
              });
      });


      $('#b7').click(function(){
          $('html').css({
                 'filter':'none'
          });
      });

      $('#b8').click(function(){
              $('html').css({
                   'font-size':'1.1em'
              });
              $('.cd-modal-action .btn').css({
                'width':'9em'
              });


          });


      $('#b19').click(function(){
              $('html').css({
                   'font-size':'1.4em'
              });
              $('.cd-modal-action .btn').css({
                'width':'9em'
              });


          });



      $('#b20').click(function(){
              $('html').css({
                   'font-size':'1.6em'
              });
              $('.cd-modal-action .btn').css({
                'width':'9em'
              });


          });

      $('#b9').click(function(){
              $('html').css({
                   'font-size':'0.9em'
              });
      });


      $('#b10').click(function(){
              $('html').css({
                  'background-image':'none',
                  'background-color': 'grey',
                  'color':'white',
                               
                });    
      });

      $('#b11').click(function(){
              $('html').css({
                  'background-image':'none',
                  'background-color': 'black',
                  'color':'white',
                 
              
                });    

      });


      $('#b12').click(function(){
              $('html').css({
                   'background-image': 'url(../images/fond.jpg)',
                   'background':'linear-gradient(pink,#8D7C90  , rgba(255, 255, 0, 0.5))',
                    'background-size':'cover'
                 
              
              });    

      });

      $('#b13').click(function(){
              $('html').css({
                  'background-image':'none',
                  'background-color': 'yellow',
                  'color':'black',
                 
              
              });    

      });



      $('#b14').click(function(){
              $('html').css({
                  'background-image':'none',
                  'background-color': 'red',
                  'color':'black',
                 
              
                });    

      });

      $('#b15').click(function(){
              $('p,a,h1,h2,h3,em,span').css({
                   'color':'yellow',
                  'background-color':'black',
                  'padding-bottom':'1em',
                  
              
                });   

      });

      $('#b16').click(function(){
      $("p,a,h1,h2,h3,em,span,img,.font-effect-3d-float,input").hover(function(){
        $(this).css("border", "3px solid red");
        }, function(){
        $(this).css("border", "none");
      });
        });

      

      $('#b17').click(function(){

              $('a,.btn').css({
                   'color':'yellow',
                  'border':'dotted',
                  'border-color':'red',
                  'background-color':'black',
                               
          });   

      });



       $('#b18').click(function(){
                  location.reload();



        });



      $('#b21').click(function(){

              $('html,.list-group,#wowslider-container1,input,inputbasic').css({
                   "cursor":" url(assets/images/souris.png),auto ",
                  
                               
          });   

      });

//regle pour aide à la lecture

      jQuery(document).ready(function()
      {


         // On cache la zone de texte
         jQuery('.regle').hide();

                  jQuery('#stop').click(function(){
                  jQuery('.regle').hide();
              });
         // toggle() lorsque le lien avec l'ID #toggler est cliqué
         jQuery('#b22').click(function()
        {
            jQuery('.regle').toggle();

          $(document).on('mousemove', function(e){
          $('.regle').css({
             left:  '50%'.pageX,
             top:   e.pageY,

          });
      });

   });
});



//calculatrice



      jQuery(document).ready(function()
      {


         // On cache la zone de texte
         jQuery('.calculatriceContainer').hide();

                  jQuery('#stopCalculatrice').click(function(){
                  jQuery('.calculatriceContainer').hide();
              });
         // toggle() lorsque le lien avec l'ID #toggler est cliqué
         jQuery('#b23').click(function()
        {
            jQuery('.calculatriceContainer').toggle();

   });
})

//toogle widget
  
$(document).ready(function(){
  $('.arrow').click(function(){
    $('section').toggleClass('active');
  });
});


//loupe rechercher
$(function() {
  loupeBindClick();
  $(".loupe__button", $(".loupe.is-active")).one("click.loupe", loupeClose);

  function loupeBindClick(elt) {
    var elt = elt || $(".loupe:not(.is-active)");
    elt.one("click.loupe", function(e) {
      var target;
      if ($(e.target).hasClass("loupe")) {
        target = $(e.target);
      } else {
        target = $(e.target).closest(".loupe");
      }
      target.addClass("is-active");
      $(".loupe__input", target).focus();
       $('.google').show();
      $(".loupe__button", target).one("click.loupe", loupeClose);
    })
  }

  function loupeClose(e) {
    var target = $(e.target);
    if (target.hasClass("loupe__button")) {
      var loupe = target.closest(".loupe");
      loupe.removeClass("is-active");
      e.stopPropagation();
      loupeBindClick(loupe);
      $('.google').hide();
    }
  }

})



//deconnexion
$('.deco').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous vous déconnecter?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {

              window.location.href = link;

           } else {
            swal("Annulé", "Déconnexion annulée:)", "error");
          }
});
});

//supprimé tous les commentaires signalés
$('.deletecommSignAll').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous supprimer tous les commentaires signalés?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Tous les commentaires signalés supprimés avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "les commentaires signalés n'ont pas été supprimés :)", "error");
          }
});
});


//approuvé tous les commentaires signalés
$('.okcommSignAll').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous approuver tous les commentaires signalés?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Tous les commentaires approuvés avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "les commentaires n'ont pas été approuvés :)", "error");
          }
});
});



//approuvé un commentaire signalé
$('.okcommSign').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous approuver ce commentaire signalé?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
 }).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Commentaire approuvé avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "Ce commentaire n 'a pas été approuvé' :)", "error");
          }
});
});


//supprimé un commentaire signalé
$('.deletecommSign').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous supprimer ce commentaire signalé?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
}).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Ce commentaire signalé a été supprimé avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "Ce commentaire signalé n 'a pas été supprimé' :)", "error");
          }
});
});

//supprimé un commentaire 
$('.deletecomm').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous supprimer ce commentaire?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
}).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Commentaire supprimé avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "Ce commentaire n'a as été supprimé :)", "error");
          }
});
});
//supprimer tous les commentaires                    
$('.deletecommAll').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous supprimer tous les commentaires?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
}).then(function(isConfirm) {
          if (isConfirm) {
          swal({
    title: 'Tous les commentaires  supprimés avec succès',
    icon: 'success',
    icon: 'success'
})
.then(() => {
window.location.href = link;})


           } else {
            swal("Annulé", "les commentaires n'ont pas été supprimés :)", "error");
          }
});
});
  
//bouton signalé

$('.validcom').click(function(e){
    e.preventDefault();
    var link = $(this).attr('href');
swal({
          title: "Souhaitez-vous signaler ce commentaire?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {

              window.location.href = link;

           } else {
            swal("Annulé", "le commentaire n'a pas été signalé :)", "error");
          }
});
});

//animation livre d'or ruban

$('.ribbon').on('click', function() { 
  var self = $(this),
      newone = self.clone(true);
  
  self.before(newone);
  $("." + self.attr("class") + ":last").remove();
});



//envoyer un message, contact
function envoi()
{
swal({
          title: "Souhaitez-vous envoyer ce message?",
          icon: "warning",
          buttons: [
            'Non',
            'Oui'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
       
          } else {
            swal("Annulé", "Votre message n'a pas été envoyé :)", "error");
          }
        });

}
//couleurs changeante sur les services
var colors = new Array(
  [192,192,192],
  [232,176,151],
  [255,226,179],
  [232,219,151],
  [239,255,166],
  [255,240,240]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('.cd-modal-content,#animatedModal ,#modal-02').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,5);

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


//menu responsive
// On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('#menu-icon-wrapper').click(function()
  {
      jQuery('#toggle').toggle(400);
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



//fonctions calculatrice
$(document).ready(function() {

  var append = true;
  var stringArr = [];
  var strLimit = 23;
  var result;
  var value;

  $('input[type="button"]').on('click', function() {
      value = $(this).val();      
      console.log(stringArr);
      stringArr.push(value);
      if (stringArr.length <= strLimit) {     
      $('.string').append(value); 
      } else {
        $('.string').text();          
      }
  });

  // Equal button
  function calculate() {
      var calc = $('.string').text();
      result = eval(calc);
      $('.result').text(result);
      if (append != true) {
        $('.string').text(result);
      }
    }
  $('button[name="equal"]').on('click', calculate);

  // Clear button
  function clear() {
      $('.string').text('');
      $('.result').text('');
      stringArr = [];
    }
  $('button[name="clear"]').on('click', clear);

  // Square Root Button
  function squareRoot() {
   x =  Math.sqrt(eval($('.string').text()));
   $('.string').text(x);
  }
  $('button[name="square-root"]').on('click', squareRoot);
  
  // "+/-" Button
  function switchNeg() {  
   x = eval($('.string').text()) * (-1);
   $('.string').text(x);
  }
  $('button[name="swneg"]').on('click', switchNeg);

  // Append button
  $('button[name="append"]').on('click', function() {
    if (append == true) {
      append = false;
    } else {
      append = true;
    }
    $(this).toggleClass('act');
  });

  // Back Button
   function back() {
      var calc = $('.string').text();
      var shString = calc.substr(0, calc.length - 1);
      $('.string').text(shString);
    }
    $('button[name="back"]').on('click', back);

  // Make the calculator key friendly
  var keys = {
    48: '0', 
    49: '1',
    50: '2', 
    51: '3', 
    52: '4',
    53: '5', 
    54: '6',
    55: '7',
    56: '8', 
    57: '9',
    43: '+',
    45: '-',
    42: '*', 
    47: '/',
    46: '.'
  }

  $(document).on('keypress', function(event) {
      var keyValue = keys[event.which];
      if (event.which == 13) {        
        calculate();
      } else if (stringArr.length <= strLimit) {
        console.log(stringArr);     
        $('.string').append(keyValue);
        stringArr.push(keyValue);
      } else {
       $('.string').text();
     }
  });

  $(document).on('keydown', function(event) {
       if (event.which == 27 || event.which == 46) {
          clear();
      } else if (event.which == 8) {
          back();
    } else if (event.which == 219) {
      $('.string').append('(');
    } else if (event.which == 221) {
      $('.string').append(')');
    }
    console.log(event.which);
  });
});