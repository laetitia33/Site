
//video page controle
document.querySelectorAll(".v-shadow").forEach(function(el) {
  el.style.position = "relative"
  
  const video = el.getElementsByTagName("video")[0]
  const videoClone = video.cloneNode(true)
  const videoTime = video.currentTime
  const cloneDisplay = el.querySelectorAll(".v-clone")[0]
  const blurValue = video.getAttribute("data-blur")
  
  cloneDisplay.appendChild(videoClone)
  
  videoClone.volume = 0
  videoClone.removeAttribute("controls")

  video.addEventListener("playing", event => {
    videoClone.play()
  })

  video.addEventListener("pause", event => {
    videoClone.pause()
  })
  
  video.addEventListener("timeupdate", event => {
    videoClone.currentTime = video.currentTime
  })
    
  const styles = {
    WebkitFilter: `blur(${blurValue}px)`,
    position: "absolute",
    bottom: "-10%",
    left: "5%",
    width: "90%",
    height: "95%",
    zIndex: "-1"
  }

  Object.keys(styles).forEach(function(key) {
    videoClone.style[key] = styles[key]
  })
})
//accessibilité

$('#filtre1').click(function() {
  $('html').css({
    'filter': 'sepia(150%)'
  });
});


$('#filtre2').click(function() {
  $('html').css({
    'filter': 'grayscale(80%)'
  });
});


$('#filtre3').click(function() {
  $('html').css({
    'filter': 'invert(100%)'
  });
});


$('#filtre4').click(function() {
  $('html').css({
    'filter': 'saturate(10)'
  });
});


$('#filtre5').click(function() {
  $('html').css({
    'filter': 'brightness(1.2)'
  });
});


$('#filtre6').click(function() {
  $('html').css({
    'filter': 'contrast(200%)'
  });
});


$('#filtre7').click(function() {
  $('html').css({
    'filter': 'none'
  });
});


$('#police1').click(function() {
  $('html').css({
    'font-size': '1.1em'
  });
  $('.cd-modal-action .btn').css({
    'width': '9em'
  });
});


$('#police2').click(function() {
  $('html').css({
    'font-size': '1.4em'
  });
  $('.cd-modal-action .btn').css({
    'width': '9em'
  });
});


$('#police3').click(function() {
  $('html').css({
    'font-size': '1.6em'
  });
  $('.cd-modal-action .btn').css({
    'width': '9em'
  });
});


$('#policeDefaut').click(function() {
  $('html').css({
    'font-size': '0.9em'
  });
});


$('#background1').click(function() {
  $('html').css({
    'background-image': 'none',
    'background-color': 'grey',
    'color': 'white',
  });
});


$('#background2').click(function() {
  $('html').css({
    'background-image': 'none',
    'background-color': 'black',
    'color': 'white',
  });
});


$('#background3').click(function() {
  $('html').css({
    'background-image': 'url(../images/fond.jpg)',
    'background': 'linear-gradient(pink,#8D7C90  , rgba(255, 255, 0, 0.5))',
    'background-size': 'cover'
  });
});


$('#background4').click(function() {
  $('html').css({
    'background-image': 'none',
    'background-color': 'yellow',
    'color': 'black',
  });
});

$('#background5').click(function() {
  $('html').css({
    'background-image': 'none',
    'background-color': 'red',
    'color': 'black',
  });

});


//ecriture jaune sur fond noir

$('#yellowBlack').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});

  $('#yellowBlack').click(function() {
  $('p,a,h1,h2,h3,em,span').css({
    'color': 'yellow',
    'background-color': 'black',
  });
  $('#yellowBlack').css({
    'background-color': 'skyblue',
    'color': 'black',
  });
  $('#fontawesome1').css({
    'display': 'block',
  });
  $('#fontawesome8').css({
    'display': 'none',
  });

    $('#yellowBlackClose').css({
      'display': 'block',
  
    });
    $('#buttonYellowBlack').css({
      'display': 'flex',
    
    });
   
    $('#fontawesome1').css({
      'display': 'block',
    });
});


$('#yellowBlackClose').click(function() {

   $('p,a,h1,h2,h3,em,span').css({
    'color': '',
    'background-color': '',
    'padding-bottom': '',
  });

  $('#yellowBlack').css({
    'background-color':'grey',
    'color':'white',
  });
    $('#yellowBlackClose').css({
      'display': 'none',
    });

     $('#fontawesome1').css({
      'display': 'none',
    });
   
});

