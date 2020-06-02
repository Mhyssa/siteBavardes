// déclaration de variable qui serviront à la récupération de la valeur des champs de saisie
var prenom = document.getElementById('us_fname');
var nom = document.getElementById('us_lname');
var mail = document.getElementById('us_email');
var phone = document.getElementById('us_phone');
var psw = document.getElementById('us_password');
var confpsw = document.getElementById('us_conf_password');
var captcha = document.getElementById('user_captcha');

// définition du ciblage pour l'affichage du message d'erreur
var missPrenom = document.getElementById('missPrenom');
var missNom = document.getElementById('missNom');
var missMail = document.getElementById('missMail');
var missPhone = document.getElementById('missPhone');
var missPsw = document.getElementById('missPsw');
var missConfPsw = document.getElementById('missConfPsw');
var missCaptcha = document.getElementById('missCaptcha');

// définition des conditions de validation des champs de saisie
var mailValid = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/;
var nameValid = /^[a-zA-ZéèîïÉÈÎÏ]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a_zéèêàçéèîï]+)?$/;
var phoneValid = /^0[1-9]([-. ]?[0-9]{2}){4}$/;

// quand il y a perte de focus sur un champ
prenom.onblur = prenomCheck;
nom.onblur = nomCheck;
mail.onblur = mailCheck;
phone.onblur = phoneCheck;
psw.onblur = pswCheck;
confpsw.onblur = confpswCheck;
captcha.onblur = captchaCheck;

// déclaration des fonctions vérifiant les champs de saisie du formulaire
    // vérification du champ prenom
    function prenomCheck() {
        if (prenom.validity.valueMissing) {
            event.preventDefault()
            missPrenom.textContent = 'Renseigner ce champ';
            missPrenom.style.color = 'red';
        } else if (nameValid.test(prenom.value) == false) {
            event.preventDefault();
            missPrenom.textContent = 'Format incorrect';
            missPrenom.style.color = 'orange';
        } else {
            missPrenom.textContent = 'Ok !';
            missPrenom.style.color = 'green';
        }
    };
    // vérification du champ nom
    function nomCheck(){
        if (nom.validity.valueMissing) {
            event.preventDefault()
            missNom.textContent = 'Renseigner ce champ';
            missNom.style.color = 'red';
        } else if (nameValid.test(nom.value) == false) {
            event.preventDefault();
            missNom.textContent = 'Format incorrect';
            missNom.style.color = 'orange';
        } else {
            missNom.textContent = 'Ok !';
            missNom.style.color = 'green';
        }
    };
    // vérification du champ email
    function mailCheck(){
        if(mail.validity.valueMissing) {
            event.preventDefault()
            missMail.textContent = 'Renseigner ce champ';
            missMail.style.color = 'red';
        } else if(mailValid.test(mail.value) == false) {
            event.preventDefault();
            missMail.textContent = 'Format incorrect, format correct ex: mail@example.fr';
            missMail.style.color = 'orange';
        } else {
            missMail.textContent = 'Ok !';
            missMail.style.color = 'green';
        }
    };
    // vérification du champ téléphone
    function phoneCheck(){
        if(phone.validity.valueMissing){
            event.preventDefault()
            missPhone.textContent = 'Renseigner ce champ';
            missPhone.style.color = 'red';
        } else if(phoneValid.test(phone.value) == false) {
            event.preventDefault();
            missPhone.textContent = 'Format incorrect, format correct ex: 0102030405';
            missPhone.style.color = 'orange';
        } else {
            missPhone.textContent = 'Ok !';
            missPhone.style.color = 'green';
        }
    };
    // vérification du champ mot de passe
    function pswCheck(){
        if(psw.validity.valueMissing){
            event.preventDefault()
            missPsw.textContent = 'Renseigner ce champ';
            missPsw.style.color = 'red';
        } else {
            missPsw.textContent = 'Ok !'
            missPsw.style.color = 'green';
        }
    };
    // vérification du champ mot de passe (à confirmer)
    function confpswCheck(){
        if(confpsw.validity.valueMissing){
            event.preventDefault()
            missConfPsw.textContent = 'Renseigner ce champ';
            missConfPsw.style.color = 'red';
        } else {
            missConfPsw.textContent = 'Ok !'
            missConfPsw.style.color = 'green';
        }
    };
    // vérification du champ captcha
    function captchaCheck(){
        if(captcha.validity.valueMissing){
            event.preventDefault()
            missCaptcha.textContent = 'Renseigner ce champ';
            missCaptcha.style.color = 'red';
        } else {
            missCaptcha.textContent = 'Ok !'
            missCaptcha.style.color = 'green';
        }
    };