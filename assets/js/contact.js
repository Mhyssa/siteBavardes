$(document).ready(function() 
{
// déclaration des variables pour le formulaire de contact pour la récupération de la valeur des champs de saisie
let formValid = document.getElementById('submit');

let cnom = document.getElementById('nom');
let cprenom = document.getElementById('prenom');
let cmail = document.getElementById('mail');
let cville = document.getElementById('ville');
let cobjet = document.getElementById('objet');
let cmessage = document.getElementById('message');

// définition du ciblage pour l'affichage du message d'erreur
let missCnom = document.getElementById('missNom');
let missCmail = document.getElementById('missMail');
let missCobjet = document.getElementById('missObjet');
let missCmessage = document.getElementById('missMessage');

//regex
let cnomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
let cpnomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
let cmailValid = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/;
let cvilleValid =/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
let cobjetValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
let cmessageValid = /[a-zA-ZéèîïÉÈÎÏéèêàçîï0-9.,;_-]{5,250}/;

// quand il y a perte de focus sur un champ
//cnom.onblur = cnomCheck;
//cprenom.onblur = cprenomCheck;
//cmail.onblur = cmailCheck;
//cville.onblur = cvilleCheck;
//cobjet.onblur = cobjetCheck;
//cmessage.onblur = cmessageCheck;

// vérification des champs de saisie 

//formValid.addEventListener('click', validation);

    function validation(event) {
    //vérification du champ nom

        //si le champ est vide
        if (cnom.validity.valueMissing) {
            event.preventDefault()
            missNom.textContent = 'Renseigner ce champ /Complete this field';
            missNom.style.color = 'red';
        }
        //si le format de données est incorrect
        else if (cnomValid.test(cnom.value) == false) {
            event.preventDefault();
            missCnom.textContent = 'Format incorrect / wrong formt';
            missCnom.style.color = 'orange';
        }
        else {
            missCnom.textContent = 'Ok !';
            missCnom.style.color = 'green';
        }
    

    // vérification du champ prénom (pas obligatoire, juste verif format avec regex)
    
        if (cpnomValid.test(cprenom.value) == false) {
            event.preventDefault();
            cprenom.textContent = 'Format incorrect / wrong formt';
            cprenom.style.color = 'orange';
        }
        else {
            cprenom.textContent = 'Ok !';
            cprenom.style.color = 'green';
        }

    // vérification du champ mail
    
        if (cmail.validity.valueMissing) {
            event.preventDefault()
            missCmail.textContent = 'Renseigner ce champ /Complete this field';
            missCmail.style.color = 'red';
            }
        else if (cmailValid.test(cmail.value) == false) {
            event.preventDefault();
            missCmail.textContent = 'Format incorrect / wrong formt';
            missCmail.style.color = 'orange';
            }
        else {
            missCmail.style.color = 'green';
            }
     

       // vérification du champ ville (pas obligatoire, juste verif format avec regex)
       
        if (cvilleValid.test(cville.value) == false) {
            event.preventDefault();
            cville.textContent = 'Format incorrect / wrong formt';
            cville.style.color = 'orange';
            }
        else {
            cville.style.color = 'green';
            }
  

    // vérification du champ objet
    
        if (cobjet.validity.valueMissing) {
            event.preventDefault()
            missCobjet.textContent = 'Renseigner ce champ /Complete this field';
            missCobjet.style.color = 'red';
        }
        else if (cobjetValid.test(cobjet.value) == false) {
            event.preventDefault();
            missCobjet.textContent = 'Format incorrect / wrong formt';
            missCobjet.style.color = 'orange';
        }
        else {
            missCobjet.textContent = 'Ok !';
            missCobjet.style.color = 'green';
        }
    

     // vérification du champ message
     
        if (cmessage.validity.valueMissing) {
            event.preventDefault()
            missCmessage.textContent = 'Renseigner ce champ /Complete this field';
            missCmessage.style.color = 'red';
        }
        else if (cmessageValid.test(cobjet.value) == false) {
            event.preventDefault();
            missCmessage.textContent = 'Format incorrect / wrong formt';
            missCmessage.style.color = 'orange';
        }
        else {
            missCmessage.textContent = 'Ok !';
            missCmessage.style.color = 'green';
        }
    } ;

    $("#submit").click(function(event) 
{
    /* On doit bloquer l'èvènement par défaut - ici l'envoi du formulaire -
    * avec l'instruction preventDefault() 
    * le paramètre 'event' est un objet (nommé 
    * librement) représentant l'évènement
    */         
    event.preventDefault();

    // Appel de la fonction validation()
    validation();   
}); 
});