//inspecter
$('#inspecter').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});
$('#inspecter').click(function() {
  $("p,a,h1,h2,h3,em,span,img,.font-effect-3d-float,input").hover(function() {
    $(this).css("border", "3px solid red");
  }, function() {
    $(this).css("border", "none");
  });
  $('#inspecter').css({
    'background-color': 'skyblue',
    'color': 'black',
  });
  $('#fontawesome2').css({
    'display': 'block',
  });
  $('#fontawesome8').css({
    'display': 'none',
  });
   $('#inspecterClose').css({
      'display': 'block',

  });
 $('#buttonInspect').css({
    'display':'flex',

  });

});
$('#inspecterClose').click(function() {
     $('#inspecterClose').css({
      'display': 'none',
    
  });
  $("p,a,h1,h2,h3,em,span,img,.font-effect-3d-float,input").hover(function() {
     $(this).css("border", "");
  }, function() {
    $(this).css("", "");
  });

$('#inspecter').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});

  $('#fontawesome2').css({
    'display': 'none',
  });

});


//liens entourés

$('#liens').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});


$('#liens').click(function() {
  $('a,.btn').css({
    'color': 'yellow',
    'border': 'dotted',
    'border-color': 'red',
    'background-color': 'black',
  });
  $('#liens').css({
    'background-color': 'skyblue',
    'color': 'black',
    'width':'100%',
  });

  $('#buttonLien').css({
    'display':'flex',

  });
  $('#fontawesome3').css({
    'display': 'block',
  });

  $('#fontawesome8').css({
    'display': 'none',
  });

   $('#liensClose').css({
    'display': 'block',
  });
});

$('#liensClose').click(function() {
  $('a,.btn').css({
    'color': '',
    'border': '',
    'border-color': '',
    'background-color': '',
  });
  $('#liens').css({
  'background-color': 'grey',
  'color': 'white',
});
  $('#fontawesome3,#liensClose').css({
    'display': 'none',
  });


});



//changer curseur

$('#curseur').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});

$('#curseur').click(function() {
  $('html,.list-group,#wowslider-container1,input,inputbasic').css({
    "cursor": " url(assets/images/souris.png),auto ",
  });
  $('#curseur').css({
    'background-color': 'skyblue',
    'color': 'black',
  });
  $('#fontawesome4,#curseurClose').css({
    'display': 'block',
  });
  $('#fontawesome8').css({
    'display': 'none',
  });

  $('#buttonCursor').css({
    'display':'flex',

  });

});


$('#curseurClose').click(function() {

  $('html,.list-group,#wowslider-container1,input,inputbasic').css({
    "cursor": "auto",
  });

  $('#curseur').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
  });
  $('#fontawesome4,#curseurClose').css({
    'display': 'none',
  });


})


//regle pour aide à la lecture
jQuery(document).ready(function() {
      $('#regle').css({
      'background-color': 'grey',
      'color': 'white',
      'width': '100%',
    });

  jQuery('#stop,#regleClose,#stop1,#stop2,#stop3,#stop4').click(function() {
    jQuery('.regle').hide();
    $('#fontawesome8').css({
      'display': 'block',
    });
    $('#regle').css({
      'background-color': 'grey',
      'color': 'white',
      'width': '100%',
    });
    $('#fontawesome5').css({
      'display': 'none',
    });
    $('#regleClose').css({
      'display': 'none',
   
    });
  });

  jQuery('#regle').click(function() {
    jQuery('.regle').show();
    $('#fontawesome8').css({
      'display': 'none',
    });
    $('#regle').css({
      'background-color': 'skyblue',
      'color': 'black',
    });
    $('#fontawesome5,#regleClose').css({
      'display': 'block',
    });
    $('#regle').css({
      'width': '100%',
    });
    $('#buttonAide').css({
      'display': 'flex',
    
    });
    $(document).on('mousemove', function(e) {
      $('.regle').css({
        left: '50%'.pageX,
        top: e.pageY,
      });
    });
  });
});


//calculatrice
$('#calcu').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});

