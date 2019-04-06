//Validation des formulaires

$(function() {
  //valider mot de passe et pseudo
    jQuery.validator.addMethod("selectnic", function (value, element) {
        if (/^[a-zA-Z0-9]+$/i.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Seuls les caractères <br>alphanumériques sont autorisés");


    //valider adresse mail
   jQuery.validator.addMethod("email", function (value, element) {
          if (/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i.test(value)) {
              return true;
          } else {
              return false;
          };
      }, "Adresse email non valide");


$('form[class="form"]').validate(
    {


         onkeyup : false, 
        ignore: "",

        rules:
        {

            title :'required',

            horaires:'required',

            duree:'required',

            author:"required",

            image :'required',
            
            content:'required',

            comment:'required',
            
            video:'required',

            object:'required',
            
            msg:'required',


            name:
            {   
                required: true,
                minlength: 3,
            
            } ,    

            pseudo:
            {
                required: true,
                minlength: 3,
                maxlength: 20,
                selectnic:true,
               
            },


            password:
            {
                required: true,
                minlength: 6,
                selectnic:true,
            },


            password_confirm : {
                required : true,
                equalTo : "#password",

            },

            email:{
              required:true,
              email:true,
              minlength: 3,
            },

            hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
           

        },
        messages: 
        {
          
            hiddenRecaptcha :'veuillez cocher la case',

            title:'Veuillez entrer un titre ',

            author: 'Veuillez entrer un auteur ',

            image :'veuillez entrer une image',
           
            content:'veuillez entrer un résumé',

            msg:'veuillez entrer votre message',

            name :{
              required :'Veuillez entrer votre nom',
              minlength :'Veuillez entrer au moins 3 caractères'
 
            },

            object :'Veuillez entrer un sujet ',

            comment:'veuillez entrer un commentaire',

            email:   {
                required: 'Veuillez entrer une adresse mail ',
                minlength: "Veuillez entrer au moins 3 caractères"
               
            },
            

            pseudo:
            {
                required: 'veuillez entrer un pseudo',
                minlength: "Veuillez entrer au moins 3 caractères",
                maxlength: "Veuillez ne pas dépasser 20 caractères"
            },

         
            password: {
                required: 'Veuillez entrer un mot de passe',
                minlength: "Veuillez insérer au moins 6 caractères"
            
            },

            password_confirm : {
                required: 'Veuillez confirmer votre mot de passe ',
                equalTo : "les deux mots de passe doivent être identiques"
            },

        },

        errorPlacement: function(error, element) {
            element.attr("placeholder",error.text());
        },

       submitHandler: function (form)
        {
            return true;
        }
    });



});






//formulaire pour login
$(function() {


  jQuery.validator.addMethod("selectnic", function (value, element) {
        if (/^[a-zA-Z0-9]+$/i.test(value)) {
            return true;
        } else {
            return false;
        };
  }, "Seuls les caractères alphanumériques sont autorisés");


$('form[class="formLogin"]').validate(
    {


        onkeyup : false,    
        ignore: "",

        rules:
        {

            pseudo:
            {
                required: true,
                minlength: 3,
                selectnic:true    
            },

            pass:
            {
                required: true,
                minlength: 6,
                selectnic:true 
            },

 
        },

        messages: 
        {
            
            pseudo:
            {
                required: 'Veuillez entrer votre pseudo',
                minlength: "Veuillez insérer au moins 3 caractères"
               
            },

            pass: {
              required: 'mot de passe requis',
              minlength: "Veuillez insérer au moins 6 caractères"
            
            },
      

        },

        errorPlacement: function(error, element) {
            element.attr("placeholder",error.text());
        },
        submitHandler: function (form)
        {
            return true;
        }
    });



});

