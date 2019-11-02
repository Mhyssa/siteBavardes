<?php
$to = "staffbavardes@gmail.com";
// $formError = array();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$question = $_POST['question'];
$headers  =     'from '.$mail;
$headers .= 'reply-to: '.$to;
// $headers .=   'reply '.$to;
$headers.=   'x-mailer '.'PHP/'.phpversion();



$mailPattern = '/[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/';
 mail ($to,$question,$headers);
// if (isset($_POST['submit'])) {
   
//     if (!empty($_POST['mail'])) {
//         if (preg_match($mailPattern, $_POST['mail'])) {
//             $mail = $_POST['mail'];
//         } else {
//             $formError['mail'] = 'Saisie incorrect!!';
//         }
//     } else {
//         $formError['mail'] = 'Veuillez renseigner le champs "Email"';
//     }

   
?>