jQuery(document).ready(function() {
  jQuery('.stopCalculatrice').click(function() {
    jQuery('.calculatriceContainer').hide(500);
    $('#calcu').css({
      'background-color': 'grey',
      'color': 'white',
      'width': '100%',
    });
    $('#fontawesome6').css({
      'display': 'none',
    });
    $('#fontawesome8').css({
      'display': 'block',
    });
      $('#calculatriceClose').css({
     'display':'none',
    });

  });

  jQuery('#calcu').click(function() {
    jQuery('.calculatriceContainer').show(500);
    $('#calcu').css({
      'background-color': 'skyblue',
      'color': 'black',
    });
    $('#fontawesome6,#calculatriceClose').css({
      'display': 'block',
    });
    $('#fontawesome8').css({
      'display': 'none',
    });

    $('#buttonCalc').css({
      'display': 'flex',
    
    });
  });


 jQuery('#calculatriceClose').click(function() {
 jQuery('.calculatriceContainer').hide(500);

  $('#calcu').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
  });
  $('#fontawesome6,#calculatriceClose').css({
    'display': 'none',
  });

});

})

//loupe

$('#loupe').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
});

 jQuery('#loupe').click(function() {
     $('.js-loupe').css({
      'visibility': 'visible',
     
    });
    $('#fontawesome7,#loupeClose').css({
      'display':'block',
    });


    $('#loupe').css({
      'background-color': 'skyblue',
      'color': 'black',
      'width': '100%',
    });


});

  jQuery('#loupeClose').click(function() {
   $('#loupe').css({
    'background-color': 'grey',
    'color': 'white',
    'width': '100%',
  });



   $('#fontawesome7,#loupeClose').css({
    'display': 'none',
  });

     $('.js-loupe').css({
      'visibility': 'hidden',
     
    });


  });


//recharger

$('#reload').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%'
});
$('#reload').click(function() {
  location.reload();
  $('#fontawesome8').css({
    'display': 'none',
  });
});
$('#buttonTotal').click(function() {


  $('#reload').css({
  'background-color': 'grey',
  'color': 'white',
  'width': '100%',
  });


})


//toogle widget
$(document).ready(function() {
  $('.arrow').click(function() {
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
$('.deco').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous vous déconnecter?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
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
$('.deletecommSignAll').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous supprimer tous les commentaires signalés?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Tous les commentaires signalés supprimés avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "les commentaires signalés n'ont pas été supprimés :)", "error");
    }
  });
});


//approuvé tous les commentaires signalés
$('.okcommSignAll').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous approuver tous les commentaires signalés?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Tous les commentaires approuvés avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "les commentaires n'ont pas été approuvés :)", "error");
    }
  });
});


//approuvé un commentaire signalé
$('.okcommSign').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous approuver ce commentaire signalé?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Commentaire approuvé avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "Ce commentaire n 'a pas été approuvé' :)", "error");
    }
  });
});


//supprimé un commentaire signalé
$('.deletecommSign').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous supprimer ce commentaire signalé?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Ce commentaire signalé a été supprimé avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "Ce commentaire signalé n 'a pas été supprimé' :)", "error");
    }
  });
});


//supprimé un commentaire 
$('.deletecomm').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous supprimer ce commentaire?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Commentaire supprimé avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "Ce commentaire n'a as été supprimé :)", "error");
    }
  });
});

//supprimé un utilisateur
$('#deleteUser').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous supprimer cet utilisateur?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Utilisateur supprimé avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "l 'utilisateur' n'a pas été supprimé :)", "error");
    }
  });
});


//supprimer tous les commentaires                    
$('.deletecommAll').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous supprimer tous les commentaires?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Tous les commentaires  supprimés avec succès',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href = link;
        })
    } else {
      swal("Annulé", "les commentaires n'ont pas été supprimés :)", "error");
    }
  });
});


//bouton signalé
$('.validcom').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous signaler ce commentaire?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
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

//envoi message                   
$('#submit').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
  swal({
    title: "Souhaitez-vous envoer ce message?",
    icon: "warning",
    buttons: ['Non', 'Oui'],
    dangerMode: true,
  }).then(function(isConfirm) {
    if (isConfirm) {
      swal({
        title: 'Le message a bien été envoyé',
        icon: 'success',
        icon: 'success'
      }).then(
        () => {
          window.location.href ="index.php?action=email";
        })
    } else {
      swal("Annulé", "le message n'a pas été envoyé :)", "error");
    }
  });
});



//couleurs changeante sur les services
var colors = new Array(
  [192, 192, 192],
  [232, 176, 151],
  [255, 226, 179],
  [232, 219, 151],
  [239, 255, 166],
  [255, 240, 240]);
var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0, 1, 2, 3];
//transition speed
var gradientSpeed = 0.002;

