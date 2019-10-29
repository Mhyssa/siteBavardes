var formValid = document.getElementById('bouton_envoi')

var nom = document.getElementById('nom')
var missNom = document.getElementById('missNom')

var prenom = document.getElementById('prenom')
var missPrenom = document.getElementById('missPrenom')

var mail = document.getElementById('mail')
var missMail = document.getElementById('missMail')

var message = document.getElementById('message')
var missMessage = document.getElementById('missMessage')

formValid.addEventListener('click', validation);

function validation(event){

  if (prenom.validity.valueMissing) {
    event.preventDefault();
    missPrenom.textContent ='Prénom manquant';
    missPrenom.style.color ='red';
  }
}
