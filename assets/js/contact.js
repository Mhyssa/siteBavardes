// déclaration des variables pour le formulaire de contact pour la récupération de la valeur des champs de saisie
let cnom = document.getElementById('nom');
let cprenom = document.getElementById('prenom');
let cmail = document.getElementById('mail');
let cville = document.getElementById('ville');
let cobjet = document.getElementById('objet');
let cmessage = document.getElementById('message');

// définition du ciblage pour l'affichage du message d'erreur
let missCnom = document.getElementById('missNom');
let missCprenom = document.getElementById('missPrenom');
let missCmail = document.getElementById('missMail');
let missCville = document.getElementById('missVille');
let missCobjet = document.getElementById('missObjet');
let missCmessage = document.getElementById('missMessage');

//regex
let nomValid = /^[a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ]+([-'\s][a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ][a_zÃ©Ã¨ÃªÃ Ã§Ã©Ã¨Ã®Ã¯]+)?$/;
let pnomValid = /^[a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ]+([-'\s][a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ][a_zÃ©Ã¨ÃªÃ Ã§Ã©Ã¨Ã®Ã¯]+)?$/;
let mailValid = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/;
let villeValid =/^[a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ]+([-'\s][a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ][a_zÃ©Ã¨ÃªÃ Ã§Ã©Ã¨Ã®Ã¯]+)?$/;
let objetValid = /^[a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ]+([-'\s][a-zA-ZÃ©Ã¨Ã®Ã¯Ã‰ÃˆÃŽÃ][a_zÃ©Ã¨ÃªÃ Ã§Ã©Ã¨Ã®Ã¯]+)?$/;
let messageValid = /[a-zA-Z0-9.,;_-]{5,250}/;

// quand il y a perte de focus sur un champ
//cnom.onblur = cnomCheck;
//cprenom.onblur = cprenomCheck;
//cmail.onblur = cmailCheck;
//cville.onblur = cvilleCheck;
//cobjet.onblur = cobjetCheck;
//cmessage.onblur = cmessageCheck;

// déclaration des fonctions pour vérifier les champs de saisie
    // vérification du champ nom
    function cnomCheck() {
        if (cnom.validity.valueMissing) {
            event.preventDefault()
            missNom.textContent = 'Renseigner ce champ /Complete this field';
            missNom.style.color = 'red';
        }
        else if (nomValid.test(cnom.value) == false) {
            event.preventDefault();
            missCnom.textContent = 'Format incorrect / wrong formt';
            missCnom.style.color = 'orange';
        }
        else {
            missCnom.textContent = 'Ok !';
            missCnom.style.color = 'green';
        }
    } ;

    // vérification du champ prénom (pas obligatoire, juste verif format avec regex)
    function cprenomCheck() {
        if (pnomValid.test(cprenom.value) == false) {
            event.preventDefault();
            missCprenom.textContent = 'Format incorrect / wrong formt';
            missCprenom.style.color = 'orange';
        }
        else {
            missCprenom.textContent = 'Ok !';
            missCprenom.style.color = 'green';
        }
    } ;

    // vérification du champ mail
    function cmailCheck() {
        if (cmail.validity.valueMissing) {
            event.preventDefault()
            missCmail.textContent = 'Renseigner ce champ /Complete this field';
            missCmail.style.color = 'red';
        }
        else if (mailValid.test(cmail.value) == false) {
            event.preventDefault();
            missCmail.textContent = 'Format incorrect / wrong formt';
            missCmail.style.color = 'orange';
        }
        else {
            missCmail.textContent = 'Ok !';
            missCmail.style.color = 'green';
        }
    } ;

       // vérification du champ ville (pas obligatoire, juste verif format avec regex)
       function cvilleCheck() {
        if (villeValid.test(cville.value) == false) {
            event.preventDefault();
            missCville.textContent = 'Format incorrect / wrong formt';
            missCville.style.color = 'orange';
        }
        else {
            missCville.textContent = 'Ok !';
            missCville.style.color = 'green';
        }
    } ;

    // vérification du champ objet
    function cobjetCheck() {
        if (cobjet.validity.valueMissing) {
            event.preventDefault()
            missCobjet.textContent = 'Renseigner ce champ /Complete this field';
            missCobjet.style.color = 'red';
        }
        else if (objetValid.test(cobjet.value) == false) {
            event.preventDefault();
            missCobjet.textContent = 'Format incorrect / wrong formt';
            missCobjet.style.color = 'orange';
        }
        else {
            missCobjet.textContent = 'Ok !';
            missCobjet.style.color = 'green';
        }
    } ;

     // vérification du champ message
     function cmessageCheck() {
        if (cmessage.validity.valueMissing) {
            event.preventDefault()
            missCmessage.textContent = 'Renseigner ce champ /Complete this field';
            missCmessage.style.color = 'red';
        }
        else if (messageValid.test(cobjet.value) == false) {
            event.preventDefault();
            missCmessage.textContent = 'Format incorrect / wrong formt';
            missCmessage.style.color = 'orange';
        }
        else {
            missCmessage.textContent = 'Ok !';
            missCmessage.style.color = 'green';
        }
    } ;

    console.log("hello !");