function updateGradient() {
  if ($ === undefined) return;
  var c0_0 = colors[colorIndices[0]];
  var c0_1 = colors[colorIndices[1]];
  var c1_0 = colors[colorIndices[2]];
  var c1_1 = colors[colorIndices[3]];
  var istep = 1 - step;
  var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
  var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
  var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
  var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";
  var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
  var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
  var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
  var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";
  $('.cd-modal-content,#animatedModal ,#modal-02').css({
    background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
  }).css({
    background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
  });
  step += gradientSpeed;
  if (step >= 1) {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
  }
}
setInterval(updateGradient, 5);


//ancre du bouton entrez vers services
$(document).ready(function() {
  $('a[href=#welcome]').click(function() {
    $('html, body').animate({
      scrollTop: $("#welcome").offset().top
    }, 'slow');
    return false;
  });
});


// ancre du menu vers services 
$(document).ready(function() {
  $('#serv1,#serv2,#ser3,#serv4').click(function() {
    $('html, body').animate({
      scrollTop: $("#welcome").offset().top
    }, 'slow');
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
$("#legal").click(function() {
  $("#legalnotice").fadeIn("slow", function() {
    // Animation complete
  });
});
$("#closelegal").click(function() {
  $("#legalnotice").fadeOut("slow", function() {
    // Animation complete.
  });
});


//menu flottant au scroll
$(document).ready(function() {
  // grab the initial top offset of the navigation 
  var stickyNavTop = $('.nav').offset().top;
  // our function that decides weather the navigation bar should have "fixed" css position or not.
  var stickyNav = function() {
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
$(document).ready(function() {
  // Condition d'affichage du bouton
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scroll-to ').show();
    } else {
      $('.scroll-to ').hide();
    }
  });
  // Evenement au clic
  $('.scroll-to ').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});


//div contact qui suit au scroll
function fixDiv() {
  var $cache = $('#volet_clos1');
  if ($(window).scrollTop() > 200) $cache.css({
    'position': 'fixed',
    'bottom': '30%'
  });
  else $cache.css({
    'position': 'relative',
    'bottom': 'auto'
  });
}
$(window).scroll(fixDiv);
fixDiv();


//menu responsive
// On attend que la page soit chargée 
jQuery(document).ready(function() {
  // On cache la zone de texte
  // toggle() lorsque le lien avec l'ID #toggler est cliqué
  jQuery('#menu-icon-wrapper').click(function() {
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
    x = Math.sqrt(eval($('.string').text()));
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

//loupe sur images

  (function (root) {

      "use strict";


      /**
       * Common object params
       * @type {Object}
       */
      var common = {
              publicMethods: ['reload', 'destroy', 'setZoom', 'setRadius'],
              className: 'JsLoupe'
          },

          /**
           * Main constructor
           * @return {Object} - this handle
           */
          Protected = function (selector, options) {

              var i, l;

              if (!selector) {
                  return;
              }

              //default settings
              this.settings = {
                  radius: 300,
                  zoom: 180,
                  zoomOnScroll: true,
                  zoomOnScrollStep: 10,
                  zoomOnScrollMax: 1000,
                  zoomOnScrollInvert: true,
                  dataZoom: 'data-zoom-image',
                  loupeCss: 'js-loupe',
                  imageOnZoomCss: 'js-loupe-active'
              };

              //cursor positions
              this.cursorY = 0;
              this.cursorX = 0;

              //if is images array
              if (typeof selector === 'object' && selector.length) {

                  l = selector.length;
                  for (i = 0; i < l; i += 1) {

                      common.publicMethods = [];

                      //call plugin for this image element
                      root[common.className].apply(this, [selector[i], options]);
                  }
                  return;
              }

              //if is css class string
              if (typeof selector === 'string') {
                  common.publicMethods = [];
                  root[common.className].apply(this, [document.querySelectorAll(selector), options]);
                  return;
              }

              //if is single html element
              if (selector instanceof Element) {

                  this.image = selector;

                  //initialize
                  this.init(options);

                  return this;
              }
          };


      /**
       * Main prototype
       * @type {Object}
       */
      Protected.prototype = {

          /**
           * Initialization
           * @param  {object} [options] - custom options
           */
          init: function (options) {

              var self = this,
                  n;

              //apply options to settings 
              if (options) {
                  for (n in options) {
                      if (options.hasOwnProperty(n)) {
                          this.settings[n] = options[n];
                      }
                  }
              }

              //zoom image
              this.zoomImageScr = this.image.getAttribute(this.settings.dataZoom) || this.image.getAttribute('src');

              //coefficient
              this.factor = this.settings.zoom / 100;

              //half radius
              this.halfRadius = this.settings.radius / 2;

              //bind functions to this handle
              this.mousemoveTracker = this.mousemoveTracker.bind(this);
              this.recalcLoupe = this.recalcLoupe.bind(this);
              this.mousewheelZoom = this.mousewheelZoom.bind(this);

              //set pending class
              this.image.classList.add('pending');

              //preload image
              this.preloadImages([this.image, this.zoomImageScr], function () {

                  //remove pending class
                  self.image.classList.remove('pending');

                  //create loupe element and set styles
                  self.createLoupe();

                  //add event for mouse tracker
                  document.body.addEventListener('mousemove', self.mousemoveTracker);

                  //add event for loupe recalculate
                  document.addEventListener('mousemove', self.recalcLoupe);


                  if (self.settings.zoomOnScroll) {

                      //try to set mouse wheel events
                      if ('onwheel' in document) {
                          self.loupe.addEventListener('wheel', self.mousewheelZoom);
                      } else if ('onmousewheel' in document) {
                          self.loupe.addEventListener('mousewheel', self.mousewheelZoom);
                      } else {
                          self.loupe.addEventListener('MozMousePixelScroll', self.mousewheelZoom);
                      }
                  }

                  //paint loupe
                  self.repaintLoupe();
              });
          },




          /**
           * Create loupe html element
           */
          createLoupe: function () {

              //create loupe
              this.loupe = document.createElement('div');
              this.loupe.setAttribute('class', this.settings.loupeCss);
              this.loupe.style.display = 'none';
              this.loupe.style.zIndex = 300;

              //append loup into the body
              document.body.appendChild(this.loupe);

          },




          /**
           * Remove loupe html element
           */
          removeLoupe: function () {
              this.loupe.parentNode.removeChild(this.loupe);
          },




          /**
           * Paint and repaint loupe
           */
          repaintLoupe: function () {
              var n,
                  styles = {
                      position: 'absolute',
                      cursor: 'none',
                      backgroundRepeat: 'no-repeat',
                      width: this.settings.radius + 'px',
                      height: this.settings.radius + 'px',
                      borderRadius: '100%',
                      backgroundImage: 'url(' + this.zoomImageScr + ')',
                      backgroundSize: [this.image.width * this.factor, this.image.height * this.factor].join('px ') + 'px'
                  };

              //apply styles
              for (n in styles) {
                  this.loupe.style[n] = styles[n];
              }
          },





          /**
           * Tracker of mousemove event for get cursor position
           * @param  {event} event - browser event
           */
          mousemoveTracker: function (event) {
              this.cursorY = event.pageX;
              this.cursorX = event.pageY;
          },





          /**
           * Get element offset position by window
           * @param  {object} element - target element
           * @return {object}         [description]
           */
          getPosition: function (element) {

              var clientRect = this.image.getBoundingClientRect(),
                  offsetLeft = clientRect.left + (window.scrollX || window.pageXOffset || document.body.scrollLeft),
                  offsetTop = clientRect.top + (window.scrollY || window.pageYOffset || document.body.scrollTop);

              return {
                  x: offsetLeft,
                  y: offsetTop
              }
          },






          /**
           * Recalculate loupe position
           */
          recalcLoupe: function () {

              var imagePosition = this.getPosition(this.image),
                  offsetLeft = imagePosition.x,
                  offsetTop = imagePosition.y;

              //if cursor out of image
              if(this.cursorY < offsetLeft ||  this.cursorX < offsetTop || this.cursorY > (offsetLeft + this.image.clientWidth) || this.cursorX > (offsetTop + this.image.clientHeight)) {

                  //hide loupe
                  this.loupe.style.display = 'none';
                  this.image.classList.remove(this.settings.imageOnZoomCss);
                  return;
              }

              //if cursor over of image
              this.image.classList.add(this.settings.imageOnZoomCss);

              this.loupe.style.display = 'block';                    
              this.loupe.style.left = this.cursorY - (this.halfRadius) + 'px';
              this.loupe.style.top = this.cursorX - (this.halfRadius) + 'px';
              this.loupe.style.backgroundPosition = [
                  -(((this.cursorY - offsetLeft) * this.factor) - (this.halfRadius)),
                  -(((this.cursorX - offsetTop) * this.factor) - (this.halfRadius))
                  ].join('px ') + 'px';
          },






          /**
           * Mousewheel event for change zoom value on scroll
           * @param  {event} event - browser event
           */
          mousewheelZoom: function (event) {
              
              event = event || window.event;

              var delta = event.deltaY || event.detail || event.wheelDelta;


              if (this.settings.zoomOnScrollInvert) {
                  delta = -delta;
              }

              if (navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0) {
                  delta = -delta;
              }


              delta = (Math.abs(delta).toString().length === 3) ? delta : delta * 10;




              this.settings.zoom += delta / this.settings.zoomOnScrollStep;

              if (this.settings.zoom < 100 + this.settings.zoomOnScrollStep) {
                  this.settings.zoom = 100 + this.settings.zoomOnScrollStep;
              }

              if (this.settings.zoom > this.settings.zoomOnScrollMax) {
                  this.settings.zoom = this.settings.zoomOnScrollMax;
              }

              this.setZoom(this.settings.zoom);
              event.preventDefault();
          },




          /**
           * Preload images
           * @param  {array} images - array of image elements or image url sources
           * @param  {function} callback - callback function
           */
          preloadImages: function (images, callback) {

              var currentCount = 0,
                  allCount = images.length,
                  src,
                  i,
                  l = images.length;

              for (i = 0; i < l; i += 1) {

                  src = (typeof images[i] === 'string') ? images[i]: images[i].getAttribute('src');

                  //create new image
                  (function (img, src) {

                      var newImg = new Image();
                      newImg.src = src;
                      
                      //onload event
                      newImg.onload = function(){

                          currentCount += 1;

                          if (currentCount === allCount) {
                              currentCount = null;
                              allCount = null;

                              //run callback in main context
                              callback && callback.call(this);
                              return;
                          }
                      }

                      newImg = null;

                  }(images[i], src));

                  src = null;
              }
          },




          /**
           * Detroy plugin
           */
          destroy: function () {

              //remove listeners
              document.body.removeEventListener('mousemove', this.mousemoveTracker);
              document.removeEventListener('mousemove', this.recalcLoupe);

              if (this.settings.zoomOnScroll) {

                  //try to set mouse wheel events
                  if ('onwheel' in document) {
                      this.loupe.removeEventListener('wheel', this.mousewheelZoom);
                  } else if ('onmousewheel' in document) {
                      this.loupe.removeEventListener('mousewheel', this.mousewheelZoom);
                  } else {
                      this.loupe.removeEventListener('MozMousePixelScroll', this.mousewheelZoom);
                  }
              }

              //remove js-loupe css class from image
              this.image.classList.remove(this.settings.imageOnZoomCss);

              //remove loupe
              this.removeLoupe();
          },




          /**
           * Reload plugin for current image
           * @param  {object} [options] - custom options
           * @return {[type]}         [description]
           */
          reload: function (options) {

              options = options || this.settings;

              this.destroy();

              this.init(options);           
          },




          /**
           * Set new zoom value
           * @param {integer} zoom - new zoom value
           */
          setZoom: function (zoom) {

              //set new zoom value
              this.settings.zoom = zoom || this.settings.zoom;

              //set news coefficient value
              this.factor = this.settings.zoom / 100;

              //set new half radius value
              this.halfRadius = this.settings.radius / 2;

              //repaint loupe
              this.repaintLoupe();

              //recalculate loupe
              this.recalcLoupe();
          },




          /**
           * Set new radius value
           * @param {integer} radius - new radius value
           */
          setRadius: function (radius) {

              //set new radius value
              this.settings.radius = radius || this.settings.radius;

              //set new half radius value
              this.halfRadius = this.settings.radius / 2;


              //repaint loupe
              this.repaintLoupe();

              //recalculate loupe
              this.recalcLoupe();
          }
      };





      /**
       * Encapsulation
       * @return {Object} - this handle
       */
      root[common.className] = function () {

          function construct(constructor, args) {

              function Class() {
                  return constructor.apply(this, args);
              }
              Class.prototype = constructor.prototype;
              return new Class();
          }

          var original = construct(Protected, arguments),
              Publicly = function () {};
          
          Publicly.prototype = {};
          Array.prototype.forEach.call(common.publicMethods, function (member) {
              Publicly.prototype[member] = function () {
                  return original[member].apply(original, arguments);
              };
          });

          return new Publicly(arguments);
      };

  }(this));
  //Run plugin
  new JsLoupe('.picture');


