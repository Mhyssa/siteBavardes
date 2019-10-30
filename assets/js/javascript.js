var formValid = document.getElementById('bouton_envoi');


var nom = document.getElementById('nom');
var nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
var missNom = document.getElementById('missNom');


var prenom = document.getElementById('prenom');
var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
var missPrenom = document.getElementById('missPrenom');


var mail = document.getElementById('mail');
var mailValid = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/;
var missMail = document.getElementById('missMail');


var question = document.getElementById('question');
var missQuestion = document.getElementById('missQuestion');

var checkbox = document.getElementById('validCheck');
var missCheck = document.getElementById('missCheck');


formValid.addEventListener('click', validation);
                    

function validation(event)
    {
        //si le champ est vide
        if (nom.validity.valueMissing)
            {
                event.preventDefault();
                missNom.textContent ='* ce champ est obligatoire';
                missNom.style.color = 'red';

            }

            else if (nomValid.test(nom.value) == false)
            {
                event.preventDefault();
                missNom.textContent = 'Saisissez un nom valide';
                missNom.style.color = 'red';
            }    

            if (prenom.validity.valueMissing)
                {
                    event.preventDefault();
                    missPrenom.textContent ='* ce champ est obligatoire';
                    missPrenom.style.color = 'red';
                }
                        
            else if (prenomValid.test(prenom.value) == false)
                {
                    event.preventDefault();
                    missPrenom.textContent = 'Saisissez un prénom valide';
                    missPrenom.style.color = 'red';
                }

            if (mail.validity.valueMissing)
                {
                    event.preventDefault();
                    missMail.textContent ='* ce champ est obligatoire';
                    missMail.style.color = 'red';
                }
                        
            else if (mailValid.test(mail.value) == false)
                {
                    event.preventDefault();
                    missMail.textContent = '* Saisissez une adresse mail valide';
                    missMail.style.color = 'red';
                }

            if (question.validity.valueMissing)
                {
                    event.preventDefault();
                    missQuestion.textContent ='* ce champ est obligatoire';
                    missQuestion.style.color = 'red';
                }

            if (checkbox.validity.valueMissing)
                {
                    event.preventDefault();
                    missCheck.textContent ='* ce champ est obligatoire';
                    missCheck.style.color = 'red';
                }
    }  